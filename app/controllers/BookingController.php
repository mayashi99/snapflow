<?php

require_once '../app/models/Booking.php';

class BookingController extends Controller
{
    var $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new Booking();
    }





    public function createBooking()
    {

        if (isset($_SESSION['booking'])) {
            $_SESSION['booking'] = [];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'event_type' => trim($_POST['event_type']),
                'event_date' => trim($_POST['event_date']),
                'event_id' => intval(trim($_POST['event_id'])),
                'pack_code' => intval(trim($_POST['pack_code'])),
                'organi_id' => intval(trim($_POST['organi_id'])),
            ];

            $this->bookingModel->createBooking($data);

            header('Location:' . URLROOT . '/PageController/booking');
        }
    }

}
