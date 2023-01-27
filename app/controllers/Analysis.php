<?php 
 class Analysis extends Controller {
    public function __construct()
    {
        $this->analyseModel = $this->model('Analyse');
    }

    public function index (){
        redirect('welcome');
    }

    public function statis(){

        $data=[
        'Page_url' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://").$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],

        ];
    }



 }



?>