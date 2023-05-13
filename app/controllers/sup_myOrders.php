<?php
class sup_myOrders extends Controller{
  private $myOrderModel;
  private $itemModel;
  private $userModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->myOrderModel=$this->model('sup_myOrderModel');
        $this->itemModel=$this->model('item');
        $this->userModel=$this->model('User');
    }
  
    
        // Load All items
    public function sup_orders(){
        //Get items
        $orders=$this->myOrderModel->getOrders();
        $items=$this->itemModel->getItems();
        $Users=$this->userModel->findAllUsers();
    
        $data = [
            'items'=>$items,
            'orders' =>$orders,
            'Users' =>$Users,
        ];
        
        $this->view('users/sup/sup_orders/orders_new', $data);
    }

    public function addOrders_new($supplierOrderId){
     
   
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
         $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
         $data = [
           'supplierOrderId' => $supplierOrderId,
           'dueDate'=>trim($_POST['dueDate']),
           'email'=>$_SESSION['user_email']
         ];
       
           
           if($this->myOrderModel->addOrders($data)){
             redirect('sup_orders/orders_ongoing');
           }
        
       }
    }

    public function orders_ongoing(){

      $orders=$this->myOrderModel->getOrders_ongoing();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
      $this->view('users/sup/sup_orders/orders_ongoing',$data);
    }

    public function addOrders_ongoing($supplierOrderId){
      
       $data = [
         'supplierOrderId' => $supplierOrderId,
         'email'=>$_SESSION['user_email']
       ];
     
         
         if($this->myOrderModel->addOrders_ongoing($data)){
          redirect('sup_orders/orders_ongoing');
         }
    }

    public function orders_completed(){

      $orders=$this->myOrderModel->getOrders_completed();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
       $this->view('users/sup/sup_orders/orders_completed',$data);
    }

    public function addToOrders_cancelled($supplierOrderId){
     
   
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      
       $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
      
       $data = [
         'supplierOrderId' => $supplierOrderId,
         'reason'=>trim($_POST['reason']),
         'email'=>$_SESSION['user_email']
       ];
     
         
         if($this->myOrderModel->addToOrders_cancelled($data)){
           redirect('sup_orders/orders_cancelled');
         }
     }
    }

    public function orders_cancelled(){

      $orders=$this->myOrderModel->getOrders_cancelled();
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