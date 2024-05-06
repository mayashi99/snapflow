<?php

class managerrequesttomanagercontroller{
    private $con;

    public function __construct() {
        $this->con = new mysqli("localhost", "root", "", "snapflow");
        if ($this->con->connect_error) {
            die("Connection Failed: " . $this->con->connect_error);
        }
        }
    

    public function index() {
        
        if (isset($_POST['submit'])) {
            $clientname = $_POST['clientname '];
            $eventname = $_POST['eventname'];
            $location = $_POST['location'];
            
            $sql = "INSERT INTO table request VALUES clientname ='$clientname' ,eventname ='$eventname',location ='$location'";

            if ($this->con->query($sql)) {
                header("Location: pages/manager");
                exit;
            }
            else{
                echo "Error: " . $this->con->error;
            }
        }
    }
}

// Create an instance of the class
$controller = new managerrequesttomanagercontroller();

?>