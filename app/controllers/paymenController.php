<?php

class paymenController{
    private $con;

    public function __construct() {
        $this->con = new mysqli("localhost", "root", "", "snapflow");
        if ($this->con->connect_error) {
            die("Connection Failed: " . $this->con->connect_error);
        }
        }
    

    public function index() {
        
        if (isset($_POST['submit'])) {
            $photographer = $_POST['photographer'];
            $editor = $_POST['editor'];
            
            $sql = "INSERT INTO table() VALUES('$photographer')";

            if ($this->con->query($sql)) {
                header("Location: pages/payment");
                exit;
            }
            else{
                echo "Error: " . $this->con->error;
            }
        }
    }
}

// Create an instance of the class
$controller = new paymenController();

?>
