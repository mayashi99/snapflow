<?php

class DeletebyManager {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DeletebyManager();
        }
        return self::$instance;
    }



    public function deletePhotographer($data)
    {
        $this->db->query('DELETE FROM photographer WHERE user_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEditor($data)
    {
        $this->db->query('DELETE FROM editor WHERE user_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    


}