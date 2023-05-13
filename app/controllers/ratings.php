<?php
class ratings extends Controller{
    private $ratingModel;
        public function __construct(){
            if(!isset($_SESSION['user_email'])){
              redirect('users/login');
            }
            $this->ratingModel=$this->model('rating');
          }
          

        public function ratecompany(){
            
          $starRatings=$this->ratingModel->getStarRatings();
          $friendliness=$this->ratingModel->getFriendlines();
          $punctuality=$this->ratingModel->getPuctuality();
          $ordersCompleted=$this->ratingModel->getOrdersCompleted();
          $activeDays=$this->ratingModel->getActiveDays();
          $cancellations=$this->ratingModel->getCancellations();
  
          if ($starRatings > 4.7 || $friendliness > 4.7 || $cancellations < 3 || $punctuality > 4.7 ) {
                //highest award level
                  
                      if ($ordersCompleted > 100 && $activeDays > 180) {
                        $awardLevel = '03';
                      } elseif  ($ordersCompleted > 50  && $activeDays > 120){    
                //award level 2      
                        $awardLevel = '02';
                      } elseif ($ordersCompleted > 10  && $activeDays > 60) {
                        $awardLevel = '01';
                      }

                //lowest award level
                        else {
                          $awardLevel = '0';
                      }
                     
            }
            $data = [
                'awardLevel'=> $awardLevel 
            ];
    
            $this->view('compListings/listings', $data);
        } 

        //pending orders are considered in the supplier rating funtion
        public function ratesupplier(){
            
            $starRatings=$this->ratingModel->getStarRatings();
            $friendliness=$this->ratingModel->getFriendlines();
            $pendingOrders=$this->ratingModel->getPendingOrders();
            $punctuality=$this->ratingModel->getPuctuality();
            $ordersCompleted=$this->ratingModel->getOrdersCompleted();
            $activeDays=$this->ratingModel->getActiveDays();
            $cancellations=$this->ratingModel->getCancellations();
    
            if ($starRatings > 4.7 || $friendliness > 4.7 || $cancellations < 3 || $punctuality > 4.7 ) {
                  //highest award level
                    
                        if ($ordersCompleted > 100 && $pendingOrders < 3 && $activeDays > 180) {
                          $awardLevel = '03';
                        } elseif  ($ordersCompleted > 50 && $pendingOrders < 5 && $activeDays > 120){    
                  //award level 2      
                          $awardLevel = '02';
                        } elseif ($ordersCompleted > 10 && $pendingOrders < 7 && $activeDays > 60) {
                          $awardLevel = '01';
                        }
  
                  //lowest award level
                          else {
                            $awardLevel = '0';
                        }
                        return $awardLevel;
                       
              }
          } 
    }
?>