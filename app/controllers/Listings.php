<?php

use function PHPSTORM_META\elementType;
// include APPROOT. "/controllers/Analysis.php";

class Listings extends Controller{

  private $listingModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->listingModel=$this->model('Listing');

      }

        // Load All Posts
    public function index(){
        //Get listing
        $listings=$this->listingModel->getListings();

        $data = [
            'listings'=>$listings
        ];
        
        $this->view('listings/listings', $data);
      }

      

      public function stats(){

        $listings=$this->listingModel->getListings();
        $data = [
            'listings'=>$listings,
            
        ];
        
        $this->view('users/analyse',$data);
  
  
  
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
            'upload_to' => '<?php echo URLROOT; ?>/img/uploads/'

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

      

      
}

?>