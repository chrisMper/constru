<?php

class sup_myOrderModel
{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMyOrders()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="pending"');
        $results = $this->db->resultSet();
        return $results;
    }

    
    public function getMyOrders_ongoing()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="ongoing"');
        $results = $this->db->resultSet();
        return $results;
    }

  
    public function getMyOrders_completed()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="completed"');
        $results = $this->db->resultSet();
        return $results;
    }

    
    public function getMyOrders_cancelled()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="cancelled"');
        $results = $this->db->resultSet();
        return $results;
    }

}
?>