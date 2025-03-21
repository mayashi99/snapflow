<?php

require_once '../app/models/Image.php';

class ImageController extends Controller
{
    var $imageModel;

    public function __construct()
    {
        $this->imageModel = new image();
    }


    public function submitimage()
    {

        if (isset($_POST['submitimage']) && isset($_FILES['photo'])) {

            $file_name = $_FILES['photo']['file_name'];
            $p_size = $_FILES['photo']['p_size'];
            $folder = 'photos/' . $file_name;


            if ($this->imageModel->submitimage($file_name, $p_size, $folder)) {
                header('location:' . URLROOT . '/PageController/imageupload');
            } else {
                die('Something went wrong');
            }
        }
    }

    //ref: https://www.w3schools.com/php/php_file_upload.asp
    public function uploadimage()
    {

        if (isset($_POST['submit'])) {
            $target_dir = "C:/xampp/htdocs/project/snapflow/public/photos/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            //call model and save the image path to the database
            
        }
    }
}
