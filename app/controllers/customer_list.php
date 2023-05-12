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
    
   
  }
  ?>