<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Add User / Register
  public function engineerRegister($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO users (fName, lName,email,`role`,`status`,`password`,adLine1,adLine2,city,postalCode,district,country,telephoneNo) 
      VALUES (:FName,:LName,:email,"engineer","0",:password,:adline1,:adline2,:city,:Postcode,:District,:Country,:Tele)');

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
    if ($this->db->execute()) {
      $this->addEngineerTable($data['email']);
      return true;
    } else {
      return false;
    }
  }

  public function addEngineerTable($email){
    $this->db->query('INSERT INTO engineer (email) 
      VALUES (:email)');

    
    $this->db->bind(':email', $email);
    

   $this->db->execute();

  } 



  // Find USer BY Email
  public function findUserByEmail($email)
  {
    $this->db->query("SELECT * FROM `engineer` WHERE Email = :email");
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }


  // Login user
  public function login($email, $password)
  {
    $this->db->query('SELECT * FROM engineer WHERE Email = :email');
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    $hashed_password = $row->Pass;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }

    // Check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }







  // Update User
  public function update($data)
  {
    // Prepare Query
    $this->db->query('UPDATE engineer SET FName = :FName, LName = :LName, Country = :Country, District = :District, AdLine1 = :adline1, AdLine2 = :adline2, City = :city, PostalCode =:Postcode, Email = :email, Tel =:Tele 
      where Email = :Email');



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
    $this->db->bind(':Tele', $data['Tele']);
    $this->db->bind(':Email', $_SESSION['user_email']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function getUserById($email){
    $this->db->query('SELECT * FROM engineer where  Email = :email');
    $this->db->bind(':email',$email);

     $row= $this->db->single();

    return $row;
}
}
