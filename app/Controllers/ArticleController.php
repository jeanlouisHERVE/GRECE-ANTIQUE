<?php

namespace App\Controllers;

use App\Models\Article;

class ArticleController extends CoreController
{
    public function list()
    {
       
        $listeDesCategories = Article::findAll();

            $this->show('article/list', [
            'articles' => $listeDesArticles,
        ]);
    }
   
}