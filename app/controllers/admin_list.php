<?php

class admin_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->adminModel = $this->model('adminModel');
    }


    public function index(){
      //Get Post
      $admins=$this->adminModel->getAdmins();

      
      // $this->view('users/admin/admins', $data);
      include 'views/admins.php';
    }
  
    public function addAdmin() {
      // Check for POST request
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
   
        // Create data array
        $data = [
          'fname' => trim($_POST['fname']),
          'lname' => trim($_POST['lname']),
          'contact_number' => trim($_POST['contact_number']),
          'email' => trim($_POST['email']),
          'nic' => trim($_POST['nic']),
          'age' => trim($_POST['age']),
          'address' => trim($_POST['address']),
          // 'profile_image' => $profile_image
        ];

    
  
        // Add admin to the database
        if($this->adminModel->addAdmin($data)) {
          redirect('admins');
        } else {
          die('Something went wrong.');
        }
      } else {
        $this->view('admins/add_admin');
      }
    }

    public function deleteAdmin($email) {
  if($this->adminModel->deleteAdmin($email)) {
    redirect('admins/admins');
  } else {
    die('Something went wrong.');
  }
}


public function update_admin($id) {
  // Check for POST request
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Create data array
    $data = [
      'id' => $id,
      'fname' => trim($_POST['fname']),
      'lname' => trim($_POST['lname']),
      'contact_number' => trim($_POST['contact_number']),
      'email' => trim($_POST['email']),
      'nic' => trim($_POST['nic']),
      'age' => trim($_POST['age']),
      'address' => trim($_POST['address']),
    ];

    // Update admin in the database
    if($this->adminModel->updateAdmin($data)) {
      redirect('admins');
    } else {
      die('Something went wrong.');
    }
  } else {
    // Get the admin data from the database
    $admin = $this->adminModel->getAdminById($id);

    // Create data array
    $data = [
      'id' => $id,
      'fname' => $admin->fname,
      'lname' => $admin->lname,
      'contact_number' => $admin->contact_number,
      'email' => $admin->email,
      'nic' => $admin->nic,
      'age' => $admin->age,
      'address' => $admin->address,
    ];

    $this->view('admins/update_admin', $data);
  }
}

  }
  ?>
