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
  
    
        // Load All my orders
    public function sup_myOrders(){
       
        $orders=$this->myOrderModel->getMyOrders();
        $items=$this->itemModel->getItems();
        $Users=$this->userModel->findAllUsers();
    
        $data = [
            'items'=>$items,
            'orders' =>$orders,
            'Users' =>$Users,
        ];
        
        $this->view('users/sup/sup_myOrders/myOrders_new', $data);
    }

    //load all ongoing my orders
    public function myOrders_ongoing(){

      $orders=$this->myOrderModel->getMyOrders_ongoing();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
      $this->view('users/sup/sup_myOrders/myOrders_ongoing',$data);
    }

    //load all completed my orders
    public function myOrders_completed(){

      $orders=$this->myOrderModel->getMyOrders_completed();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
       $this->view('users/sup/sup_myOrders/myOrders_completed',$data);
    }


    public function myOrders_cancelled(){

      $orders=$this->myOrderModel->getMyOrders_cancelled();
      $items=$this->itemModel->getItems();
      $Users=$this->userModel->findAllUsers();
  
      $data = [
          'items'=>$items,
          'orders' =>$orders,
          'Users' =>$Users,
      ];
      
      $this->view("users/sup/sup_myOrders/myOrders_cancelled",$data);
    }
}
?>