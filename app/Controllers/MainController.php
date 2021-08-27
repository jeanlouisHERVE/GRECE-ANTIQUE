<?php

namespace App\Controllers;



class MainController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
       
        $this->show('main/home', [
           
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
}
