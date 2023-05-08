<?php
class sup_profile extends Controller{
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->profileModel=$this->model('sup_profileModel');
        $this->userModel=$this->model('User');

    }
  
    
        // Load profile
    public function sup_profile(){
        //Get profile
        
        $profile=$this->profileModel->getProfile();
    
        $data = [
            'profile'=>$profile,
        ];
        
        $this->view('users/sup/sup_profile/profile', $data);
    }

    public function updateProfile(){
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
         $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
         $data = [
           'fName' => trim($_POST['fName']),
           'lName'=>trim($_POST['lName']),
           'adLine1' => trim($_POST['adLine1']),
           'adLine2' => trim($_POST['adLine2']),
           'city' => trim($_POST['city']),
           'district' => trim($_POST['district']),
           'role' =>trim($_POST['role']),
           'telephoneNo' =>trim($_POST['telephoneNo']),
           'country' =>trim($_POST['country']),
           'email'=>trim($_POST['email']),
           'user_email' =>$_SESSION['user_email'],
           'email_err' =>'',
            'tele_err' =>''
         ];
      
         $file = [
           'file_name'=> $_FILES['uploads']['name'],
           'file_type'=> $_FILES['uploads']['type'],
           'file_size'=> $_FILES['uploads']['size'],
           'tmp_name' => $_FILES['uploads']['tmp_name'],
           'upload_to'=>PUBROOT. '/public/img/uploads/'
         ];
      
         if(!empty($data['fName']) && !empty($data['lName']) && !empty($data['adLine1']) && !empty($data['adLine2']) && !empty($data['city']) && !empty($data['district']) && !empty($data['role']) && !empty($data['telephoneNo']) && !empty($data['country']) && !empty($data['email']) && !empty($file['file_name']))
         {
           if($this->profileModel->updateUser($data)){
            if($this->profileModel->updateServiceProvider($data)){
              if($this->profileModel->updateSupplier($data,$file)){
                 redirect('sup_profile/sup_profile');
              }
            }
           } else {
             die('Something went wrong');
           }
         }else{
           $this->view('users/sup/sup_profile/updateProfile',$data);
         }
       }else{
      
         $profile=$this->profileModel->getProfile();
          foreach($profile as $profiles){
           if($profiles -> email ==$_SESSION['user_email']){
           $data = [	  
         
            'user_email'=>$_SESSION['user_email'],
            'email' => $profiles->email,
            'fName' => $profiles->fName,
            'lName' => $profiles->lName,
            'adLine1' => $profiles->adLine1,
            'adLine2' => $profiles->adLine2,
            'city' => $profiles->city,
            'district' =>$profiles->district,
            'role' =>$profiles->role,
            'telephoneNo' =>$profiles->telephoneNo,
            'country' => $profiles->country,
            'uploads' => $profiles->uploads,
            'email_err' =>'',
            'tele_err' =>''
          ];
         $this->view('users/sup/sup_profile/updateProfile',$data);
        }

      }
       }
      }
      
}
?>