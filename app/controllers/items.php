<?php
class items extends Controller{

  private $itemModel;
  private $userModel;
  
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->itemModel=$this->model('item');
        $this->userModel=$this->model('User');

    }
  
    
        // Load All items
    public function items(){
        //Get items
        $items=$this->itemModel->getItems();
    
        $data = [
            'items'=>$items,
        ];
        
        $this->view('users/sup/items/items', $data);
    }



  public function addItems(){
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
   
    $data = [
      'item' => trim($_POST['item']),
      'description'=>trim($_POST['description']),
      'price' => trim($_POST['price']),
      'code' => trim($_POST['code']),
      'quantityInStock' => trim($_POST['quantityInStock']),
      'category' => trim($_POST['category']),
      //'itemImage' =>trim($_POST['itemImage']),
      'email'=>$_SESSION['user_email']
    ];
  
    $file = [
      'file_name'=> $_FILES['itemImage']['name'],
      'file_type'=> $_FILES['itemImage']['type'],
      'file_size'=> $_FILES['itemImage']['size'],
      'tmp_name' => $_FILES['itemImage']['tmp_name'],
      'upload_to' => PUBROOT. '/public/img/itemImage/'
      
    ];
    
    if(!empty($data['item']) && !empty($data['description']) && !empty($data['price']) && !empty($data['code']) && !empty($data['quantityInStock']) && !empty($data['category']) && !empty($file['file_name']) && is_numeric($data['quantityInStock']) && is_numeric($data['price']))
		{
      
      if($this->itemModel->addItems($data,$file)){
        redirect('items/items');
        //$this->view('users/sup/items/items');
      } else {
        die('Something went wrong');
      }
    }else{
      $this->view('users/sup/items/addItems',$data);
    }
  }else{
     $data = [	  
		
		'item' => '',
    'description' => '',
    'price' => '',
    'code' => '',
    'quantityInStock' => '',
    'category' => '',
    'itemImage' => ''
    ];
    $this->view('users/sup/items/addItems',$data);
  }
}

 
public function updateItems($supplierItemId){
 
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
   $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
  
   $data = [
     'supplierItemId' => $supplierItemId,
     'item' => trim($_POST['item']),
     'description'=>trim($_POST['description']),
     'price' => trim($_POST['price']),
     'code' => trim($_POST['code']),
     'quantityInStock' => trim($_POST['quantityInStock']),
     'category' => trim($_POST['category']),
     //'itemImage' =>trim($_POST['itemImage']),
     'email'=>$_SESSION['user_email'],
   ];
 
   $file = [
     'file_name'=> $_FILES['itemImage']['name'],
     'file_type'=> $_FILES['itemImage']['type'],
     'file_size'=> $_FILES['itemImage']['size'],
     'tmp_name' => $_FILES['itemImage']['tmp_name'],
     'upload_to'=>PUBROOT. '/public/img/itemImage/'
   ];

   if(!empty($data['item']) && !empty($data['description']) && !empty($data['price']) && !empty($data['code']) && !empty($data['quantityInStock']) && !empty($data['category']) && !empty($file['file_name']) && is_numeric($data['quantityInStock']) && is_numeric($data['price']))
   {
     if($this->itemModel->updateItems($data,$file)){
      redirect('items/items');
      //$this->view('users/sup/items/items');
     } else {
       die('Something went wrong');
     }
   }else{
     $this->view('users/sup/items/updateItems',$data);
   }
 }else{

    $item=$this->itemModel->getItemById($supplierItemId);
 
  /*  if($item->email !=$_SESSION['user_email']){
      $this->view('users/sup/items/items');
    }*/
    $data = [	  
   
   'supplierItemId' => $supplierItemId,
   'item' => $item->item,
   'description' => $item->description,
   'price' => $item->price,
   'code' =>$item->code,
   'quantityInStock' => $item->quantityInStock,
   'category' =>$item->category,
   'itemImage' => $item->itemImage
   ];
   $this->view('users/sup/items/updateItems',$data);
 }
}

public function deleteItems($supplierItemId){
   if ($_SERVER['REQUEST_METHOD']== 'POST'){

    $item=$this->itemModel->getItemById($supplierItemId);
 
   /* if($item->email !=$_SESSION['user_email']){
      redirect('users/sup/items/items');
    }*/
     if($this->itemModel->deleteItems($supplierItemId)){
      redirect('items/items');
      //$this->view('users/sup/items/items');
     }
     else{
      die('Something went wrong');
     }
   }else{
    $this->view('users/sup/items/items');
   }
  
}
}
?>