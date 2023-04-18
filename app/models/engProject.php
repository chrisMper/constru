<?php
    class engProject{
        private $db;
      

        public function __construct(){
          $this->db = new Database;
        }
    
    //enter data to enginer project pending    
        public function engProjectPending($data)
  {

    // Prepare Query
    $this->db->query('INSERT INTO `engneer_project_pending` (PostId, customerEmail,engineerEmail) VALUES (:postId, :customerEmail,:engineerEmail)');

    $postID= intval($data['postId']);

    // Bind Values
    $this->db->bind(':customerEmail', $data['customerEmail']);
    $this->db->bind(':engineerEmail', $data['engineerEmail']);
    $this->db->bind(':postId',$postID);
    
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  // get all data of pending projects
  public function getEngProgectPending()
  {

    $this->db->query('SELECT * FROM engneer_project_pending');
    $results = $this->db->resultSet();

    return $results;
  }


// get all data of ongoing projects
  public function engineerProjectOngoing()
  {

    $this->db->query('SELECT * FROM engneer_project_pending');
    $results = $this->db->resultSet();

    return $results;
  }

  // get all data of Complete projects
  public function engineerProjectComplete()
  {

    $this->db->query('SELECT * FROM engneer_project_complete');
    $results = $this->db->resultSet();

    return $results;
  }

  // get all data of Cancell projects
  public function engineerProjectCancell()
  {

    $this->db->query('SELECT * FROM engneer_project_cancell');
    $results = $this->db->resultSet();

    return $results;
  }




    }
?>