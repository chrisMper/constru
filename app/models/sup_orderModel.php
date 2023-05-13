<?php

class sup_orderModel
{

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getOrders()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="pending"');
        $results = $this->db->resultSet();
        return $results;
    }

    public function addOrders($data)
    {
        $this->db->query('UPDATE supplier_order SET dueDate=:dueDate,delivaryStatus=:delivaryStatus,quantity=:quantity WHERE supplierOrderId=:supplierOrderId ');


        $this->db->bind(':dueDate', $data['dueDate']);
        $this->db->bind(':delivaryStatus', "ongoing");
        $this->db->bind(':quantity',  $data['quantity']);
        $this->db->bind(':supplierOrderId', $data['supplierOrderId']);

        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getOrders_ongoing()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="ongoing"');
        $results = $this->db->resultSet();
        return $results;
    }

    public function addOrders_ongoing($data)
    {
        $this->db->query('UPDATE supplier_order SET delivaryStatus=:delivaryStatus,quantity=:quantity endedDate= NOW() WHERE supplierOrderId=:supplierOrderId');

        $this->db->bind(':supplierOrderId', $data['supplierOrderId']);
        $this->db->bind(':delivaryStatus', "completed");
        $this->db->bind(':quantity', $data['quantity']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getOrders_completed()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="completed"');
        $results = $this->db->resultSet();
        return $results;
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

    public function getOrders_cancelled()
    {
        $this->db->query('SELECT * FROM supplier_order WHERE delivaryStatus="cancelled"');
        $results = $this->db->resultSet();
        return $results;
    }

    public function deleteOrders($supplierOrderId)
    {
        $this->db->query('DELETE FROM supplier_order WHERE supplierOrderId = :supplierOrderId');
        $this->db->bind(':supplierOrderId', $supplierOrderId);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
?>