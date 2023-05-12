<?php

class sp_list extends Controller {
    public function __construct() {
      // if(!isset($_SESSION['user_email'])){
      //   redirect('users/login');
      // }
      $this->spModel = $this->model('spModel');
    }


    public function deleteEng($email) {
      if($this->spModel->deleteEng($email)) {
        redirect('serviceproviders/engs');
      } else {
        die('Something went wrong.');
      }
    } 


    public function deleteSup($email) {
      if($this->spModel->deleteSup($email)) {
        redirect('serviceproviders/sups');
      } else {
        die('Something went wrong.');
      }
    } 

    public function deleteComp($email) {
      if($this->spModel->deleteComp($email)) {
        redirect('serviceproviders/comps');
      } else {
        die('Something went wrong.');
      }
    } 

 
    
  }
  ?>