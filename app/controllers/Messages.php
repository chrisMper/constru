<?php
class Messages extends Controller{
    private $messageModel;
    public function __construct(){
        if(!isset($_SESSION['user_email'])){
          redirect('users/login');
        }

        $this->messageModel=$this->model('message');
      }

      //load all users
       public function index(){
        
      }
      public function messages(){
        //get users
        $users=$this->messageModel->getusers();
        $data = [
            'users'=>$users
        ];
         
        $this->view('messages/messages',$data);
      }

      public function chat(){
        $chats=$this->messageModel->getchats();
        $data = [
            'chats'=>$chats
        ];
        $this->view('messages/chat',$data);
      }

      // public function messages2(){
      //   //get users
      //   $users=$this->messageModel->getusers();
      //   $data = [
      //       'users'=>$users
      //   ];
         
      //   $this->view('messages/messages2',$data);
      // }

      // public function search(){
      //   //get users
      //   $users=$this->messageModel->getusers();
      //   $data = [
      //       'users'=>$users
      //   ];
         
      //   $this->view('message/search',$data);
      // }
    }
?>
