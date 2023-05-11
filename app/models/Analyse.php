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
          $this->db->execute();
          $Listingid=$data['Listingid'];
          $this-> getVisitcount($Listingid);

        }


      public function getListingById($id){
        $this->db->query('SELECT * FROM engineer_listing where  PostId = :id');
        $this->db->bind(':id',$id);

         $row= $this->db->single();

        return $row;
    }



    public function getVisitcount($postId){
      
        $this->db->query('UPDATE engineer_listing
            Set  visiterCount = visiterCount + 1
            Where PostId = :postId');
            $this->db->bind(':postId',$postId);
        

         
         $this->db->execute();

        }

        public function getBookingCount($postId){
      
          $this->db->query('UPDATE engineer_listing
              Set  noOfBookings = noOfBookings + 1
              Where PostId = :postId');
              $this->db->bind(':postId',$postId);
          
  
           
          if($this->db->execute()){
            return true;
          } else{
            return false;
          }
  
          }
    



    }


?>