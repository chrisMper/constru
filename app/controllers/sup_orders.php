<?php
class sup_orders extends Controller{
  private $orderModel;
  private $itemModel;
  private $userModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->orderModel=$this->model('sup_orderModel');
        $this->itemModel=$this->model('item');
        $this->userModel=$this->model('User');
    }
  
    
        // Load All orders_new
    public function sup_orders(){
    
        $orders=$this->orderModel->getOrders();
        $items=$this->itemModel->getItems();
        $Users=$this->userModel->findAllUsers();
    
        $data = [
            'items'=>$items,
            'orders' =>$orders,
            'Users' =>$Users,
        ];
        
        $this->view('users/sup/sup_orders/orders_new', $data);
    }

    //add orders_new data to database
    public function addOrders_new($supplierOrderId){
     
   
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
         $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
         $data = [
           'supplierOrderId' => $supplierOrderId,
           'dueDate'=>trim($_POST['dueDate']),
           'email'=>$_SESSION['user_email']
         ];
       
           
           if($this->orderModel->addOrders($data)){
             redirect('sup_orders/orders_ongoing');
           }
        
       }
    }

    //load all ongoing orders
    public function orders_ongoing(){

      $orders=$this->orderModel->getOrders_ongoing();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
      $this->view('users/sup/sup_orders/orders_ongoing',$data);
    }

    //add orders_ongoing to database
    public function addOrders_ongoing($supplierOrderId){
      
       $data = [
         'supplierOrderId' => $supplierOrderId,
         'email'=>$_SESSION['user_email']
       ];
     
         
         if($this->orderModel->addOrders_ongoing($data)){
          redirect('sup_orders/orders_completed');
         }
    }

    //load all completed orders
    public function orders_completed(){

      $orders=$this->orderModel->getOrders_completed();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
       $this->view('users/sup/sup_orders/orders_completed',$data);
    }

    //add cancelled orders
    public function addToOrders_cancelled($supplierOrderId){
     
   
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      
       $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
      
       $data = [
         'supplierOrderId' => $supplierOrderId,
         'reason'=>trim($_POST['reason']),
         'email'=>$_SESSION['user_email']
       ];
     
         
         if($this->orderModel->addToOrders_cancelled($data)){
           redirect('sup_orders/orders_cancelled');
         }
     }
    }

    //load cancelled orders
    public function orders_cancelled(){

      $orders=$this->orderModel->getOrders_cancelled();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
      $this->view("users/sup/sup_orders/orders_cancelled",$data);
    }
}
?>