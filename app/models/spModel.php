<?php

// This code will be in the model file, which will be responsible for interacting with the database.

class spModel {
    private $db;
  
    public function __construct() {
      $this->db = new Database;
    }

  //   public function getAdmins(){
  //     $this->db->query('SELECT * FROM admins');

  //     $results= $this->db->resultSet();

  //     return $results;
  // }


  // get engineers
  public function getEngs()
    {

      $this->db->query('SELECT * FROM engineers');

      $engs = $this->db->resultSet();
      return $engs;

     
        }


// get companies
    public function getcomps()
        {
    
          $this->db->query('SELECT * FROM companies');
    
          $comps = $this->db->resultSet();
          return $comps;
    
         
            }

  // get suppliers
       
       public function getSups()
    {

      $this->db->query('SELECT * FROM suppliers');

      $sups = $this->db->resultSet();
      return $sups;

     
        }

        // delete engineers
        public function deleteEng($email) {
          $this->db->query('DELETE FROM engineers WHERE email = :email');
          $this->db->bind(':email', $email);
          if($this->db->execute()) {
            return true;
          } else {
            return false;
          }
        }


        // delete suppliers
        public function deleteSup($email) {
          $this->db->query('DELETE FROM suppliers WHERE email = :email');
          $this->db->bind(':email', $email);
          if($this->db->execute()) {
            return true;
          } else {
            return false;
          }
        }


        // delete engineers
        public function deleteComp($email) {
          $this->db->query('DELETE FROM companies WHERE email = :email');
          $this->db->bind(':email', $email);
          if($this->db->execute()) {
            return true;
          } else {
            return false;
          }
        }
    
       

  }
  ?>