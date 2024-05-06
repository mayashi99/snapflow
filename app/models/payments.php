<?php
class payment {


private $db;
private static $instance;

private function __construct()
{
    $this->db = new Database;
}

public static function getInstance()
{
    if (!isset(self::$instance)) {
        self::$instance = new payment();
    }
    return self::$instance;
}

public function createPaymentdetails($data)
    {
        $this->db->query('INSERT INTO payment(payment_id,user_id,amount,payment_date) VALUES(:payment_id,:user_id,:amount,:payment_date)');
        $this->db->bind(':payment_id', $data['payment_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':payment', $data['payment']);
        $this->db->bind(':payment_date', $data['payment_date']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


}

?>