<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Author extends CoreModel
{
    private $firstname;
    private $lastname;
    

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM author
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
        $sql = 'SELECT * FROM `author`';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $authors = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); 
        
        return $authors;
    }

    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }

    

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
}