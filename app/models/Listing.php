9<?php
    class Listing {
        private $db;

        public function __construct()
        {
            $this->db= new Database;
        }

        public function getListings(){
            $this->db->query('SELECT * FROM listing');

            $results= $this->db->resultSet();

            return $results;
        }



        public function addlisting($data,$file){
            // Prepare Query
            $this->db->query('INSERT INTO listing (Title,Description,UserEmail,Photos) 
            VALUES (:title,:description,:Uemail,:PtName)');
      
            // Bind Values
            
            $this->db->bind(':title', $data['Title']);
            $this->db->bind(':description', $data['Discription']);
            $this->db->bind(':Uemail', $data['UserEmail']);
            $this->db->bind(':PtName', $file['file_name']);


            move_uploaded_file($file['temp_name'], $file['upload_to'] . $file['file_name']);
         


          

            //Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
          }


    }




?> 