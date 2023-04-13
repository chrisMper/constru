<?php
class Users extends Controller
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
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

  //---------------------------company registration starts here------------------------------------------
  public function compRegister()
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
        'email' => trim($_POST['email']),
        'Tele' => trim($_POST['Tele']),
        'adline1' => trim($_POST['adline1']),
        'adline2' => trim($_POST['adline2']),
        'city' => trim($_POST['city']),
        'Postcode' => trim($_POST['Postcode']),
        'District' => trim($_POST['District']),
        'Country' => trim($_POST['Country']),
        'ictadNo' => trim($_POST['ictadno']),
        'compGrade'=> trim($_POST['compGrade']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),

        'FName_err' => '',
        'FName_err' => '',
        'email_err' => '',
        'Tele_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'ictadNo_err' => '',
        'compGrade_err'=> '',
        'password_err' => '',
        'confirm_password_err' => '',
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
        if ($this->userModel->compregister($data)) {
          if ($this->userModel->updateServiceProvider($data['email'])) {
            if ($this->userModel->updateCompany($data['email'],$data['ictadNo'],$data['compGrade'])) {
              // Redirect to login
              redirect('users/login');
            }
          }
        } else {
          die('Something went wrong');
        }
      } else {
        // Load View
        $this->view('users/comp/compRegister', $data);
      }
    } else {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        
        'FName' => '',
        'email' => '',
        'Tele' => '',
        'adline1' => '',
        'adline2' => '',
        'city' => '',
        'Postcode' => '',
        'District' => '',
        'Country' => '',
        'ictadNo' => '',
        'compGrade'=> '',
        'password' => '',
        'confirm_password' => '',
        'FName_err' => '',
        'email_err' => '',
        'Tele_err' => '',
        'adline1_err' => '',
        'adline2_err' => '',
        'city_err' => '',
        'Postcode_err' => '',
        'District_err' => '',
        'Country_err' => '',
        'ictadNo_err' => '',
        'compGrade_err'=> '',
        'password_err' => '',
        'confirm_password_err' => '',
      ];

      // Load View
      $this->view('users/comp/compRegister', $data);
    }
  }
 //-------------------------company registrations ends here-----------------------------



  public function login()
  {
    // Check if logged in
    // if ($this->isLoggedIn()) {
     
    //     redirect('users/comp/compdash');
    //   }
    
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

      $role=$this->userModel->findRoleByEmail($data['email']);
      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {

         // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // User Authenticated!
          $this->createUserSession($data['email'], $data['password'], $role);
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
  public function createUserSession($email, $name,$role)
{
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;
    $_SESSION['user_role'] = $role;
    switch($role){
      case "engineer":
        redirect('pages/engdash');
        break;
      case "company":
        redirect('pages/compdash');
        break;
      default:
        redirect('users/login');
        break;
    }
}
public function index(){
  
}

  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_role']);
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


  public function profile()
  {
    //Get user
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





