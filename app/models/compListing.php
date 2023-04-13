<?php
class compListing{
  private $db; //to use the database

  public function __construct(){
    $this->db = new Database;
  }

  public function getcompListing(){
    $this->db->query('SELECT * FROM comp_lisitng');
    $results = $this->db->resultSet(); //used to return more than one row

    return $results;
  }
}
