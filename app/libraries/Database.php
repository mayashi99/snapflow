<?php

class Database{

    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

        public function __construct(){
        // Connect to MySQL as usual
        $conn = 'mysql:host=' . $this->dbHost;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }

        // Check if the database exists, if not, create it
        $this->createDatabase();

        // Select the database
        $this->selectDatabase();

        // Create tables if they don't exist
        $this->createTables();
    }

    //to write qeries
    public function query($sql){
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //bind values
    public function bind($parameter, $value, $type = null){

        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;

            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;

            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            
            default:
                $type = PDO::PARAM_STR;
        }

        $this->statement->bindValue($parameter, $value, $type);
    }

    //execute the prepared statement
    public function execute(){
        return $this->statement->execute();
    }

    //return an array
    public function resultSet(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ); //FETCH_ASSOC 
    }

    //return a specific row as an object
    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //gets the lastely effected row count
    public function rowCount(){
        return $this->statement->rowCount();
    }

    //updates a specific field
    public function updateField(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function lastInsertID(){
        $last_id = $this->dbHandler->lastInsertId();
        return $last_id;
    }

     private function createDatabase() {
        try {
            $sql = "CREATE DATABASE IF NOT EXISTS " . $this->dbName;
            $this->dbHandler->exec($sql);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    private function selectDatabase() {
        try {
            $this->dbHandler->query("USE " . $this->dbName);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    private function createTables() {
        try {
            $sql = file_get_contents('../app/data/init.sql');
            $this->dbHandler->exec($sql);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}

?>