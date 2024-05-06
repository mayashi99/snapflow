<?php
require_once '../app/controllers/OrganizationController.php';
require_once '../app/controllers/DashboardController.php';

class PageController extends Controller
{
    
    var $organizationController;
    var $dashboardController;

    public function __construct()
    {
        $this->organizationController = new OrganizationController();
        $this->dashboardController = new DashboardController();
        
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
       // session_start();
        //if (!isset($_SESSION['email'])) {
          //  header('Location: ' . URLROOT . '/PageController/login');
       // }
        
        $payment = $this->dashboardController->getSales();
        extract($payment);

        $event = $this->dashboardController->getbooking();
        extract($event);

        $data=array('events'=>$event,'payments'=>$payment);
        $this->view('pages/admindashboard',$data);
       
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

    public function newpackage()
    {
        $this->view("pages/newpackage");
    }

    public function newpackagereturn($data)
    {
        $this->view("pages/newpackage", $data);
    }
    public function packagetable()
    {
        $this->view('pages/packagetable');
    }
    public function editpackage()
    {
        $this->view("pages/editpackage");
    }
    public function editpackagereturn($data)
    {
        $this->view("pages/editpackage", $data);
    }

}
