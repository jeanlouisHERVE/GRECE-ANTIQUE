<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class AppUser extends CoreModel
{
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    private $role;
    private $status;
    
    /**
     * @return string|null
     */ 
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */ 
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */ 
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return void
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string|null
     */ 
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return void
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string|null
     */ 
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return void
     */ 
    public function setRole(string $role)
    {
        $this->role = $role;
    }

    /**
     * @return int|null
     */ 
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return void
     */ 
    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM app_user
            WHERE id = :id
        ';

        // On remplace le query() par prepare+execute+fetchObject
        // prepare() retourne un objet PDOStatement
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':id' => $id]);
        $result = $pdoStatement->fetchObject(self::class);
        
        return $result;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `app_user`';
        $pdoStatement = $pdo->prepare($sql);
        // On utilise désormais prepare+execute partout, notamment pour des raisons de sécurité
        // quand on a au moins un paramètre dans la requête.
        // Cependant ici on n'a aucun paramètre. On utilise tout de même prepare+execute pour avoir du code propre.
        // Si un jour on souhaite ajouter des paramètres, la méthode execute() est déjà appelée,
        // il suffira de modifier son argument.
        $pdoStatement->execute();
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class); // self::class === "App\Models\AppUser"
        
        return $results;
    }

    public static function findByEmail(string $email)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM app_user
            WHERE email = :email
        ';

        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([':email' => $email]);
        $result = $pdoStatement->fetchObject(self::class);
        
        return $result;
    }

    public function insert()
    {
        $pdo = Database::getPDO();

        $sql = '
            INSERT INTO app_user (email, password, firstname, lastname, role, status)
            VALUES (:email, :password, :firstname, :lastname, :role, :status)
        ';
        // On indique que le statut par défaut du produit est 2 (indisponible) selon les informations du Product Owner

        $pdoStatement = $pdo->prepare($sql);

        $queryWorked = $pdoStatement->execute([
            ':email' => $this->email,
            ':password' => $this->password,
            ':firstname' => $this->firstname,
            ':lastname' => $this->lastname,
            ':role' => $this->role,
            ':status' => $this->status,
        ]);

        // $queryWorked est un booléen qui indique si la requête a fonctionné ou non
        if ($queryWorked) {
            $this->id = $pdo->lastInsertId();

            return true;
        } else {
            return false;
        }
    }

    public function update()
    {
        // pour l'instant, la méthode ne fait rien, on l'implémente juste pour respecter les méthodes abstraites de CoreModel
    }

    public function delete()
    {
        // pour l'instant, la méthode ne fait rien, on l'implémente juste pour respecter les méthodes abstraites de CoreModel
    }
}