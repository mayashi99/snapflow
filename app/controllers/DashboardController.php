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

        return $payment;
    }

     
    public function getbooking()
    {
        $event = $this->dashboardModel->getbooking();

        return $event;
    }

}