<?php

class Image {

 private $db;


    public function __construct()
    {
        $this->db = new Database();
    }



    public function submitimage ($file_name,$folder)
    {
        $this->db->query("INSERT INTO photo (file) values ('file_name')");
        $this->db->bind(':file_name', $file_name['file_name']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}