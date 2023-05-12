<?php 

class request_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->requestModel = $this->model('requestModel');
    }


    public function index(){
      //Get Post
      $requests=$this->requestModel->getRequests();

      include 'views/join_requests.php';
    }
  
//  public function getDetails($email){
//   $details=$this->requestModel->getDetails()
//  }

  }
  ?>