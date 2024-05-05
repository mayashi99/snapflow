
<?php
require_once '../app/models/User.php';

class UserController extends Controller
{

    
    var $userModel;

    public function __construct()
    {
      
        $this->userModel = new User();
    }

    public function signUp()
    {

        if (isset($_POST['submitSignup'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if ($_POST['password'] != $_POST['confirmPassword']) {
                die('Passwords do not match');
            }

            $password = hash('sha256', $_POST['password']);
            $data = [
                'email' => trim($_POST['email']),
                'password' => $password,
                'role' => $_POST['role'],
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
            ];

            $this->userModel->signUp($data);

            header('location:' . URLROOT . '/PageController/signIn');
        }
    }


    public function signIn()
    {
        if (isset($_POST['submitSignin'])) {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $password = hash('sha256', $_POST['password']);
            $data = [
                'email' => trim($_POST['email']),
                'password' => $password,
                
            ];
            $userData=$this->userModel->signIn($data);
            if ($userData) {
                session_start();
                $_SESSION['email'] = $data['email'];
                $_SESSION['userData'] = $userData;
                header('location:' . URLROOT . '/PageController/admindashboard/' . $data['email']);
          
            };
        }
    }

    public function logout()
    {
      
        session_unset();
        session_destroy();
        header('location:' . URLROOT . '/PageController/index');
    }
}
