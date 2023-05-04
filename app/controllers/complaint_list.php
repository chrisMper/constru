<?php 

class complaint_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->complaintModel = $this->model('complainttModel');
    }


    public function index(){
      //Get Post
      $complaints=$this->complaintModel->getComplaints();

      include 'views/complaints.php';
    }
  
 
  }
  ?>