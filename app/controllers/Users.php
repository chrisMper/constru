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
          'company_name' => trim($_POST['company_name']),
          'comapny_email' => trim($_POST['company_email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'addressline1' => trim($_POST['addressline1']),
          'addressline2' => trim($_POST['addressline2']),
          'city' => trim($_POST['city']),
          'postalcode' => trim($_POST['postcode']),
          'district' => trim($_POST['district']),
          'country' => trim($_POST['country']),
          'ictadno' => trim($_POST['ictadno']),
          'company_type' => trim($_POST['company_type']),
          'company_name_err' => '',
          'companyemail_err' => '',
          'password_err' => '',
          'confirm_password_err' => '',
          'addressline1_err' => '',
          'addressline2_err' => '',
          'city_err' => '',
          'postcode_err' => '',
          'district_err' => '',
          'country_err' => '',
        ];

        // Validate email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter an email';
            // Validate name
            // if(empty($data['FName'])){
            //   $data['FName_err'] = 'Please enter a name';
            // }
        } else{
          // Check Email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken.';
          }
        }

        // Validate password
        if(empty($data['password'])){
          $password_err = 'Please enter a password.';     
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must have atleast 6 characters.';
        }

        // Validate confirm password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Please confirm password.';     
        } else{
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Password do not match.';
            }
        }
         
        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // SUCCESS - Proceed to insert

          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          //Execute
          if($this->userModel->register($data)){
            // Redirect to login
            flash('register_success', 'You are now registered and can log in');
            redirect('users/login');
          } else {
            die('Something went wrong');
          }
           
        } else {
          // Load View
          $this->view('users/register', $data);
        }
      } else {
        // IF NOT A POST REQUEST

        // Init data
        $data = [
          'company_name' => '',
          'comapny_email' => '',
          'password' => '',
          'confirm_password' => '',
          'addressline1' => '',
          'addressline2' => '',
          'city' => '',
          'postcode' => '',
          'district' => '',
          'country' => '',
          'company_name_err' => '',
          'companyemail_err' => '',
          'password_err' => '',
          'confirm_password_err' => '',
          'addressline1_err' => '',
          'addressline2_err' => '',
          'city_err' => '',
          'postcode_err' => '',
          'district_err' => '',
          'country_err' => '',
        ];

        // Load View
        $this->view('users/register', $data);
      }
    }

    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('listings/index');
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
          $data['email_err'] = 'This email is not registered.';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){

          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email']);

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
      
      $_SESSION['comp_email'] = $email; 
      // $_SESSION['user_name'] = $name;
      // redirect('listings/index');
      $this->view('users/comp/dashboard');
    }

    // Logout & Destroy Session
    public function logout(){
      unset($_SESSION['comp_email']);
      // unset($_SESSION['user_name']);
      session_destroy();
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