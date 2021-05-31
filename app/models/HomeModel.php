<?php
class HomeModel{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }    

    public function showPost()
    {
      $this->db->query("SELECT * FROM `post`");

      $results = $this->db-> resultSet();

      return $results;
    }
}

  
    