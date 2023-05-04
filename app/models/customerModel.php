<?php


// This code will be in the model file, which will be responsible for interacting with the database.

class customerModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

    public function getCustomers()
    {
      $this->db->query('SELECT * FROM customers');

      $customers= $this->db->resultSet();

      return $customers;
  }
  
    // public function addCustomer($data) {
    //   // Insert the data into the database
    //   $this->db->query('INSERT INTO customers (fname, lname, contact_number, email, nic, age, address, profile_image) VALUES (:fname, :lname, :contact_number, :email, :nic, :age, :address, :profile_image)');
    //   // Bind values
    //   $this->db->bind(':first_name', $data['fname']);
    //   $this->db->bind(':last_name', $data['lname']);
    //   $this->db->bind(':contact', $data['contact_number']);
    //   $this->db->bind(':email', $data['email']);
    //   $this->db->bind(':nic', $data['nic']);
    //   $this->db->bind(':age', $data['age']);
    //   $this->db->bind(':address', $data['address']);
    //   $this->db->bind(':profile_image', $data['profile_image']);
    //   // Execute query
    //   if($this->db->execute()) {
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }
  }
  ?>