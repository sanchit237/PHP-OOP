<?php

class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "oop1";

    private $conn = "";
    private $result = array();
    private $initial_conn = false;

    //function which will be called first once the object is created.
    public function __construct(){

        if (!$this->initial_conn){
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);

            if ($this->conn->connect_error){
                // die("connection failed :" . $this->conn->connect_error);
                array_push($this->result, $this->conn->connect_error);
                return false;
            }
            else {
                echo "Database connected successfully";
            }
        }
        else {
            return true;
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

    // function which will be called when all the functions are called.
    public function __destruct(){
        if ($this->conn){
            if ($this->conn->close()){
                $this->initial_conn = false;
                return true;
            }
        }
        else {
            return false;
        }
    }
}