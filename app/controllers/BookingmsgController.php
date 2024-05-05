<?php

require_once '../app/models/Bookingmsg.php';

class BookingmsgController extends Controller
{
    var $bookingmsgModel;

    public function __construct()
    {
        $this->bookingmsgModel = new Bookingmsg();
    }




    public function displayBookPhotographer()
    {
        $bookingmsg = $this->bookingmsgModel->displayBookPhotographer();

        return $bookingmsg;
    }

    public function displayBookEditor()
    {
        $bookingmsg = $this->bookingmsgModel->displayBookEditor();

        return $bookingmsg;
    }


    public function displayBookCustomer()
    {
        $bookingmsg = $this->bookingmsgModel->displayBookCustomer();

        return $bookingmsg;
    }


}
