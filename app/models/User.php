<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){

      // Prepare Query
     $this->db->query('INSERT INTO `users` (fName, lName,email,`role`,`status`,`password`,adLine1,adline2,city,postalcode,district,country,telephoneNo) 
      VALUES (:FName, :LName,:email,"engineer","0",:password,:adline1,:adline2,:city,:Postcode,:District,:Country,:Tele)');

      

      // Bind Values
      $this->db->bind(':FName', $data['FName']);
      $this->db->bind(':LName', $data['LName']);
      $this->db->bind(':Country', $data['Country']);
      $this->db->bind(':District', $data['District']);
      $this->db->bind(':adline1', $data['adline1']);
      $this->db->bind(':adline2', $data['adline2']);
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':Postcode', $data['Postcode']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':Tele', $data['Tele']);


     


      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM `users` WHERE email = :email ");
      $this->db->bind(':email', $email);

      // die($sql);

      $row = $this->db->single();


      //Check Rows

      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }


    // Login user
    public function login($email, $password){
      $sql="SELECT * FROM `users` WHERE `email` =  '$email'";

      
      // $this->db->bind(':email', $email);

      $this->db->query($sql);

      $row = $this->db->single();

      $hashed_password = $row->password;

      if(password_verify($password, $hashed_password)){
        return true;
      } 
      else {
        return false;
      }
    }
  }
   
  