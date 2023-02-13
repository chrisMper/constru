<?php

use function PHPSTORM_META\elementType;

class Listings extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->listingModel=$this->model('Listing');

      }


    
    
        // Load All Posts
    public function index(){
        //Get Post
        $listings=$this->listingModel->getListings();

        $data = [
            'listings'=>$listings
        ];
        
        $this->view('users/comp/dashboard', $data);
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

          // $file = $_FILES['photo'];
          // $fileName = $file['name'];
          // $fileTmpName = $file['tmp_name'];
          // $fileSize = $file['size'];
          // $fileError = $file['error'];
          // $fileType = $file['type'];
          //$tmp_name = $_FILES['photo']['tmp_name'];


  
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
            // $img_ex = pathinfo($fileName, PATHINFO_EXTENSION);
            // $img_ex_lc = strtolower($img_ex);
            // $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				    // $img_upload_path = URLROOT . '/img/uploads/'.$new_img_name;
				    // move_uploaded_file($_FILES["photo"]["tmp_name"], $img_upload_path);


            if($this->listingModel->addlisting($data)){
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