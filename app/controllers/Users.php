<?php
  class Users extends Controller{
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function index(){
      redirect('welcome');
    }

    public function register(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('users/login');
      }
      
      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        $data = [
          'role' => trim($_POST['role']),  
		      'nic' => trim($_POST['nic']),
          'fName' => trim($_POST['fName']),
          'lName' => trim($_POST['lName']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirmPassword' => trim($_POST['confirmPassword']),
          'adLine1' => trim($_POST['adLine1']),
          'adLine2' => trim($_POST['adLine2']),
          'district' => trim($_POST['district']),
          'country' => trim($_POST['country']),
          'city' => trim($_POST['city']),
          'telephoneNo' => trim($_POST['telephoneNo']),
          'email_err' => '',
          'password_err' => '',
          'confirmPassword_err' => '',
          'tele_err' => '',
        ];
     
        
          // Check Email
        if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken.';  
        }

        // Check tele
        if(!is_numeric($data['telephoneNo'])){
          $data['tele_err'] = 'Pleae enter valid telephone number';
        }

        // Validate password
        if(strlen($data['password']) < 8){
          $data['password_err'] = 'Password must have at least 8 characters';
        }

        // Validate confirm password
        if($data['password'] != $data['confirmPassword']){
          $data['confirmPassword_err'] = 'Password does not match';
        }
        
         
        // Make sure fields are not empty and errors are empty
       if(!empty($data['role']) && !empty($data['nic']) && !empty($data['adLine1']) && !empty($data['adLine2']) && !empty($data['country']) && !empty($data['district']) && !empty($data['city']) && !empty($data['fName']) && !empty($data['lName']) 
        && !empty($data['email']) && !empty($data['password']) && !empty($data['confirmPassword']) && !empty($data['telephoneNo']) && empty($data['email_err']) 
        && empty($data['password_err']) && empty($data['confirmPassword_err']) && empty($data['tele_err'])){
          
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          
          //Execute
          if($this->userModel->register($data)){
            if ($this->userModel->updateServiceProvider($data['email'])) {
              if ($this->userModel->updateSupplier($data['role'],$data['nic'],$data['fName'],$data['lName'],$data['email'],$data['country'],$data['district'],$data['password'],$data['adLine1'],$data['adLine2'],$data['city'],$data['telephoneNo'])) {
                // Redirect to login
                redirect('users/login');
              }
            }
          } else {
            die('Something went wrong');
          }
           
        } else {
          // Load View
          $this->view('users/sup/supregister/supregister', $data);
        }
      } else {
        // IF NOT A POST REQUEST
       
        // Init data
        $data = [
          'role' =>'',
          'nic' => '',
          'fName' => '',
          'lName' => '',
          'email' => '',
          'password' => '',
          'confirmPassword' => '',
          'adLine1' =>'',
          'adLine2' =>'',
          'district' => '',
          'country' => '',
          'city'=>'',
          'telephoneNo' => '',
          'email_err' => '',
          'password_err' => '',
          'confirmPassword_err' => '',
          'tele_err' => ''
        ];

        // Load View
        $this->view('users/sup/supregister/supregister', $data);
      }
    }




    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){
        $this->view('users/sup/supplierDashboard');
      }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $data = [       
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),        
          'email_err' => '',
          'password_err' => '',       
        ];

        // Check for email
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email.';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user
        if($this->userModel->findUserByEmail($data['email'])){
          // User Found
        } else {
          // No User
          $data['email_err'] = 'Email not registered';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'],$data['password']);

          if($loggedInUser){
            // User Authenticated!
          
            $this->createUserSession($data['email']);
            
          } else {
            $data['password_err'] = 'Password incorrect.';
            // Load View
            $this->view('users/login', $data);
            
          }
           
        } else {
          // Load View
          $this->view('users/login', $data);
         
        }

      } else {
        // If NOT a POST
       
        // Init data
       $data = [
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // Load View
        $this->view('users/login', $data);
        
      }
    }

    // Create Session With User Info
    public function createUserSession($email){
      
      $_SESSION['user_email'] = $email; 
     $this->view('users/sup/supplierDashboard');
    }

    // Logout & Destroy Session
    public function logout(){
      unset($_SESSION['user_email']);
      //session_destroy();
      redirect('users/login');
    }

    // Check Logged In
    public function isLoggedIn(){
      if(isset($_SESSION['user_email'])){
        return true;
      } else {
        return false;
      }
    }

  
  }