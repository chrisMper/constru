<?php
  class Pages extends Controller{
    public function __construct(){
     
    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      if(isset($_SESSION['user_email'])){
        redirect('users/dashboard');
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
      $this->view('msg/msg');
      // path is given
    }
    public function chat(){
      $this->view('msg/chat');

    }

    public function projects(){
      $this->view('myprojects/projects');
    }

    public function cart(){
      $this->view('mycart/cart');
    }

    public function orders(){
      $this->view('myorders/orders');
    }

    public function bookings(){
      $this->view('mybookings/bookings');
    }

    public function stats(){
      $this->view('stats/stats');
    }

    public function cv(){
      $this->view('users/eng/cv');
    }

    public function profile(){
      $this->view('profile/profile');
    }
  }