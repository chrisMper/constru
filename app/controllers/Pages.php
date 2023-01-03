<?php
  class Pages extends Controller{
    public function __construct(){
     
    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      if(isset($_SESSION['user_email'])){
        redirect('listings');
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

    public function register(){
      $this->view("users/comp/reg");
    }

    public function login(){
      $this->view("users/login");
    }

    public function listings(){
      $this->view("users/comp/listings");
    }

    public function listingAdd(){
      $this->view("users/comp/add");
    }
  }