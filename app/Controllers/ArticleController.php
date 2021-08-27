<?php

namespace App\Controllers;

use App\Models\Article;
use App\Utils\Database;
use PDO;

class ArticleController extends CoreController
{
    public function list()
    {
        $this->show('article/articleList');
    }
   

    public function category()
    {
        $this->show('article/categoryarticle');
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