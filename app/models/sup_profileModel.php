<?php

class sup_profileModel{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getProfile(){
        $this->db->query('SELECT * FROM supplier ');
        $results = $this->db->resultSet();
        return $results;
    }

    public function updateUser($data){
        $this->db->query('UPDATE users SET role="supplier", fName=:fName, lName=:lName, email= :email, country= :country, district= :district, adLine1= :adLine1, adLine2= :adLine2, city= :city, telephoneNo= :telephoneNo WHERE email=:user_email');
       
        $this->db->bind(':fName', $data['fName']);
        $this->db->bind(':lName', $data['lName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':adLine1', $data['adLine1']);
        $this->db->bind(':adLine2', $data['adLine2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':telephoneNo', $data['telephoneNo']);
        $this->db->bind(':user_email', $data['user_email']);


        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateServiceProvider($data){
        $this->db->query('UPDATE service_providers SET email= :email WHERE email=:user_email');
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':user_email', $data['user_email']);
          if ($this->db->execute()) {
            return true;
          } else{
            return false;
          }
      }

      public function updateSupplier($data,$file){
        $this->db->query('UPDATE supplier SET role=:role,fName =:fName,lName= :lName,email=:email,country=:country,district=:district,adLine1=:adLine1,adLine2=:adLine2,city=:city,telephoneNo=:telephoneNo,uploads=:uploads  WHERE email=:user_email' );
          
          $this->db->bind(':role', $data['role']);
          $this->db->bind(':fName',$data['fName']);
          $this->db->bind(':lName',$data['lName']);
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':country', $data['country']);
          $this->db->bind(':district', $data['district']);
          $this->db->bind(':adLine1', $data['adLine1']);
          $this->db->bind(':adLine2', $data['adLine2']);
          $this->db->bind(':city', $data['city']);
          $this->db->bind(':telephoneNo', $data['telephoneNo']);
          $this->db->bind(':uploads', $file['file_name']);
          $this->db->bind(':user_email', $data['user_email']);
  
          move_uploaded_file($file['tmp_name'],$file['upload_to'].$file['file_name']);

          if ($this->db->execute()) {
            return true;
          } else{
            return false;
          }
      }
  
}
?>