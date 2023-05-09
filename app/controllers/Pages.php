<?php
class Pages extends Controller
{
  private $listingModel;
  private $userModel;
  private $engProjectModel;


  public function __construct()
  {
    $this->listingModel = $this->model('Listing');
    $this->userModel = $this->model('User');
    $this->engProjectModel = $this->model('engProject');
  }

  // Load Homepage
  public function index()
  {
    // If logged in, redirect to posts
    if (isset($_SESSION['user_email'])) {
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

  public function about()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/about', $data);
  }

  public function msg()
  {
    $this->view('msg/msg');
    // path is given
  }
  public function chat()
  {
    $this->view('msg/chat');
  }

  public function myProjectsNew()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngProgectPending();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engProjectPendig' => $engProject
    ];

    $this->view('users/eng/myprojects/myProjects_new', $data);
  }




  public function myProjectsOnGoing()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectOngoing();
    $cancellNotes = $this->engProjectModel->getcancellNotes();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectOngoing' => $engProject,
      'cancellNotes'=>$cancellNotes
    ];

    $this->view('users/eng/myprojects/myProjects_ongoing', $data);
  }

  public function cancelConfirm($projectId)
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectOngoing();
    $cancellNotes = $this->engProjectModel->getcancellNotes();
    $projectId = $projectId;

    

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectOngoing' => $engProject,
      'cancellNotes'=>$cancellNotes,
      'projectId'=>$projectId
    ];

    $this->view('users/eng/myprojects/cancelconfirm', $data);

  }


  public function customerBookingOnGoing()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectOngoing();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectOngoing' => $engProject
    ];

    $this->view('users/eng/mybookings/myBookings_ongoing', $data);
  }


  public function customerBookingComplete()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectComplete();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectComplete' => $engProject
    ];


    $this->view('users/eng/mybookings/myBookings_completed', $data);
  }


  
  public function customerBookingOnCancell()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectCancell();


    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectCancell' => $engProject
    ];

    $this->view("users/eng/mybookings/myBookings_cancelled", $data);
  }







  
  public function bookings()
  {
    $this->view('users/eng/mybookings/myBookings_ongoing');
  }



  public function myProjectsCompleted()
  {


    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectComplete();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectComplete' => $engProject
    ];


    $this->view('users/eng/myprojects/myProjects_completed', $data);
  }


  public function myProjectsCancelled()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();
    $engProject = $this->engProjectModel->getEngineerProjectCancell();


    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider,
      'engineerProjectCancell' => $engProject
    ];

    $this->view("users/eng/myprojects/myProjects_cancelled", $data);
  }

  public function cart()
  {
    $this->view('mycart/cart');
  }

  public function orders()
  {
    $this->view('users/eng/myorders/cancel');
  }


  

  public function stats()
  {
    $this->view('stats/stats');
  }

  public function cv()
  {
    $this->view('users/eng/cv/viewcv');
  }


  public function profile()
  {
    $this->view('profile/profile');
  }

  public function cusdash()
  {
    $this->view('users/customer/cusdash');
  }

  public function search()
  {

    $listings = $this->listingModel->getListings();
    $serviceProvider = $this->userModel->getServiceProviders();

    $data = [
      'listings' => $listings,
      'serviceProvider' => $serviceProvider
    ];

    $this->view('home/search', $data);
  }

  public function searchgig()
  {
    $this->view('home/searchgig');
  }
  public function searchgigcomp()
  {
    $this->view('home/searchgigcomp');
  }
  public function viewcv()
  {
    $this->view('home/viewcv');
  }
  public function viewportfolio()
  {
    $this->view('home/viewportfolio');
  }

  /*functions of comp starts here*/
  public function compdash()
  {
    $this->view('users/comp/compdash');
  }
  public function compmsg()
  {
    $this->view('users/comp/msg/compmsg');
  }
  public function compchat()
  {
    $this->view('users/comp/msg/compchat');
  }
  public function compmyprojects_new()
  {
    $this->view('users/comp/myprojects/compmyprojects_new');
  }
  public function compmyprojects_ongoing()
  {
    $this->view('users/comp/myprojects/compmyprojects_new');
  }
  /*functions of comp ends here*/
  // functions of home start here

  public function compRegister()
  {
    $this->view('Pages/compRegister');
  }

  public function indexLogged()
  {
    $this->view('Pages/indexLogged');
  }
}
