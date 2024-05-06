<?php

class Album {

 private $db;
    private static $instance;

    private function __construct()
    {
        $this->db = new Database;
    }






    public function updateAlbum($data)
    {
        var_dump($data['id']);
        $this->db->query('UPDATE photo SET accepted = 1 WHERE album_code = :id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 


}