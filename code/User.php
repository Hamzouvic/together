<?php
include_once 'Database.php';

class User
{
    protected $connected = false;

    public function __constructor(){

    }
    // connect to the system

    public function connect($username,$password){
        $e = new Database();
        $this->connected = $e->connect($username,$password);
        if ($this->connected) {
            session_start();
            $_SESSION['connected'] = true;        
            header('Location: dashboard.php');
        }
        
    }

    //create a demande for help
    public function createPublication(){

    }
    
    //donate money to a certain publication
    public function donate(){

    }

    //show all the publication
    public function showPublication(){
        
    }
}
