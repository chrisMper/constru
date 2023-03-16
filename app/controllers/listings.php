<?php
class listings extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_id'])){
          redirect('users/login');
        }

        $this->listingModel=$this->model('listings');
        $this->userModel=$this->model('supplier');

      }


    
    
        // Load All Posts
    public function index(){
        //Get Post
        $listings=$this->listingModel->getListings();
        $supplier=$this->userModel->getUserById($listings->user_id);

        $data = [
            'listings'=>$listings,
            'supplier'=>$supplier
        ];
        
        $this->view('listings/listings', $data);
      }



  public function addlistings(){
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
   
    $data = [
      'product' => trim($_POST['product']),
      'description'=>trim($_POST['description']),
      'price' => trim($_POST['price']),
      'time' => trim($_POST['time']),
      'availability' => trim($_POST['availability']),
      'quantity' => trim($_POST['quantity']),
      'stockamount' => trim($_POST['stockamount']),
      'product_img' =>trim($_POST['product_img']),
      'user_id'=>$_SESSION['user_id'],
      'id_err' => '',
      'product_err' => '',
      'description_err' => '',
      'price_err' => '',
      'time_err' => '',
      'availability_err' => '',
      'quantity_err' => '',
      'stockamount_err' => '',
      'product_img_err' => ''
    ];
  
    $file = [
      'file_name'=> $_FILES['product_img']['name'],
      'file_type'=> $_FILES['product_img']['type'],
      'file_size'=> $_FILES['product_img']['size'],
      'tmp_name' => $_FILES['product_img']['tmp_name'],
      'upload_to'=>'<?php echo URLROOT; ?>/img/product_img/'
    ];

    if(!empty($product) && !empty($description) && !empty($price) && !empty($time) && !empty($availability) && !empty($quantity) && is_numeric($quantity) && is_numeric($price))
		{
      if($this->listingModel->addlistings($data,$file)){
        redirect('listings');
      } else {
        die('Something went wrong');
      }
    }else{
      $this->view('listings/addlistings',$data);
    }
  }else{
     $data = [	  
		
    'id' => '',
		'product' => '',
    'description' => '',
    'price' => '',
    'time' => '',
    'availability' => '',
    'quantity' => '',
    'stockamount' => '',
    'product_img' => ''
    ];
    $this->view('listings/addlistings',$data);
  }
}

 
public function updatelistings($id){
   
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
   $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
  
   $data = [
     'id' => $id,
     'product' => trim($_POST['product']),
     'description'=>trim($_POST['description']),
     'price' => trim($_POST['price']),
     'time' => trim($_POST['time']),
     'availability' => trim($_POST['availability']),
     'quantity' => trim($_POST['quantity']),
     'stockamount' => trim($_POST['stockamount']),
     'product_img' =>trim($_POST['product_img']),
     'user_id'=>$_SESSION['user_id'],
     'id_err' => '',
     'product_err' => '',
     'description_err' => '',
     'price_err' => '',
     'time_err' => '',
     'availability_err' => '',
     'quantity_err' => '',
     'stockamount_err' => '',
     'product_img_err' => ''
   ];
 
   $file = [
     'file_name'=> $_FILES['product_img']['name'],
     'file_type'=> $_FILES['product_img']['type'],
     'file_size'=> $_FILES['product_img']['size'],
     'tmp_name' => $_FILES['product_img']['tmp_name'],
     'upload_to'=>'<?php echo URLROOT; ?>/img/product_img/'
   ];

   if(!empty($product) && !empty($description) && !empty($price) && !empty($time) && !empty($availability) && !empty($quantity) && is_numeric($quantity) && is_numeric($price))
   {
     if($this->listingModel->updatelistings($data,$file)){
       redirect('listings');
     } else {
       die('Something went wrong');
     }
   }else{
     $this->view('listings/updatelistings',$data);
   }
 }else{

    $listings=$this->listingModel->getListingById($id);
 
    if($listings->user_id !=$_SESSION['user_id']){
      redirect('listings');
    }
    $data = [	  
   
   'id' => $id,
   'product' => $listings->product,
   'description' => $listings->description,
   'price' => $listings->price,
   'time' =>$listings->time,
   'availability' => $listings->availability,
   'quantity' => $listings->quantity,
   'stockamount' =>$listings->stockamount,
   'product_img' => $listings->product_img
   ];
   $this->view('listings/updatelistings',$data);
 }
}

public function deletelistings($id){
   if ($_SERVER['REQUEST_METHOD']== 'POST'){

    $listings=$this->listingModel->getListingById($id);
 
    if($listings->user_id !=$_SESSION['user_id']){
      redirect('listings');
    }
     if($this->listingModel->deletelistings($id)){
      redirect('listings');
     }
     else{
      die('Something went wrong');
     }
   }else{
    redirect('listings');
   }
  
}
}
?>