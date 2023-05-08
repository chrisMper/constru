<?php
class sup_orders extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->orderModel=$this->model('sup_orderModel');
        $this->itemModel=$this->model('item');

    }
  
    
        // Load All items
    public function sup_orders(){
        //Get items
        $items=$this->itemModel->getItems();
        $orders=$this->orderModel->getOrders();
    
        $data = [
            'items'=>$items,
            'orders' =>$orders,
        ];
        
        $this->view('users/sup/sup_orders/orders_new', $data);
    }

      public function orders_completed(){
        $this->view('users/sup/sup_orders/orders_completed');
      }
      public function orders_cancelled(){
        $this->view("users/sup/sup_orders/orders_cancelled");
      }
}
?>