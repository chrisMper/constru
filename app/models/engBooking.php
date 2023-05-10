<?php
    class engBooking{
        private $db;
      

        public function __construct(){
          $this->db = new Database;
        }
    
    //enter data to enginer Booking pending    
        public function engBookingPending($data)
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


    }
?>