<?php

class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "oop";

    private $conn = "";

    //function which will be called first once the object is created.
    public function __construct(){
        
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error){
            die("connection failed :" . $this->conn->connect_error);
        }
        else {
            echo "Database connected successfully";
        }
    }

    // function to insert data into the database. 
    public function insert(){
        
    }

    // function to update data into the database. 
    public function update(){
        
    }

    // function to delete data from the database.
    public function delete(){
        
    }

    // function to display data from the database.
    public function select(){
        
    }
}