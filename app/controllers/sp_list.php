<?php

class sp_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->spModel = $this->model('spModel');
    }


    public function index(){
      //Get Post
      $engs=$this->spModel->getEngs();

      // $data = [
      //     'admins'=>$admins
      // ];
      
      // $this->view('users/admin/admins', $data);
      include 'views/engs.php';
    }
  

    
  }


  class sp_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->spModel = $this->model('spModel');
    }


    public function index(){
      //Get Post
      $sups=$this->spModel->getSups();

      //
      // $this->view('users/admin/admins', $data);
      include 'views/sups.php';
    }
  

    
  }

  class sp_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->spModel = $this->model('spModel');
    }


    public function index(){
      //Get Post
      $comps=$this->spModel->getComps();

      // $data = [
      //     'admins'=>$admins
      // ];
      
      // $this->view('users/admin/admins', $data);
      include 'views/comps.php';
    }
  

    
  }
  ?>