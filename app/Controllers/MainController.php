<?php

namespace App\Controllers;

use App\Models\Article;


class MainController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
       
        $categoriesList = Category::findAllHomepage();

        // $productModel = new Product();
        // $productsList = $productModel->findAllHomepage();
        $productsList = Product::findAllHomepage();

        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('main/home', [
            'categories' => $categoriesList,
            'products' => $productsList,
        ]);
    }
}
