<?php
class compListing
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getratings()
  {
    $this->db->query('SELECT * FROM ratings');

    $results = $this->db->resultSet();

    return $results;
  }
}