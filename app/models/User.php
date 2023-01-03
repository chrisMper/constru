<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO company (company_name,company_email,password,addressline1,addressline2,city,postalcode,district,country,ictadno,company_type) 
      VALUES (:company_name,:company_email,:password,:addressline1,:addressline2,:city,:postalcode,:district,:country,:ictadno,:company_type)');

      // Bind Values
      $this->db->bind(':company_name', $data['company_name']);
      $this->db->bind(':company_email', $data['company_email']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':addressline1', $data['addressline1']);
      $this->db->bind(':addressline2', $data['addressline2']);
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':postalcode', $data['postalcode']);
      $this->db->bind(':district', $data['district']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':ictadno', $data['ictadno']);
      $this->db->bind(':company_type', $data['company_type']);
      // $this->db->bind(':Tele', $data['company_type']);

      //Execute
      if($this->db->execute()){

        
        return true;
      } else {
        
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM `company` WHERE company_email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }


    // Login user
    public function login($email){
      $this->db->query('SELECT * FROM company WHERE company_email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      return $row;
      // $hashed_password = $row->password;
      // if(password_verify($password, $hashed_password)){
      //   return $row;
      // } else {
      //   return false;
      // }
    

    // Find user by email
    // public function findUserByEmail($email){
    //   $this->db->query('SELECT * FROM admin WHERE email = :email');
    //   // Bind value
    //   $this->db->bind(':email', $email);

    //   $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }
    // Login / Authenticate User
    // public function login($email, $password){
    //   $this->db->query("SELECT * FROM `engineer` WHERE Email = :email");
    //   $this->db->bind(':email', $email);

    //   $row = $this->db->single();
      
    //   $hashed_password = $row->Pass;
    //   if(password_verify($password, $hashed_password)){
    //     return $row;
    //   } else {
    //     return false;
    //   }
    // }

    // Find User By ID
    // public function getUserById($id){
    //   $this->db->query("SELECT * FROM `engineer` WHERE id = :id");
    //   $this->db->bind(':id', $id);

    //   $row = $this->db->single();

    //   return $row;
    // }
  