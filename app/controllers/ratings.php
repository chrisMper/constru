<?php
class ratings extends Controller{
        public function __construct(){
            if(!isset($_SESSION['user_email'])){
              redirect('users/login');
            }
            $this->ratingModel=$this->model('rating');
          }

        public function rate(){

          $rating=$this->ratingModel->getratings();

          if ($starRatings > 4.7 || $userDeliveryResponse > 90 || $pendingOrders < 5 || $responseTime > 90 || $onTimeDelivery > 90) {
              switch (true) {
                  case $ordersCompleted > 100:
                      if ($earnings > 200000 && $activeDays > 180) {
                          $awardLevel = '03';
                      } else {
                          $awardLevel = '0';
                      }
                      break;
                  case $ordersCompleted > 50 && $ordersCompleted <100 :
                      if ($earnings > 20000 && $activeDays > 120) {
                          $awardLevel = '02';
                      } else {
                          $awardLevel = '0';
                      }
                      break;
                  case $ordersCompleted > 10 && $ordersCompleted < 50:
                      if ($earnings > 400 && $activeDays > 60) {
                          $awardLevel = '01';
                      } else {
                          $awardLevel = '0';
                      }
                      break;
                  default:
                  $awardLevel = '0';
                }
            } else {
                $awardLevel = '0';
            }   
        }
    } 
?>