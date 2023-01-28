<?php
    class Analyse{
        private $db;

        public function __construct(){
          $this->db = new Database;
        }
    
       
        public function statis($data){
          // Prepare Query
          $this->db->query('INSERT INTO analytics (page_url,entry_time,ip_address,country) 
          VALUES (:Page_url,:Entry_time,22,"sa")');
    
          // Bind Values
          $this->db->bind(':Page_url', $data['Page_url']);
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

        public function getPostId(){
          $this->db->query('SELECT PostId FROM listing where  ');

          $results= $this->db->resultSet();

          return $results;
      }
    
    }


?>