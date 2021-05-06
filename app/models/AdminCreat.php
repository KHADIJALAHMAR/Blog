<?php
class AdminCreat{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }  
    public function signin($data)
    {
    $this->db->query("INSERT INTO `admin`( `name`, `email`,`pass_word`) VALUES (:name,:email,:pass_word)");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':pass_word', $data['pass_word']);
    $exucute_data=$this->db->execute();
    return $exucute_data;
    }
}

  
    