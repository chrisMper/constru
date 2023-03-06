<?php
class Users extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    redirect('welcome');
  }

  public function engRegister()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('users/login');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'FName' => trim($_POST['FName']),
        'LName' => trim($_POST['LName']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'adline1' => trim($_POST['adline1']),
        'adline2' => trim($_POST['adline2']),
        'city' => trim($_POST['city']),
        'Postcode' => trim($_POST['Postcode']),
        'District' => trim($_POST['District']),
        'Country' => trim($_POST['Country']),
        'Tele' => trim($_POST['Tele']),
        'FName_err' => '',
        'LName_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'Tele_err' => ''
      ];




      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter an email';

        die('Please enter an email');
        // Validate name
        if (empty($data['FName'])) {
          $data['FName_err'] = 'Please enter a name';
          die('Please enter a email');
        }
      } else {
        // Check Email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken.';
          die('email taken');
        }
      }

      // Validate password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter a password.';
        die('enter password');
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must have atleast 6 characters.';
        die('password must atleast 6 ');
      }

      // Validate confirm password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please confirm password.';
        die('confirm password');
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Password do not match.';
          die('password do not match');
        }
      }

      // Make sure errors are empty
      if (empty($data['FName_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // SUCCESS - Proceed to insert

        // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        //Execute
        if ($this->userModel->register($data)) {
          if ($this->userModel->updateServiceProvider($data['email'])) {
            if ($this->userModel->updateEngneer($data['email'])) {
              // Redirect to login
              redirect('users/login');
            }
          }
        } else {
          die('Something went wrong');
        }
      } else {
        // Load View
        $this->view('users/eng/loginAndRegistration/engRegister', $data);
      }
    } else {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        'FName' => '',
        'LName' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'adline1' => '',
        'adline2' => '',
        'city' => '',
        'Postcode' => '',
        'District' => '',
        'Country' => '',
        'Tele' => '',
        'FName_err' => '',
        'LName_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'Tele_err' => ''
      ];

      // Load View
      $this->view('users/eng/loginAndRegistration/engRegister', $data);
    }
  }





  public function login()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('users/eng/dashboard');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Check for email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email.';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      // Check for user
      if ($this->userModel->findUserByEmail($data['email'])) {
        // User Found
      } else {
        // No User
        $data['email_err'] = 'This email is not registered.';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {

        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // User Authenticated!
          $this->createUserSession($data['email'], $data['password']);
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
  public function createUserSession($email, $name)
  {

    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;
    redirect('users/eng/dashboard');
  }

  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('users/login');
  }

  // Check Logged In
  public function isLoggedIn()
  {
    if (isset($_SESSION['user_email'])) {
      return true;
    } else {
      return false;
    }
  }

  public function dashboard()
  {
    $data = [];
    $this->view('users/eng/dashboard', $data);
  }



  public function profile()
  {
    //Get listing
    $engineer = $this->userModel->getUserById($_SESSION['user_email']);



    $data = [
      'engineer' => $engineer
    ];


    $this->view('users/profile', $data);
  }

  
  // Update form 
  public function updateForm()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'FName' => trim($_POST['FName']),
        'LName' => trim($_POST['LName']),
        'email' => trim($_POST['email']),
        'adline1' => trim($_POST['adline1']),
        'adline2' => trim($_POST['adline2']),
        'city' => trim($_POST['city']),
        'Postcode' => trim($_POST['Postcode']),
        'District' => trim($_POST['District']),
        'Country' => trim($_POST['Country']),
        'Tele' => trim($_POST['Tele']),
        'FName_err' => '',
        'LName_err' => '',
        'email_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'Tele_err' => ''
      ];

      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter an email';
        // Validate name
        if (empty($data['FName'])) {
          $data['FName_err'] = 'Please enter a name';
        }
      } else {

        // Check Email
        if ($_SESSION['user_email'] == $data['email']) {
        } else {
          if ($this->userModel->findUserByEmail($data['email'])) {
            $data['email_err'] = 'Email is already taken.';
          }
        }
      }

      // Make sure errors are empty
      if (empty($data['FName_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        // SUCCESS - Proceed to insert


        //Execute
        if ($this->userModel->update($data)) {
          $_SESSION['user_email'] = $data['email'];
          $_SESSION['user_name'] = $data['FName'];
          redirect('users/profile');
        } else {
          die('Something went wrong');
        }
      } else {
        // Load View
        $this->view('users/profile', $data);

        redirect('users/profile');
      }
    } else {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        'FName' => '',
        'LName' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'adline1' => '',
        'adline2' => '',
        'city' => '',
        'Postcode' => '',
        'District' => '',
        'Country' => '',
        'Tele' => '',
        'FName_err' => '',
        'LName_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'Tele_err' => ''
      ];

      // Load View
      $this->view('users/profile', $data);
    }
  }
}





