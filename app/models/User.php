<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Add User / Register // this is eng register
  public function register($data)
  {

    // Prepare Query
    $this->db->query('INSERT INTO `users` (fName, lName,email,`role`,`status`,`password`,adLine1,adline2,city,postalcode,district,country,telephoneNo) 
      VALUES (:FName, :LName,:email,"engineer","0",:password,:adline1,:adline2,:city,:Postcode,:District,:Country,:Tele)');



    // Bind Values
    $this->db->bind(':FName', $data['FName']);
    //$this->db->bind(':LName', $data['LName']);
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
      return true;
        }else{
          return false;

        }
  }

  //comp register starts here
  public function compregister($data)
  {

    // Prepare Query
    $this->db->query('INSERT INTO `users` (fName, lName,email,`role`,`status`,`password`,adLine1,adline2,city,postalcode,district,country,telephoneNo) 
      VALUES (:FName, "0",:email,"company","0",:password,:adline1,:adline2,:city,:Postcode,:District,:Country,:Tele)');

    // Bind Values
    $this->db->bind(':FName', $data['FName']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':adline1', $data['adline1']);
    $this->db->bind(':adline2', $data['adline2']);
    $this->db->bind(':city', $data['city']);
    $this->db->bind(':Postcode', $data['Postcode']);
    $this->db->bind(':District', $data['District']);
    $this->db->bind(':Country', $data['Country']);
    $this->db->bind(':Tele', $data['Tele']);

    //Execute
    if ($this->db->execute()) {
      return true;
        }else{
          return false;

        }
  }
  //compregister ends here


  //update service_providers table 
  public function updateServiceProvider($email){
    $this->db->query('INSERT INTO `service_providers` (email) 
      VALUES (:email)');
      $this->db->bind(':email', $email);
      if ($this->db->execute()) {
        return true;
      } else{
        return false;
      }
  }

  //update company table
  public function updateCompany($email){
    $this->db->query('INSERT INTO `company` (email, ictadNo, compGrade)
    VALUES(:email, :ictadNo, :compGrade)');
    $this->db->bind(':email', $email);
    $this->db->bind(':ictadNo', $ictadNo);
    $this->db->bind(':compGrade', $compGrade);
  
  }


  //update Engneer table 
  public function updateEngneer($email){
    $this->db->query('INSERT INTO `engineer` (email) 
      VALUES (:email)');
      $this->db->bind(':email', $email);
      if ($this->db->execute()) {
        return true;
      } else{
        return false;
      }
  }



  // Find USer BY Email
  public function findUserByEmail($email)
  {
    $this->db->query("SELECT * FROM `users` WHERE email = :email ");
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
    $sql = "SELECT * FROM `users` WHERE `email` =  '$email'";


    // $this->db->bind(':email', $email);

    $this->db->query($sql);

    $row = $this->db->single();

    $hashed_password = $row->password;

    if (password_verify($password, $hashed_password)) {
      return true;
    } else {
      return false;
    }
  }

  public function getUserById($email){
    $this->db->query('SELECT * FROM users where  email = :email');
    $this->db->bind(':email',$email);

     $row= $this->db->single();

    return $row;
}

// Update User
  public function update($data)
  {
    // Prepare Query
    $this->db->query('UPDATE users SET fName = :FName, lName = :LName, country = :Country, district = :District, adLine1 = :adline1, adLine2 = :adline2, city = :city, postalcode =:Postcode, email = :email, telephoneNo =:Tele 
      where email = :Email');



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

}
