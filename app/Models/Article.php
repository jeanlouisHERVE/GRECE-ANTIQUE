<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Article extends CoreModel
{
    private $title;
    private $resume;
    private $content;
    private $content2;
    private $content3;
    private $content4;
    private $category_id;
    private $author_id;

    public static function find($id)
    {

        $sql = '
            SELECT * FROM `article` 
            INNER JOIN `category` ON article.category_id = category.id 
            INNER JOIN `author` ON article.author_id = author.id
            WHERE article.id = :id'
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

    public static function findByCategory($CategoryId)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT *  
                FROM `article`
                INNER JOIN `category` ON article.category_id = category.id
                WHERE category.id = :id';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':id' => $CategoryId]);
        $ArticleByCategory = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $ArticleByCategory;
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
     * Get the value of content
     */ 
    public function getContent2()
    {
        return $this->content2;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent2($content2)
    {
        $this->content2 = $content2;

        return $this;
    }

       /**
     * Get the value of content
     */ 
    public function getContent3()
    {
        return $this->content3;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent3($content3)
    {
        $this->content3 = $content3;

        return $this;
    }

       /**
     * Get the value of content
     */ 
    public function getContent4()
    {
        return $this->content4;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent4($content4)
    {
        $this->content4 = $content4;
        
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

    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }
}