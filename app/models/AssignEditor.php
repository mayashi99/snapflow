<?php

class AssignEditor {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new AssignEditor();
        }
        return self::$instance;
    }





    public function acceptEditor($data)
    {
        var_dump($data['id']);
        $this->db->query('UPDATE editor SET accepted = 1 WHERE user_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 


}