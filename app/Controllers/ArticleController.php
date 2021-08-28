<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Utils\Database;
use PDO;

class ArticleController extends CoreController
{
    public function list()
    {

       
        
    }
   

    public function category()
    {
        $Categories = Category::findAll();

        $this->show('article/categoryarticle', ['categories' => $Categories,]);
    }


    public function view()
    {
        $this->show('article/mostviewedarticle');
    }

    public function rate()
    {
        $this->show('article/bestratedarticle');
    }

    public function alphabetical()
    {
        $this->show('article/alphabeticalorderarticle');
    }
}