<?php

namespace App\Controllers;

abstract class CoreController
{
    public function __construct()
    {

        global $match;
        
        if (is_bool($match)) {
            return ;
        }
        $routeName = $match['name'];
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

        global $router;

        $viewData['currentPage'] = $viewName; 

        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);
      
        require_once __DIR__.'/../Views/layout/header.tpl.php';
        require_once __DIR__.'/../Views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../Views/layout/footer.tpl.php';
        
    }

}
