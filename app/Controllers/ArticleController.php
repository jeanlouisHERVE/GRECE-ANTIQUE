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
   


    public static function find($ArticleId)
    {
        $pdo = Database::getPDO();

        $sql = '
        SELECT *
        FROM article
        WHERE id = ' . $ArticleId;

        $pdoStatement = $pdo->query($sql);

        $brand = $pdoStatement->fetchObject(self::class);
        return $brand;
    }
}