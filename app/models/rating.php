<?php
class rating
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // get functions start here
  public function getStarRatings()
  {
    $this->db->query('SELECT starRatings FROM ratings');
    $results = $this->db->single();
    return $results->starRatings;
  }

  public function getFriendliness()
  {
    $this->db->query('SELECT friendliness FROM ratings');
    $results = $this->db->single();
    return $results->friendliness;
  }

  public function getPendingOrders()
  {
    $this->db->query('SELECT pendingOrders FROM ratings');
    $results = $this->db->single();
    return $results->pendingOrders;
  }

  public function getPunctuality()
  {
    $this->db->query('SELECT punctuality FROM ratings');
    $results = $this->db->single();
    return $results->punctuality;
  }
  public function getOrdersCompleted()
  {
    $this->db->query('SELECT ordersCompleted FROM ratings');
    $results = $this->db->single();
    return $results->ordersCompleted;
  }
  public function getActiveDays()
  {
    $this->db->query('SELECT activeDays FROM ratings');
    $results = $this->db->single();
    return $results->activeDays;
  }
  public function getCancellations()
  {
    $this->db->query('SELECT cancellations FROM ratings');
    $results = $this->db->single();
    return $results->cancellations;
  }
  //get functions end here


}