<?php
class engBookings extends Controller
{

  private $engBookingModel;
  private $engController;
  private $engProjectModel;
  private $userModel;
  private $listingModel;

  public function __construct()
  {
    $this->engBookingModel = $this->model('engBooking');
    $this->engProjectModel = $this->model('engProject');
    $this->userModel = $this->model('User');
    $this->listingModel = $this->model('Listing');
  }

  public function index()
  {
    redirect('welcome');
  }


  //add to pending
  public function engBookingPending()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'engineerEmail' => trim($_POST['engineerEmail']),
        'customerEmail' => trim($_POST['customerEmail']),
        'postId' => trim($_POST['postId']),
      ];

      // Validate email
      if (($data['engineerEmail']) == ($data['customerEmail'])) {
        die('cant place order');
      } else {
        if ($this->engProjectModel->engProjectPending($data)) {
          $this->controller('pages')->search();
        }
      }
    }
  }


  // add to ongoing
  public function engBookingOnGoing()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'engineerEmail' => trim($_POST['engEmail']),
        'customerEmail' => trim($_POST['customerEmail']),
        'postId' => trim($_POST['postId']),
        'noOfStages' => trim($_POST['noOfStages']),
        'completionDate' => trim($_POST['completionDate']),
        'startDate' => trim($_POST['startDate']),
        'projectId'=>trim($_POST['projectId'])
      ];

      // add datas to relavent tables 
      if($this->engProjectModel->findOngoingProjectById($_POST['projectId'])){
      if ($this->engProjectModel->engProjectOngoing($data)) {
        if ($this->engProjectModel->deleleEngProgectPending($_POST['projectId'])) {
          $this->controller('pages')->myProjectsOnGoing();
        }
      }
    } else{
      $this->controller('pages')->myProjectsOnGoing();
    }


    }
  }



  //Projects Pending to Ongoing
  public function projectsPendingToOngoing()
  {


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



      $projectId = $_POST['projectId'];
      $customerEmail = $_POST['customerEmail'];
      $postId = $_POST['postId'];
      $customerDetails = $this->userModel->getUserById($customerEmail);
      $postDetails = $this->listingModel->getListingById($postId);

      $data = [
        'engineerEmail' => trim($_POST['engEmail']),
        'customerEmail' => trim($customerEmail),
        'postId' => trim($postId),
        'customerDetails' => $customerDetails,
        'postDetails' => $postDetails,
        'projectId' => $projectId

      ];



      $this->view('users/eng/myProjects/ProjectsNewToOnGoing', $data);
    }
  }


  public function projectsPendingToCancell()
  {


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $projectId = $_POST['projectId'];
      $customerEmail = $_POST['customerEmail'];
      $postId = $_POST['postId'];
      $customerDetails = $this->userModel->getUserById($customerEmail);
      $postDetails = $this->listingModel->getListingById($postId);

      $data = [
        'engineerEmail' => trim($_POST['engEmail']),
        'customerEmail' => trim($customerEmail),
        'postId' => trim($postId),
        'customerDetails' => $customerDetails,
        'postDetails' => $postDetails,
        'projectId' => $projectId

      ];



      $this->view('users/eng/myProjects/ProjectsNewToCancell', $data);
    }
  }




  // add to direct to cancell 
  public function engProjectCancell()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'engineerEmail' => trim($_POST['engEmail']),
        'customerEmail' => trim($_POST['customerEmail']),
        'postId' => trim($_POST['postId']),
        'reason' => trim($_POST['reason']),
        'cancelldate' => trim($_POST['cancelldate']),
        'projectId'=>trim($_POST['projectId'])

      ];

      // Validate email
      if($this->engProjectModel->findCancellProjectById($_POST['projectId'])){
      if ($this->engProjectModel->engProjectCancell($data)) {
        if ($this->engProjectModel->deleleEngProgectPending($_POST['projectId'])) {
          $this->controller('pages')->myProjectsCancelled();
        }
      }
    }
    else{
      $this->controller('pages')->myProjectsCancelled();
    }
    }
  }

  // confirm stage
  public function engProjectStagConformation()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $projectId = trim($_POST['projectId']);
      $userEmail = $_SESSION['user_email'];  



      $this->engProjectModel->stageConform($userEmail,$projectId);
       
      

      }
    }



    // confirm cancellation 
  public function engProjectCancellConformation()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $projectId = trim($_POST['projectId']);
      $userEmail = $_SESSION['user_email'];  



      $this->engProjectModel->cancellConform($userEmail,$projectId);
       
      

      }
    }
  }




