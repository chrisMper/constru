<?php
    class cvv{
        private $db;
      

        public function __construct(){
          $this->db = new Database;
        }
    
        public function addCv($data, $file)
        {
         

    // Prepare Query
    $this->db->query('INSERT INTO cv (contactEmail,`Name`,`description`,jobTitle,contactNumber,email,address1,address2,address3,profilePhoto) 
            VALUES (:contactEmail,:Name,:description,:jobTitle,:contactNumber,:email,:address1,:address2,:address3,:profilePhoto)');

    // Bind Values
    $this->db->bind(':contactEmail', $data['contactEmail']);
    $this->db->bind(':Name', $data['Name']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':jobTitle', $data['jobTitle']);
    $this->db->bind(':contactNumber', $data['contactNumber']);
    $this->db->bind(':email', $data['userEmail']);
    $this->db->bind(':address1', $data['adress1']);
    $this->db->bind(':address2', $data['adress2']);
    $this->db->bind(':address3', $data['adress3']);
    $this->db->bind(':profilePhoto', $file['file_name']);
    

    move_uploaded_file($file['temp_name'], $file['upload_to'] . $file['file_name']);
    

    if ($this->db->execute()) {

      // Get the postId of the inserted record
      $cvId = $this->db->lastInsertId(); //inbuilt method

      // Insert into comp_listing_stages table
      return $cvId;
      

      
        }
      }

      
        public function addCvSkills($skill,$presentages, $dataD){
          
            $this->db->query('INSERT INTO cv_skills (cvId, userEmail, skill,presentages) 
            VALUES (:cvId, :userEmail,:skill,:presentages)');
     
            // Bind values to parameters
            $this->db->bind(':cvId', $dataD['cvId']);
            $this->db->bind(':userEmail', $dataD['userEmail']);
            $this->db->bind(':skill', $skill);
            $this->db->bind(':presentages', $presentages);
            if ($this->db->execute()) {
              return true;
              //Execute    
            } else {
              return false;
            }
            
          
        }

        public function addCvEducation($education,$Start, $End,$dataD){
          
          $this->db->query('INSERT INTO cv_education (cvId, userEmail, education,startYear,endYear) 
        VALUES (:cvId, :userEmail,:education,:startYear,:endYear)');
  
        // Bind values to parameters
        $this->db->bind(':cvId', $dataD['cvId']);
        $this->db->bind(':userEmail', $dataD['userEmail']);
        $this->db->bind(':education', $education);
        $this->db->bind(':startYear',$Start);
        $this->db->bind(':endYear',$End);

        if ($this->db->execute()) {
          return true;
          //Execute    
        } else {
          return false;
        
      }
    }

      public function addCvExperience($experience,$Start, $End,$dataD){
          
        $this->db->query('INSERT INTO cv_expirience (cvId, userEmail, experience,startYearEx,endYearEx) 
        VALUES (:cvId, :userEmail,:experience,:startYear,:endYear)');
  
        // Bind values to parameters
        $this->db->bind(':cvId', $dataD['cvId']);
        $this->db->bind(':userEmail', $dataD['userEmail']);
        $this->db->bind(':experience', $experience);
        $this->db->bind(':startYear',$Start);
        $this->db->bind(':endYear',$End);

        if ($this->db->execute()) {
          return true;
          //Execute    
        } else {
          return false;
        }
    }


    public function getCvDetails(){
      $this->db->query('SELECT * FROM cv ');
      $results= $this->db->resultset();
      return $results;
    }

    public function getCvSkills(){
      $this->db->query('SELECT * FROM cv_skills');
      $results= $this->db->resultset();
      return $results;
    }

    public function getCvExperience(){
      $this->db->query('SELECT * FROM cv_expirience');
      $results= $this->db->resultset();
      return $results;
    }

    public function getCvEducation(){
      $this->db->query('SELECT * FROM cv_education');
      $results= $this->db->resultset();
      return $results;
    }


    
    public function checkUser($userEmail){
   
      $this->db->query('SELECT * FROM cv WHERE email =:userEmail');
      $this->db->bind(':userEmail',$userEmail);
      $row = $this->db->single();

      if ($this->db->rowCount()>0) {
              return true;
            } else {
              return false;
            }
    
    }

      }
    