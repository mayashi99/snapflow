<?php
class Package
{
    private $db;

    private static $instance;

    public function __construct()
    {
        $this->db = new Database;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Package();
        }
        return self::$instance;
    }

    // Package.php (Model)

    public function addPackage($data)
    {
        try {
            $this->db->query('INSERT INTO package (pack_name, soft_copy_price, hard_copy_price) VALUES(:pack_name, :soft_copy_price, :hard_copy_price)');
            $this->db->bind(':pack_name', $data["pack_name"]);
            $this->db->bind(':soft_copy_price', $data['soft_copy_price']);
            $this->db->bind(':hard_copy_price', $data['hard_copy_price']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return $e;
        }
    }


    // Package.php (Model)

    public function getPackages()
    {
        $this->db->query('SELECT * FROM package');
        return $this->db->resultSet();
    }


    // Get package by ID
    public function getPackageById($id)
    {
        $this->db->query('SELECT * FROM package WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    // Update package
    public function updatePackage($data)
    {
        $this->db->query('UPDATE package SET pack_name = :pack_name, soft_copy_price = :soft_copy_price, hard_copy_price = :hard_copy_price WHERE pack_code = :pack_code');
        $this->db->bind(':pack_code', $data['pack_code']);
        $this->db->bind(':pack_name', $data['pack_name']);
        //$this->db->bind(':description', $data['description']);
        //$this->db->bind(':price', $data['price']);
        $this->db->bind(':soft_copy_price', $data['soft_copy_price']);
        $this->db->bind(':hard_copy_price', $data['hard_copy_price']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete package
    public function deletePackage($data)
    {
        $this->db->query('DELETE FROM package WHERE pack_code = :pack_code');
        //$this->db->bind(':id', $id);
        $this->db->bind(':pack_code', $data['pack_code']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
