<?php

require_once '../app/models/Dashboard.php';

class DashboardController extends Controller
{
    var $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new dashboard ();
    }
    
    
    public function getSales()
    {
        $payment = $this->dashboardModel->getSales();
     // var_dump($payment);
        return $payment;
    }

     
    public function getbooking()
    {
        $event = $this->dashboardModel->getbooking();
     //var_dump($event);
        return $event;
    }

}