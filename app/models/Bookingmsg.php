<?php

class Bookingmsg {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Bookingmsg();
        }
        return self::$instance;
    } 

    //('SELECT * FROM organization INNER JOIN booking on organization.organi_id = booking.organi_id WHERE booking.event_date <> :date or event_type <> :type');
        

    public function displayBookPhotographer($data)
    {

        $this->db->query('SELECT book_id, event_type, event_date, pack_code FROM booking WHERE booking.user_id = user_id');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

    public function displayBookEditor($data)
    {

        $this->db->query('SELECT book_id, event_type, event_date, pack_code FROM booking WHERE booking.user_id = user_id');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }


    public function displayBookCustomer($data)
    {

        $this->db->query('SELECT book_id, event_type, event_date, pack_code, organi_id FROM booking WHERE book_id = organi_id');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }


}