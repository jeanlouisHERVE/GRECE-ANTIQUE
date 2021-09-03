<?php

namespace App\Models;

use App\Utils\Database;
use App\Models\Category;
use App\Models\Author;
use PDO;

class Article extends CoreModel
{
    private $title;
    private $resume;
    private $content;
    private $category_id;
    private $author_id;
    private $rate;
 

    public static function find($id)
    {

        $sql = 
           'SELECT * 
            FROM `article` 
            INNER JOIN `category` ON article.category_id = category.id 
            INNER JOIN `author` ON article.author_id = author.id
            WHERE article.id = :id';
        ;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':id' => $id]);
        $result = $pdoStatement->fetchObject(self::class);
        
        return $result;
    }

    public static function findAll()
    {
       
    }

    public static function findAllTitleOfArticle()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT `id`,`title` FROM `article`';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $titleList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $titleList;
    }

    public static function titleList()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT `id`,`title` FROM `article`';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $titleList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $titleList;
    }

    public static function findArticlesByCategory($categoryId)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * ,
                category.id AS category_Id
                FROM `article`
                INNER JOIN `category` ON article.category_id = category.id
                WHERE category_Id = :id';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':id' => $categoryId]);
        $articleByCategory = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $articleByCategory;
    }

    public static function findAlphabetical()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * 
                FROM `article`
                ORDER BY `title` asc';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $orderArticlesByAlphabetical = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $orderArticlesByAlphabetical;
    }
    
    public static function findThreeBestRatedArticle()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * 
                FROM `article`
                ORDER BY `rate` desc
                LIMIT 3';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $orderThreeBestRatedArticle = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $orderThreeBestRatedArticle;
    }
    
    public static function findBestRatedArticle()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * 
                FROM `article`
                ORDER BY `rate` desc';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $orderBestRatedArticle = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $orderBestRatedArticle;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }


    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

      /**
     * Get the value of Author
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }

          /**
     * Get the value of rate
     */ 
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of carate
     *
     * @return  self
     */ 

    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }

    /**
     * Get the value of getCategory
     */ 
    public function getCategory()
    {
        $category = Category::find($this->getCategory_id());
        
        return $category;
    }


    /**
     * Get the value of getAuthor
     */ 
    public function getAuthor()
    {
        $author = Author::find($this->getAuthor_id());
        
        return $author;
    }


}