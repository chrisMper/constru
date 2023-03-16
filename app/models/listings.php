<?php

class listings{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getListings(){
        $this->db->query('SELECT * , supplier.user_id as user_id, listing.id as listing_id FROM listing INNER JOIN supplier ON listing.id = supplier.user_id ORDER BY listing.created_at DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function addlistings($data){
        $this->db->query('INSERT INTO listings(product, description, price, time, availability, quantity, stockamount, product_img,user_id) VALUES (:product, :description, :price, :time, :availability, :quantity, :stockamount, :product_img,:user_id)');
       
        $this->db->bind(':user_id',$data['user_id']);
        $this->db->bind(':product',$data['product']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(': price',$data['price']);
        $this->db->bind(':time',$data['time']);
        $this->db->bind(':availability',$data['availability']);
        $this->db->bind(':quantity',$data['quantity']);
        $this->db->bind(':stockamount',$data['stockamount']);
        $this->db->bind(':product_img',$data['product_img']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updatelistings($data){
        $this->db->query('UPDATE listings SET product=:product, description=:description, price= :price, time= :time, availability= :availability, quantity= :quantity, stockamount= :stockamount, product_img= :product_img WHERE id=:id');
       
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':product',$data['product']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(': price',$data['price']);
        $this->db->bind(':time',$data['time']);
        $this->db->bind(':availability',$data['availability']);
        $this->db->bind(':quantity',$data['quantity']);
        $this->db->bind(':stockamount',$data['stockamount']);
        $this->db->bind(':product_img',$data['product_img']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /*public function getListingById($id){
        $this->db->query('SELECT * FROM listing WHERE id=:id');
        $this->db->bind(':id',$id);
        $row=$this->db->single();
        return $row;
    }*/
    public function deletelistings($id) {
        $this->db->query('DELETE FROM listing WHERE id = :id');
        $this->db->bind(':id', $id);
        
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
      }

    }
?>