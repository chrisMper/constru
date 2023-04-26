<?php

// This code will be in the model file, which will be responsible for interacting with the database.

class adminModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

  //   public function getAdmins(){
  //     $this->db->query('SELECT * FROM admins');

  //     $results= $this->db->resultSet();

  //     return $results;
  // }

  public function getAdmins()
    {

      $this->db->query('SELECT * FROM admins');

      $admins = $this->db->resultSet();
      return $admins;

     
        // $query = "SELECT * FROM admins";
        // $result = $this->db->query($query);
        // $admins = array();
        // while ($row = $result->fetch_assoc()) {
        //     $user = array(
        //         "name" => $row["name"],
        //         "contact_number" => $row["contact_number"],
        //         "email" => $row["email"],
        //         "nic" => $row["nic"],
        //         "address" => $row["address"],
        //         "profile" => $row["profile"],
        //     );
            // array_push($admins, $user);
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
  }
  ?>