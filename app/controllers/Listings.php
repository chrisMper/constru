<?php



class Listings extends Controller{
  private $listingModel;
  private $analyseModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->listingModel=$this->model('Listing');
        $this->analyseModel=$this->model('Analyse');

      }


    
    
        // Load All Posts
    public function index(){
        //Get Post
        $listings=$this->listingModel->getListings();

        $data = [
            'listings'=>$listings
        ];
        
        $this->view('listings/listings', $data);
      }

      public function stats()
      {
    
        $listings = $this->listingModel->getListings();
        $data = [
          'listings' => $listings,
    
        ];
    
        $this->view('users/eng/statistics/analyse', $data);
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
            


            if($this->listingModel->addlisting($data,$file)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
          } else {
            // Load View
            $this->view('listings/add', $data);
          }
        } else {
          $this->view('listings/add');
        }
  
      }


      // uPDATE LISTING 
      public function showUpdateListing($id){
        $listing = $this->analyseModel->getListingById($id);


        $data=[
          'listing'=>$listing
          
        ];


        $postId=intval($id);


        $this->view('listings/updateListing',$data);

        

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
            


            if($this->listingModel->updatelisting($data,$file,$id)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
          } else {
            // Load View
            $this->view('listings/updateListing', $data);
          }
        } else {
          $this->view('listings/updateListing');
        }
  
      }


      public function deleteListing($id){
        
            if($this->listingModel->delelisting($id)){
              // Redirect to login
              redirect('listings');
            } else {
              die('Something went wrong');
            }
             
         
        
  
      }

      
}

?>