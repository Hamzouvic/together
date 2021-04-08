<?php
class Database
{
    private $dsn = 'mysql:dbname=test;host=127.0.0.1';
    private $user = 'root';
    private $password = '';

    protected $connection = null;

    public function __construct(){
        if(isset($this->connection)) return;
        try {
            $this->connection = new PDO($this->dsn,$this->user,$this->password);
        }catch(PDOException $ex){
            echo "connection failed";
                die();
        }
    }
    

    public function connect($username,$password){
        $sql = "SELECT * FROM users WHERE username = '$username' and password ='$password'";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC); // fetch assoc because that means array by column name
        if ($query->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }
}
