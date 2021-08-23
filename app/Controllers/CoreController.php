<?php

namespace App\Controllers;

abstract class CoreController
{
    public function __construct()
    {
        // La variable $match contient les infos sur la route courante
        global $match;

        // On aurait une erreur ligne 18 si $match vaut false car on ne peut pas lui demander une clé
        // Donc si $match est un booléen, on laisse ErrorController s'occuper de la route et il n'y a pas de droit à tester
        if (is_bool($match)) {
            // On sort de l'exécution du constructeur grace à return
            return ;
        }
        // On récupère le nom de la route courante
        // On va se servir du nom de la route demandée pour la faire coincider avec les ACL
        $routeName = $match['name'];

        // On définit la liste des permissions pour les routes nécessitant une connexion utilisateur
        $acl = [
            // 'security-login' => [], => pas besoin, la route est libre d'accès
            'main-home' =>              ['admin', 'catalog-manager'],
            'app-user-list' =>          ['admin'],
            'app-user-create' =>        ['admin'],
            'app-user-create-post' =>   ['admin'],
            'category-list' =>          ['admin', 'catalog-manager'],
            'category-create' =>        ['admin', 'catalog-manager'],
            'category-create-post' =>   ['admin', 'catalog-manager'],
            'category-update' =>        ['admin', 'catalog-manager'],
            'category-update-post' =>   ['admin', 'catalog-manager'],
            'category-home-order' =>    ['admin', 'catalog-manager'],
            'category-home-order-post'=>['admin', 'catalog-manager'],
            'product-list' =>           ['admin', 'catalog-manager'],
            'product-create' =>         ['admin', 'catalog-manager'],
            'product-create-post' =>    ['admin', 'catalog-manager'],
            'product-update' =>         ['admin', 'catalog-manager'],
            'product-update-post' =>    ['admin', 'catalog-manager'],
            'product-delete' =>         ['admin', 'catalog-manager'],
        ];

        // On vérifie que la route demandée est dans les ACL
        // On utilise array_key_exists() qui vérifie la présence d'une clé dans un tableau associatif
        // C'est un peu comme in_array mais avec les clés et pas les valeurs
        if (array_key_exists($routeName, $acl)) {
            // Alors on récupère le tableau des roles autorisés
            $authorizedRoles = $acl[$routeName];

            // On exécute checkAuthorization() ici au lieu de l'exécuter dans chacune des méthodes
            $this->checkAuthorization($authorizedRoles);
        }
        // Sinon, on ne fait rien, on laisse la suite du script se faire (afficher)

        //-----
        // Token anti-CSRF 
        //-----
        $csrfTokenToCreate = [
            'app-user-create',
            'category-create',
            'category-update',
            'category-home-order',
            'product-create',
            'product-update',
            'security-login',
        ];

        if (in_array($routeName, $csrfTokenToCreate)) {   
            // On est sur une url qui affiche un formulaire
            // Désormais, pour se prémunir d'une potentielle attaque de type CSRF
            // Il faut générer un token, et pour ça on choisit la logique qu'on veut
            $_SESSION['token'] = bin2hex(random_bytes(32));
        }
            
        // On déclare la liste des routes pour lesquelles on souhaite vérifier que le token anti-csrf est bon
        // Ce sont dont toutes les routes qui reçoivent un formulaire en POST
        $csrfTokenToCheckInPost = [
            'app-user-create-post',
            'category-create-post',
            'category-update-post',
            'category-home-order-post',
            'product-create-post',
            'product-update-post',
            'security-login-post',
        ];

        // Si la route actuelle nécessite la vérification d'un token anti-CSRF
        if (in_array($routeName, $csrfTokenToCheckInPost)) {
            // On récupère le token en POST
            $token = isset($_POST['token']) ? $_POST['token'] : '';
            // $token = filter_input(INPUT_POST, 'token');
            // $token = $_POST['token'] ?? '';

            // On récupère le token en SESSION
            $sessionToken = isset($_SESSION['token']) ? $_SESSION['token'] : '';
            // $sessionToken = $_SESSION['token'] ?? '';

            // Si les deux tokens sont différents ou que le token du formulaire est vide
            if ($token != $sessionToken || empty($token)) {
                // Alors on affiche une 403, ou on annonce une erreur dans le formulaire puis on demande de le renvoyer
                http_response_code(403);
                $this->show('error/err403');
                exit;
            } else {
                // Si tout va bien
                // On supprime le token en session
                // Ainsi, on ne pourra pas soumettre plusieurs fois le même formulaire, ni réutiliser ce token
                unset($_SESSION['token']);
            }
        }
    }

    /**
     * Méthode permettant d'afficher du code HTML en se basant sur les views
     *
     * @param string $viewName Nom du fichier de vue
     * @param array $viewData Tableau des données à transmettre aux vues
     * @return void
     */
    protected function show(string $viewName, $viewData = [])
    {
        // On globalise $router car on ne sait pas faire mieux pour l'instant
        global $router;

        // Comme $viewData est déclarée comme paramètre de la méthode show()
        // les vues y ont accès
        // ici une valeur dont on a besoin sur TOUTES les vues
        // donc on la définit dans show()
        $viewData['currentPage'] = $viewName; 

        // définir l'url absolue pour nos assets
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        // définir l'url absolue pour la racine du site
        // /!\ != racine projet, ici on parle du répertoire public/
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        // On veut désormais accéder aux données de $viewData, mais sans accéder au tableau
        // La fonction extract permet de créer une variable pour chaque élément du tableau passé en argument
        extract($viewData);
        // => la variable $currentPage existe désormais, et sa valeur est $viewName
        // => la variable $assetsBaseUri existe désormais, et sa valeur est $_SERVER['BASE_URI'] . '/assets/'
        // => la variable $baseUri existe désormais, et sa valeur est $_SERVER['BASE_URI']
        // => il en va de même pour chaque élément du tableau

        // $viewData est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';
    }

    /**
     * On crée une méthode qui vérifie les droits de l'utilisateur
     * Selon qu'il est connecté ou non, selon son role,
     *     on l'autorise à voir la page ou on le redirige ailleurs
     */
    public function checkAuthorization($roles = [])
    {
        // Si le user est connecté
        if (isset($_SESSION['userObject'])) {            
            // Alors on récupère l'utilisateur connecté (dans $_SESSION)
            $appUser = $_SESSION['userObject'];
            // Puis on récupère son role
            $roleUser = $appUser->getRole();
            
            // si le role fait partie des roles autorisées (fournis en paramètres)
            if (in_array($roleUser, $roles)) {
                // Alors on retourne vrai
                return true;
            } else {
                // Sinon le user connecté n'a pas la permission d'accéder à la page
                // => on envoie le header "403 Forbidden" avec http_response_code()
                http_response_code(403);
                
                // Puis on affiche la page d'erreur 403
                $this->show('error/err403');
                
                // Enfin on arrête le script pour que la page demandée ne s'affiche pas
                exit;
            }
        } else {       
            // Sinon, l'utilisateur n'est pas connecté à un compte
            // Alors on le redirige vers la page de connexion
            global $router;
            header('Location: ' . $router->generate('security-login'));
        }
    }
}
