<?php

class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "oop";

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
                $this->initial_conn = true;
                // echo "Database connected successfully";
            }
        }
        else {
            return true;
        }
    }

    // function to insert data into the database. 
    public function insert($table_name, $values = array()){
        if ($this->table_exists($table_name)){

            $column_names = implode(',', array_keys($values));
            $column_values = implode("','", $values);

            $sql = "INSERT INTO $table_name ($column_names) VALUES ('$column_values')";
            $insert_query_result = $this->conn->query($sql);
            if ($insert_query_result){
                // echo "records inserted successfully";
                array_push($this->result, $this->conn->insert_id);
                return true;
            }
            else {
                // echo "records failed to insert";
                array_push($this->result, $this->conn->error);
                return false;
            }
        }
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


    private function table_exists($table_name){
        $sql = "SHOW TABLES FROM $this->database LIKE '$table_name'";
        $query_result = $this->conn->query($sql);

        if ($query_result){
            if ($query_result->num_rows == 1){
                // echo "table exists in the database";
                return true;
            }
            else {
                // echo "table does not exist";
                array_push($this->result, $table . "does not exist .");
                return false;
            }
        }
    }

    public function getresult(){
        $val = $this->result;
        $this->result = array();
        return $val;
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