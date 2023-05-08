<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO users (role,fName,lName,email,country,district,password,adLine1,adLine2,city,telephoneNo) 
      VALUES ("supplier",:fName, :lName, :email,:country,:district,:password,:adLine1,:adLine2,:city,:telephoneNo)');

      // Bind Values
    
      $this->db->bind(':fName', $data['fName']);
      $this->db->bind(':lName', $data['lName']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':district', $data['district']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':adLine1', $data['adLine1']);
      $this->db->bind(':adLine2', $data['adLine2']);
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':telephoneNo', $data['telephoneNo']);

      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function updateServiceProvider($email){
      $this->db->query('INSERT INTO `service_providers`(email) VALUES (:email)');
        $this->db->bind(':email', $email);
        if ($this->db->execute()) {
          return true;
        } else{
          return false;
        }
    }
  
    
    public function updateSupplier($role,$nic,$fName,$lName,$email,$country,$district,$password,$adLine1,$adLine2,$city,$telephoneNo){
      $this->db->query('INSERT INTO `supplier` (role,nic,fName,lName,email,country,district,password,adLine1,adLine2,city,telephoneNo,uploads) 
        VALUES (:role,:nic,:fName, :lName, :email,:country,:district,:password,:adLine1,:adLine2,:city,:telephoneNo,"profile.jpg")');
        
        $this->db->bind(':role', $role);
        $this->db->bind(':nic',$nic);
        $this->db->bind(':fName',$fName);
        $this->db->bind(':lName',$lName);
        $this->db->bind(':email', $email);
        $this->db->bind(':country', $country);
        $this->db->bind(':district', $district);
        $this->db->bind(':password', $password);
        $this->db->bind(':adLine1', $adLine1);
        $this->db->bind(':adLine2', $adLine2);
        $this->db->bind(':city', $city);
        $this->db->bind(':telephoneNo', $telephoneNo);

        move_uploaded_file($_FILES['uploads']['tmp_name'],PUBROOT. '/public/img/uploads/'.$_FILES['uploads']['name']);

        if ($this->db->execute()) {
          return true;
        } else{
          return false;
        }
    }

    // Login user
    public function login($email, $password){
      //$this->db->query('SELECT * FROM users WHERE email = :email');
     // $this->db->bind(':email', $email);
     
     $sql="SELECT * FROM `users` WHERE `email`='$email'";
     $this->db->query($sql);
    
      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return true;
      } else {
        return false;
      }
    
    }


      // Find USer BY Email
      public function findUserByEmail($email){
        $this->db->query("SELECT * FROM `users` WHERE email = :email");
        $this->db->bind(':email', $email);
        
        $row = $this->db->single();
      
        //Check Rows
       if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }
      
      
  }
   
  