<?php

namespace App\Controllers;

use App\Models\Article;
use App\Utils\Database;
use PDO;

class ArticleController extends CoreController
{
    public function list()
    {
        $this->show('main/articleList');
    }
   


    public function category()
    {
        $this->show('main/categoryarticle');
    }


    public function view()
    {
        $this->show('main/mostviewedarticle');
    }

    public function rate()
    {
        $this->show('main/bestratedarticle');
    }

    public function alphabetical()
    {
        $this->show('main/alphabeticalorderarticle');
    }
}