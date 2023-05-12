<?php

class admin_list extends Controller {
  private $adminModel;
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
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
          'password' => trim($_POST['password']),
          // 'fname_err' => '',    
          // 'email_err' => '',
          // 'password_err' => ''
        ];
 // Validate email
//  if(empty($data['email'])){
//   $data['email_err'] = 'Please enter an email';
//  }
//   // Validate name
//   if(empty($data['fname'])){
//     $data['fname_err'] = 'Please enter a name';
//   }
 
//  // Validate password
//  if(empty($data['password'])){
//   $password_err = 'Please enter a password.';     
// } elseif(strlen($data['password']) < 6){
//   $data['password_err'] = 'Password must have atleast 6 characters.';
// }

// if (empty($data['fname_err']) && empty($data['email_err']) && empty($data['password_err']) ) {
  // SUCCESS - Proceed to insert
 // Hash Password
 $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

}  
  
        // Add admin to the database
        if($this->adminModel->addAdmin($data)) {
          redirect('pages/admins');
        } else {
          die('Something went wrong.');
        }
      // } else {
      //   $this->view('admins/admins',$data);
      // }
    }
    // else {
    //   // IF NOT A POST REQUEST

    //   // Init data
    //   $data = [
    //     'fname' => '',
    //     'lname' => '',
    //     'contact_number' => '',
    //     'email' => '',
    //     'nic' => '',
    //     'age' => '',
    //     'address' => '',
    //     'password' => '',
    //     'fname_err' => '',
    //     'lname_err' => '',
    //     'email_err' => '',
    //     'password_err' => '',


    //   ];
     
      //   $this->view('admins/admins',$data);
      // }
    // }






//     public function deleteAdmin($email) {
//   if($this->adminModel->deleteAdmin($email)) {
//     redirect('admins/admins');
//   } else {
//     die('Something went wrong.');
//   }
// }


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
      'password' => $admin->address,

    ];

    $this->view('admins/update_admin', $data);
  }
}

  }
  ?>