<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Category extends CoreModel
{
    private $name;
    private $picture;
    

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM article
            WHERE id = :id
        ';

        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':id' => $id]);
        $result = $pdoStatement->fetchObject(self::class);
        
        return $result;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category`';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $categories = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $categories;
    }

    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }

        /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

        /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}