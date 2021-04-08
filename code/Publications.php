<?php
include_once 'Database.php';

class Publication extends Database
{
    private $publications = array();

    public function __contruct(){
        
    }

    public function getAll(){
        $query = 'select * from publication';
        $stmn = $this->connection->prepare($query);
        $stmn->execute();
        $this->publications = $stmn->fetchAll(PDO::FETCH_ASSOC);
        return $this->publications;
    }

    public function getById($id){
        $query = "select * from publication where id = $id ";
        $stmn = $this->connection->prepare($query);
        $stmn->execute();
        $post = $stmn->fetchAll(PDO::FETCH_ASSOC);
        return $post[0];
    }
}