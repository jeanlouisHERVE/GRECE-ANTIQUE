<?php

namespace App\Models;

// Classe mère de tous les Models
// On centralise ici toutes les propriétés et méthodes utiles pour TOUS les Models

// CoreModel est désormais une classe abstraite
// Ça veut dire qu'il est interdit par PHP d'instancier CoreModel : new CoreMdoel() est impossible
// Ça veut aussi dire qu'on peut ajouter des méthodes, sans les coder,
// pour imposer à toutes les clases qui étendent CoreModel d'avoir des méthodes portant ces noms
abstract class CoreModel
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $created_at;
    /**
     * @var string
     */
    protected $updated_at;

  
    abstract public static function find($id);
    abstract public static function findAll();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();
    
  
    public function save()
    {
        if ($this->id === null) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }

    /**
     * Get the value of id
     *
     * @return int|null
     */ 
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * Get the value of created_at
     *
     * @return  string
     */ 
    public function getCreatedAt() : string
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     *
     * @return  string
     */ 
    public function getUpdatedAt() : string
    {
        return $this->updated_at;
    }
}
