<?php

class clientDetailsAccept{
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
            $status = isset($_POST['status']) ? 1 : 0;
            
            $sql = "UPDATE booking SET photoGrapher = '$photographer', Editor = '$editor', status = '$status' WHERE book_id = 1";

            if ($this->con->query($sql)) {
                header("Location: pages/managerprofile");
                exit;
            }
            else{
                echo "Error: " . $this->con->error;
            }
        }
    }
}

// Create an instance of the class
$controller = new clientDetailsAccept();

?>
