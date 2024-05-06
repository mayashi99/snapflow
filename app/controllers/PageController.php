<?php
require_once '../app/controllers/OrganizationController.php';

class PageController extends Controller
{
    var $adminModel;
    var $organizationController;

    public function __construct()
    {
        $this->organizationController = new OrganizationController();
    }

    public function index()
    {
        $this->view('pages/homepage');
    }

    public function signup()
    {
        $this->view('pages/signup');
    }

    public function signIn()
    {
        $this->view('pages/signIn');
    }
    public function admindashboard()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: ' . URLROOT . '/PageController/login');
        }
        $this->view('pages/admindashboard');
    }
    public function payment()
    {
        $this->view('pages/payment');
    }

    public function admintable()
    {
        $organizations = $this->organizationController->getNotAcceptedOrganizations();
        extract($organizations);
        $this->view('pages/admintable', $organizations);
    }

    public function organization()
    {
        session_start();
        if (!isset($_SESSION['data'])) {
            header('Location: ' . URLROOT . '/PageController/homepage');
        }
        
        $organizations = $_SESSION['data'];
        extract($organizations);
        $this->view('pages/organization', $organizations);
    }

    public function photographerprofile()
    {
        $this->view('pages/photographerprofile');
    }


    public function managerprofile()
    {
        $this->view('pages/managerprofile');
    }


    public function packages()
    {
        $this->view('pages/packages');
    }

    public function feedback()
    {
        $this->view('pages/feedback');
    }

    public function about()
    {
        $this->view('pages/about');
    }
    

    public function blog()
    {
        $this->view('pages/blog');
    }

    public function userprofile()
    {
        $this->view('pages/userprofile');
    }

    public function paysuccessful()
    {
        $this->view('pages/paysuccessful');
    }

    public function booking()
    {
        $this->view('pages/booking');
    }

    public function imageupload()
    {
        $this->view('pages/imageupload');
    }


    public function editorprofile()
    {
        $this->view('pages/editorprofile');
    }

}
