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
        $titleList = Article::titleList();
        $this->show('article/articleList',['titleList' => $titleList,]);
    }

    public function detailArticle($id)
    {
        $articleDetails = Article::find($id);

        $this->show('article/article',['articleDetails' => $articleDetails,]);
    }

    public function categories()
    {
        $categories = Category::findAll();

        $this->show('category/categoryList', ['categories' => $categories,]);
    }

    public function articlesByCategory($categoryId)
    {
        $articleByCategory = Article::findArticlesByCategory($categoryId);
        
        $this->show('category/articlesbycategory', ['articlesByCategory' => $articleByCategory,]);
    }
    
    public function view()
    {
        $this->show('article/mostviewedarticle');
    }

    public function rate()
    {
        $bestRatedArticles = Article::findBestRatedArticle();
        $this->show('article/bestratedarticle',['bestRatedArticle' => $bestRatedArticles,]);
    }

    public function alphabetical()
    {
        $alphabeticalOrder = Article::findAlphabetical();
        $this->show('article/alphabeticalorderarticle',['alphabeticalOrder' => $alphabeticalOrder,]);
    }
}