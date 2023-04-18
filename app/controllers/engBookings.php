<?php 
 class engBookings extends Controller {

  private $engBookingModel;
  private $engController;
  private $engProjectModel;
  
    public function __construct()
    {
        $this->engBookingModel = $this->model('engBooking');
        $this->engProjectModel = $this->model('engProject');
        

        
    }

    public function index (){
        redirect('welcome');
    }
    
    public function engBookingPending(){
      // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
        $data = [
          'engineerEmail' => trim($_POST['engineerEmail']),
          'customerEmail' => trim($_POST['customerEmail']),
          'postId' => trim($_POST['postId']),
        ];
  
        // Validate email
        if (($data['engineerEmail'])==($data['customerEmail'])) {
          die('cant place order');
        } else {
            if ($this->engProjectModel->engProjectPending($data)) {
                if($this->engBookingModel->engBookingPending($data)){
                $this->controller('pages')->search();
            }

              }
  
          
          
        }
    }
 }
}
 ?>