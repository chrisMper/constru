<?php
  class Pages extends Controller{
    public function __construct(){
      /*$this->itemModel = $this->model('items');     */
    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      if(isset($_SESSION['user_email'])){
        redirect('users/sup/supplierDashboard');
      }

      //Set Data
      $data = [
        'title' => 'Welcome To Constru +',
        'description' => 'Best Place to Construction site works'
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);
    }

    public function about(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/about', $data);
    }

    public function msg(){
      $this->view('users/eng/msg/msg');
      // path is given
    }
    public function chat(){
      $this->view('users/eng/msg/chat');

    }
    public function msg4(){
      $this->view('users/eng/msg/msg4');

    }

    public function projects(){
      $this->view('myprojects/myProjects_new');
    }
    public function myProjects_completed(){
      $this->view('myprojects/myProjects_completed');
    }
    public function myProjects_cancelled(){
      $this->view("myprojects/myProjects_cancelled");
    }

    public function cart(){
      $this->view('mycart/cart');
    }

    public function myOrders(){
      $this->view('myorders/myOrders');
    }
    // public function cancelled_roder(){
    //   $this->view('myorders/cancelled_order');
    // }
    // public function cancel(){
    //   $this->view('myorders/cancel');
    //}

    public function bookings(){
      $this->view('users/sup/myBookings/myBookings_new');
    }

    public function statistics(){
      $this->view('users/sup/statistics/statistics');
    }

    public function chart(){
      $this->view('users/sup/statistics/chart');
    }

    public function cv(){
      $this->view('users/eng/cvdisplay');
    }

    /*public function profile(){
      $this->view('users/sup/profile/profile');
    }*/

  /*  public function updateprofile(){
      $this->view('users/sup/profile/updateprofile');
    }*/

    public function search(){
      $this->view('home/search');
    }

    public function searchgig(){
      $this->view('home/searchgig');
    }
    public function viewcv(){
      $this->view('home/viewcv');
    }
  
    public function supplier(){
      $this->view('users/sup/supplierDashboard');
    }

    public function messages(){
      $this->view('users/sup/messages/messages');
    }

    public function chatbox(){
      $this->view('users/sup/messages/chatbox');
    }

    public function register(){
      $this->view('users/sup/supregister/supregister');
    }

    public function login(){
      $this->view('users/login');
    }
    
  }