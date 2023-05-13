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

    public function addReview($data)
    {
        $this->db->query('UPDATE supplier_order SET review=:review WHERE supplierOrderId=:supplierOrderId');

        $this->db->bind(':supplierOrderId', $data['supplierOrderId']);
        $this->db->bind(':review', $data['review']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function addToOrders_cancelled($data)
    {
        $this->db->query('UPDATE supplier_order SET delivaryStatus=:delivaryStatus, endedDate=NOW(), reason=:reason WHERE supplierOrderId=:supplierOrderId');

        $this->db->bind(':supplierOrderId', $data['supplierOrderId']);
        $this->db->bind(':reason', $data['reason']);
        $this->db->bind(':delivaryStatus', "cancelled");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getMyOrders_cancelled()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="cancelled"');
        $results = $this->db->resultSet();
        return $results;
    }

}
?>