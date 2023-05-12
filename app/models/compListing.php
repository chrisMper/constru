<?php
class compListing
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getListings()
  {
    $this->db->query('SELECT * FROM comp_listing');

    $results = $this->db->resultSet();

    return $results;
  }


  // add new listing
  public function addlisting($data, $file)
  {

    $filename = $file['file_name'];

    // Prepare Query
    $this->db->query('INSERT INTO comp_listing (title,`description`,photos,UserEmail,visitorCount,contactPerson) 
            VALUES (:title,:description,:PtName,:UserEmail,0,:contactPerson)');

    // Bind Values
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':PtName', $filename);
    $this->db->bind(':UserEmail', $data['UserEmail']);
    $this->db->bind(':contactPerson', $data['contactPerson']);

    move_uploaded_file($file['temp_name'], $file['upload_to'] . $file['file_name']);

    if ($this->db->execute()) {

      // Get the postId of the inserted record
      $postId = $this->db->lastInsertId(); //inbuilt method
      // Insert into comp_listing_stages table
      $this->db->query('INSERT INTO comp_listing_stages (postId, stage, contact) 
      VALUES (:postId, :stage, :contact)');

      // Bind values to parameters
      $this->db->bind(':postId', $postId);
      $this->db->bind(':stage', $data['stage']);
      $this->db->bind(':contact', $data['contact']);

      if ($this->db->execute()) {
        return true;
        //Execute    
      } else {
        return false;
      }
  }
}
  
  public function getCompStages(){
    $this->db->query('SELECT * FROM `comp_listing_stages`');
    $results = $this->db->resultSet();
    return $results;
}

  //add to comp_listing_stages table
  public function updateStages($stage, $contact)
  {
    $this->db->query('INSERT INTO `comp_listing_stages` (stage, contact)
      VALUES(:stage,:contact )');
    $this->db->bind('stage', $stage);
    $this->db->bind('contact', $contact);
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }




  //update listiing
  public function updatelisting($data, $file, $id)
  {
    // Prepare Query
    $this->db->query('UPDATE comp_listing SET title = :title, description = :description, UserEmail = :UserEmail WHERE PostId= :id');
    // Bind Values
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':UserEmail', $data['UserEmail']);
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
  public function deleteListing($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM comp_listing WHERE PostId= :id');
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
