<?php

use function PHPSTORM_META\elementType;

class CompListings extends Controller{
  private $compListingModel;
  private $analyseModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->compListingModel=$this->model('compListing');
        $this->analyseModel=$this->model('Analyse');

      }


    
    
        // Load All Posts
        public function index(){
          $data = [];
          $this->view('complistings/listings', $data);
          //Get Post
          $listings=$this->compListingModel->getListings();
  
          $data = [
              'listings'=>$listings
          ];
  
          $this->view('compListings/listings', $data);
        }


      public function add(){
         
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

           // Sanitize POST
          $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         
          $data = [
            'Title' => trim($_POST['title']),
            'Discription' => trim($_POST['description']),
            'UserEmail'=>$_SESSION['user_email'],
            'Title_err' => '',  
            'Discription_err' => ''
          ];

          
          $file=[
            'file_name' => $_FILES['image']['name'],
		        'file_type' => $_FILES['image']['type'],
		        'file_size' => $_FILES['image']['size'],
		        'temp_name' => $_FILES['image']['tmp_name'],
            'upload_to' => PUBROOT. '/public/img/uploads/'

          ];

        


  
        //   // Validate Title
          if(empty($data['Title'])){
              $data['Title_err'] = 'Please enter an Title';

              // Validate discription
              if(empty($data['Discription'])){
                $data['Discription_err'] = 'Please enter a Discription';
              }
          } 
           
          // Make sure errors are empty
          if(empty($data['Title_err']) && empty($data['Discription_err'])){ 
            // SUCCESS - Proceed to insert
  

            //Execute
            


            if($this->compListingModel->addlisting($data,$file)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
          } else {
            // Load View
            $this->view('compListings/add', $data);
          }
        } else {
          $this->view('compListings/add');
        }
  
      }


      // uPDATE LISTING 
      public function showUpdateListing($id){
        $listing = $this->analyseModel->getListingById($id);


        $data=[
          'listing'=>$listing
          
        ];


        $postId=intval($id);


        $this->view('compListings/updateListing',$data);

        

      }


      public function updateListing($id){

        
         
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

           // Sanitize POST
          $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          
          
         
          $data = [
            'Title' => trim($_POST['title']),
            'Discription' => trim($_POST['description']),
            'UserEmail'=>$_SESSION['user_email'],
            'Title_err' => '',  
            'Discription_err' => ''
          ];

          
          

          

          $file=[
            'file_name' => $_FILES['image']['name'],
		        'file_type' => $_FILES['image']['type'],
		        'file_size' => $_FILES['image']['size'],
		        'temp_name' => $_FILES['image']['tmp_name']
            // 'upload_to' => 

          ];

        


  
        //   // Validate Title
          if(empty($data['Title'])){
              $data['Title_err'] = 'Please enter an Title';

              // Validate discription
              if(empty($data['Discription'])){
                $data['Discription_err'] = 'Please enter a Discription';
              }
          } 
           
          // Make sure errors are empty
          if(empty($data['Title_err']) && empty($data['Discription_err'])){ 
            // SUCCESS - Proceed to insert
  

            //Execute
            


            if($this->compListingModel->updatelisting($data,$file,$id)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
          } else {
            // Load View
            $this->view('compListings/updateListing', $data);
          }
        } else {
          $this->view('compListings/updateListing');
        }
  
      }


      public function deleteListing($id){
        
            if($this->compListingModel->delelisting($id)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
         
        
  
      }

      
}

?>