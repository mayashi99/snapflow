<?php

class Organization {

 private $db;


    public function __construct()
    {
        $this->db = new Database();
    }



    public  function getOrganizations()
    {
        $this->db->query('SELECT * FROM organization');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

    public  function getNotAcceptedOrganizations()
    {
        $this->db->query('SELECT * FROM organization WHERE accepted = 0');
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }

    public function acceptOrganization($data)
    {
        var_dump($data['id']);
        $this->db->query('UPDATE organization SET accepted = 1 WHERE organi_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }  


    public function deleteOrganization($data)
    {
        $this->db->query('DELETE FROM organization WHERE organi_id = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function searchOrganization($data)
    {

        $this->db->query('SELECT * FROM organization INNER JOIN booking on organization.organi_id = booking.organi_id WHERE booking.event_date <> :date or event_type <> :type');
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':type', $data['type']);
        $rows = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $rows;
        } else {
            return false;
        }
    }


}