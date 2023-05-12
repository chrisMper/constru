<?php


// This code will be in the model file, which will be responsible for interacting with the database.

class requestModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

    public function getRequests(){
      $this->db->query('SELECT * FROM users ');
      // WHERE status=1
      $requests= $this->db->resultSet();

      return $requests;
  }
  
  public function getDetails($email){
    $this->db->query('SELECT * FROM users WHERE email = :email');
    $this->db->bind(':email', $email);
    $details= $this->db->resultSet();

    return $details;
}



  }
  ?>