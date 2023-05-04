<?php 

class customer_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->customerModel = $this->model('customerModel');
    }


    public function index(){
      //Get Post
      $customers=$this->customerModel->getCustomers();

      // $data = [
      //     'customers'=>$customers
      // ];
      
      // $this->view('users/admin/customers', $data);
      include 'views/customers.php';
    }
  
    // public function addCustomer() {
    //   // Check for POST request
    //   if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     // Sanitize POST data
    //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
   
    //     // Create data array
    //     $data = [
    //       'name' => trim($_POST['name']),
    //       'address' => trim($_POST['address']),
    //       'contact' => trim($_POST['contact_number']),
    //       'email' => trim($_POST['email']),
    //       'status' => trim($_POST['status']),
          
    //     ];
  
    //     // Add customer to the database
    //     if($this->customerModel->addCustomer($data)) {
    //       redirect('customers');
    //     } else {
    //       die('Something went wrong.');
    //     }
    //   } else {
    //     $this->view('customers/customers');
    //   }
    // }
  }
  ?>