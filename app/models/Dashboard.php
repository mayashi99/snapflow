<?php

class dashboard {

 private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public  function getSales()
    {
        $this->db->query('SELECT SUM(amount) as total FROM payment where payment_date >= CURDATE() - INTERVAL 1 MONTH');
        $rows = $this->db->resultSet();
        var_dump( $rows);
    
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }



    public  function getbooking()
    {
        $this->db->query('SELECT COUNT(book_id) as event FROM booking where book_date >= CURDATE() - INTERVAL 1 MONTH');
        $rows = $this->db->resultSet();
        var_dump( $rows);
    
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

}