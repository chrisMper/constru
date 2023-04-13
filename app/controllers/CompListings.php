<?php


class compListings extends Controller{

    public function index(){
        $data = [];
        $this->view('complisting/listings', $data);

    }
      public function __construct(){
          if(!isset($_SESSION['user_email'])){
            redirect('users/login');
          }


        }
    }
?>