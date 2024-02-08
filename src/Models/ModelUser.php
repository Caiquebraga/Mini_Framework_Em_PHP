<?php

use myproject\Models\BaseModel;
use myproject\Services\Database;

class ModelUser extends BaseModel{
    protected $table = 'user';
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db->conectar();
    }

    public function getUserById($userid){
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $userid, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }


        public function getUsers(){
        $query = "SELECT * FROM {$this->table}";
        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
        }

}