<?php


// This code will be in the model file, which will be responsible for interacting with the database.

class complaintModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

    public function getComplaints(){
      $this->db->query('SELECT * FROM complaints ');

      $complaints= $this->db->resultSet();

      return $complaints;
  }
  
  
  }
  ?>