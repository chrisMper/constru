<?php
    class Analyse{
        private $db;

        public function __construct(){
          $this->db = new Database;
        }
    
       
        public function statis($data){
          // Prepare Query
          $this->db->query('INSERT INTO analytics (PostId,entry_time,ip_address,country) 
          VALUES (:PostId,:Entry_time,22,"sa")');
    
          // Bind Values
          $this->db->bind(':PostId', $data['Listingid']);
          $this->db->bind(':Entry_time', $data['timenow']);
          // $this->db->bind(':Ip_address', $data['Ip_address']);
          // $this->db->bind(':Country', $data['Country']);
    
          //Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
        }

        


      public function getListingById($id){
        $this->db->query('SELECT * FROM listing where  PostId = :id');
        $this->db->bind(':id',$id);

         $row= $this->db->single();

        return $row;
    }

    public function getVisitcount($postId){
        $this->db->query('SELECT COUNT(column_name)
        FROM analytics
        WHERE  PostId= :postId; ');
        $this->db->bind(':postId',$postId);

         $row= $this->db->single();

        return $row;
    }
    



    }


?>