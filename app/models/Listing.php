<?php
  class Listing
  {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getListings()
    {
      $this->db->query('SELECT * FROM engineer_listing');

      $results = $this->db->resultSet();

      return $results;
    }


// add new listing
    public function addlisting($data, $file)
    {


      // Prepare Query
      $this->db->query('INSERT INTO engineer_listing (Title,Description,UserEmail,Photos,visiterCount	) 
            VALUES (:title,:description,:Uemail,:PtName,0)');

      // Bind Values

      $this->db->bind(':title', $data['Title']);
      $this->db->bind(':description', $data['Discription']);
      $this->db->bind(':Uemail', $data['UserEmail']);
      $this->db->bind(':PtName', $file['file_name']);




      // move_uploaded_file($file['temp_name'], $file['upload_to'] . $file['file_name']);





      //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

//update listiing
    public function updatelisting($data, $file,$id)
    {


      // Prepare Query

      $this->db->query('UPDATE engineer_listing SET Title = :title, Description = :description, UserEmail = :Uemail WHERE PostId= :id' );


      // Bind Values

      $this->db->bind(':title', $data['Title']);
      $this->db->bind(':description', $data['Discription']);
      $this->db->bind(':Uemail', $data['UserEmail']);
      $this->db->bind(':id', $id);
      // $this->db->bind(':PtName', $file['file_name']);




      // move_uploaded_file($file['temp_name'], $file['upload_to'] . $file['file_name']);





      //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    //delete listiing
    public function delelisting($id)
    {


      // Prepare Query

      $this->db->query('DELETE FROM engineer_listing WHERE PostId= :id' );

      // Bind Values
      $this->db->bind(':id', $id);
      

      //Execute
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }




  }




  ?>