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
    public function signup($email,$password)
    {
      $this->db->query("SELECT * FROM `admin`  WHERE email=:email passw_word=:pass_word");
      $this->db->bind(':email', $email);
      $this->db->bind(':passw_word', $password);

      $results = $this->db-> single();

      return $results;
    }
    } 

  
    