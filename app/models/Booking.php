<?php

class Booking {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Booking();
        }
        return self::$instance;
    }





    public function createPayment($data)
    {
        $this->db->query('INSERT INTO booking (event_type, event_date, event_id, pack_code, organi_id) VALUES(:event_type, :event_date, :event_id, :pack_code, :organi_id)');
        $this->db->bind(':event_type', $data['event_type']);
        $this->db->bind(':event_date', $data['event_date']);
        $this->db->bind(':event_id', $data['event_id']);
        $this->db->bind(':pack_code', $data['pack_code']);
        $this->db->bind(':organi_id', $data['organi_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}