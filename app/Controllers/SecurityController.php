<?php

namespace App\Controllers;

use App\Models\AppUser;

/**
 * SecurityController est le nom qu'on retrouve souvent pour les fonctionnalités de connexion/déconnexion
 * Je (Djyp) l'utilise ici par habitude. On aurait pu mettre ces méthodes dans MainController aussi.
 * On aurait aussi pu utiliser UserController ou AppUserController.
 * Cependant, je juge que ces derniers serviraient plutot à y mettre les pages qui manipulent les objets AppUser (liste, ajout, modification, suppression : le CRUD)
 */
class SecurityController extends CoreController
{
    public function login()
    {
        $this->show('security/login');
    }

    public function loginPost()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $appUser = AppUser::findByEmail($email);

        // $appUser est soit un objet AppUser, soit le booléen false
        // Avant d'appeler ->getPassword dessus, on vérifie que ce n'est pas un booléen

        // instanceof est un opérateur de comparaison, comme un == ou un !=
        // Il retourne true ou false selon que l'objet à sa gauche est bien une instance de la classe à sa droite
        // On utilise désormais des mots de passe hashé en BDD. On les obtient avec password_hash()
        // On les vérifie avec password_verify(). Cette fonction s'occupe de faire les calculs nécessaire pour nous dire si le mot de passe est le bon ou non
        if ($appUser instanceof AppUser && password_verify($password, $appUser->getPassword())) {
            // echo 'Ok 🎉';

            // Comme les identifiants entrés sont les bons, on ajoute des informations dans $_SESSION
            $_SESSION['userId'] = $appUser->getId();
            $_SESSION['userObject'] = $appUser;

            // On redirige l'utilisateur sur la page d'accueil
            global $router;
            header('Location: ' . $router->generate('main-home'));
        } else {
            // echo 'marche pas';

            // On redirige l'utilisateur sur la page de login à nouveau
            global $router;
            header('Location: ' . $router->generate('security-login'));            
        }
    }

    /**
     * Déconnecte l'utilisateur en enlevant ses informations dans $_SESSION
     * Puis redirige vers la page de login
     */
    public function logout()
    {
        // On considère qu'un utilisateur est connecté simplement avec la présence ou l'absence
        // des clés userId et userObject dans $_SESSION
        // Pour déconnecter l'utilisateur, on va donc supprimer ces informations
        // unset() est une fonction de PHP qui détruit une variable
        //      On peut détruire une seule entrée dans un tableau ou tout une variable
        unset($_SESSION['userId']);
        unset($_SESSION['userObject']);

        // Comme l'utilisateur n'est plus identifiable et qu'on est sur un Back Office
        // on le redirige vers la route /login
        global $router;
        header('Location: ' . $router->generate('security-login'));
    }
}