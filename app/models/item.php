<?php

class item{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getItems(){
        $this->db->query('SELECT * FROM supplier_item ');
        $results = $this->db->resultSet();
        return $results;
    }

    public function addItems($data,$file){
        $this->db->query('INSERT INTO supplier_item (item, description, price, code, quantityInStock, category, itemImage,email) VALUES (:item, :description, :price, :code, :quantityInStock, :category, :itemImage,:email)');
       

        $this->db->bind(':email',$data['email']);
        $this->db->bind(':item',$data['item']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':code',$data['code']);
        $this->db->bind(':quantityInStock',$data['quantityInStock']);
        $this->db->bind(':category',$data['category']);
        $this->db->bind(':itemImage',$file['file_name']);

        move_uploaded_file($file['tmp_name'],$file['upload_to'].$file['file_name']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateItems($data,$file){
        
        $this->db->query('UPDATE supplier_item SET item=:item, description=:description, price= :price, code= :code, quantityInStock= :quantityInStock, category= :category, itemImage= :itemImage, email= :email WHERE supplierItemId=:supplierItemId');
       
        $this->db->bind(':supplierItemId',$data['supplierItemId']);
        $this->db->bind(':item',$data['item']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':code',$data['code']);
        $this->db->bind(':quantityInStock',$data['quantityInStock']);
        $this->db->bind(':category',$data['category']);
        $this->db->bind(':itemImage',$file['file_name']);
        $this->db->bind(':email',$data['email']);

        move_uploaded_file($file['tmp_name'],$file['upload_to'].$file['file_name']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getItemById($supplierItemId){
        $this->db->query('SELECT * FROM supplier_item WHERE supplierItemId=:supplierItemId');
        $this->db->bind(':supplierItemId',$supplierItemId);
        $row=$this->db->single();
        return $row;
    }

    public function deleteItems($supplierItemId) {
        $this->db->query('DELETE FROM supplier_item WHERE supplierItemId = :supplierItemId');
        $this->db->bind(':supplierItemId', $supplierItemId);
        
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
      }

    }
?>