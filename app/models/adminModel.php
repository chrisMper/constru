<?php

// This code will be in the model file, which will be responsible for interacting with the database.

class adminModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

  

  public function getAdmins()
    {

      $this->db->query('SELECT * FROM admins');

      $admins = $this->db->resultSet();
      return $admins;

     
        
        }
       
    

    public function addAdmin($data) {
      // Insert the data into the database
      $this->db->query('INSERT INTO admins (fname, lname, contact_number, email, nic, age, address) VALUES (:fname, :lname, :contact_number, :email, :nic, :age, :address)');
      // Bind values
      $this->db->bind(':fname', $data['fname']);
      $this->db->bind(':lname', $data['lname']);
      $this->db->bind(':contact_number', $data['contact_number']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':nic', $data['nic']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':address', $data['address']);
      // $this->db->bind(':profile_image', $data['profile_image']);
      // Execute query
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function deleteAdmin($email) {
      $this->db->query('DELETE FROM admins WHERE email = :email');
      $this->db->bind(':email', $email);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }


    public function updateAdmin($data) {
      // Update the data in the database
      $this->db->query('UPDATE admins SET fname = :fname, lname = :lname, contact_number = :contact_number, email = :email, nic = :nic, age = :age, address = :address WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':fname', $data['fname']);
      $this->db->bind(':lname', $data['lname']);
      $this->db->bind(':contact_number', $data['contact_number']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':nic', $data['nic']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':address', $data['address']);
      // Execute query
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }



  }
  ?>
