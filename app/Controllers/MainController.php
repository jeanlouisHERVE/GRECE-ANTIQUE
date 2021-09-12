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
        
        $threeBestRatedArticle = Article::findThreeBestRatedArticle();
        $this->show('main/home',['threeBestRatedArticle' => $threeBestRatedArticle,
        
        ]);
                   
        
    }

    public function contact()
    {
       
        $this->show('main/contact', [
           
        ]);
    }

    public function contactPost()
    {
       
        $this->show('main/contact', [
           
        ]);
    }

    public function apropos()
    {
       
        $this->show('main/apropos', [
           
        ]);
    }


}
