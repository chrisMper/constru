<?php


// This code will be in the model file, which will be responsible for interacting with the database.

class customerModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

    public function getCustomers()
    {
        $this->db->query('SELECT * FROM customer 
                          INNER JOIN users  ON customer.email = users.email WHERE users.status=2');
      
        $customers= $this->db->resultSet();
      
        return $customers;
  }

 
  
  
  }
  ?>