<?php

class manager{


    private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new manager();
        }
        return self::$instance;
    }

    public  function geteventanddate()
    {
        $this->db->query('SELECT * FROM booking');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

    public  function getrequest()
    {
        $this->db->query('SELECT * FROM photographer');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }
}
public function deleterequest($data)
{
    $this->db->query('DELETE FROM customer where id = id');
    $this->db->bind(':id', $data['id']);
    $rows=$this ->db->resultset();
    
    if ($this->db->rowCount() > 0) {
        return true; 
    } else {
        return false; 
    }

    public function acceptedrequest($data)
{
    $this->db->query('UPDATE coustomer SET id = :id, first_name = :first_name ,last_name = :last_ename , user_id = :user_id , reg_date =:reg_date WHERE  id = :id ');
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':first_name', $data['first_name']);
    $this->db->bind(':last_name', $data['laste-name']);
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':reg_date', $data['']);
    $rows=$this ->db->resultset();
    
    if ($this->db->rowCount() > 0) {
        return true; 
    } else {
        return false; 
    }
}
}



?> 
