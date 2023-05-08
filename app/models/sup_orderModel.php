<?php

class sup_orderModel{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getOrders(){
        $this->db->query('SELECT * FROM supplier_order ');
        $results = $this->db->resultSet();
        return $results;
    }
}
?>