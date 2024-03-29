<?php
  class Pages extends Controller{
    public function __construct(){
     
    }

   // Load Homepage
    public function index(){
      // If logged in, redirect to posts
      //if(isset($_SESSION['user_email'])){
      //   redirect('users/dashboa');
      // }

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

    public function orders(){
      $this->view('users/eng/myorders/myOrders');
    }
    // public function cancelled_roder(){
    //   $this->view('myorders/cancelled_order');
    // }
    // public function cancel(){
    //   $this->view('myorders/cancel');
    //}

    public function bookings(){
      $this->view('mybookings/myBookings_ongoing');
    }

    public function stats(){
      $this->view('stats/stats');
    }

    public function cv(){
      $this->view('users/eng/cv/cvdisplay');
    }
    

    public function profile(){
      $this->view('profile/profile');
    }

    public function cusdash(){
      $this->view('users/customer/cusdash');
    }

    public function search(){
      $this->view('home/search');
    }

    public function searchgig(){
      $this->view('home/searchgig');
    }
    public function searchgigcomp(){
      $this->view('home/searchgigcomp');
    }
    public function viewcv(){
      $this->view('home/viewcv');
    }
    public function viewportfolio(){
      $this->view('home/viewportfolio');
    }
    public function engdash(){
      $this->view('users/eng/dashboard');
    }
    
    /*functions of comp starts here*/
    public function compdash(){
      $this->view('users/comp/compdash');
    }
   
    public function compmyprojects_new(){
      $this->view('users/comp/myprojects/compmyprojects_new');
    }
    public function compmyprojects_ongoing(){
      $this->view('users/comp/myprojects/compmyprojects_new');
    }
    /*functions of comp ends here*/
    // functions of home start here
    
    public function compRegister(){
      $this->view('users/comp/compRegister');
    }

    public function ListingForComp(){
      $this->view('users/comp/listings/listings');
    }
  }