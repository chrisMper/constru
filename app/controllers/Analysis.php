<?php 
 class Analysis extends Controller {
    public function __construct()
    {
        $this->analyseModel = $this->model('Analyse');
    }

    public function index (){
        redirect('welcome');
    }

    

    public function statis($Listingid){

        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
           } 
           else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           } 
           else {
            $ip = $_SERVER['REMOTE_ADDR'];
           }

           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
           curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type: application/json'));
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
           curl_setopt($ch, CURLOPT_HEADER, FALSE);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
           $result = curl_exec($ch);
           curl_close($ch);
           $country = json_decode($result)->geoplugin_countryName;
           
           

        $data=[
        'Page_url' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://").$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
        'timenow' => date("Y-m-d H:i:s"),
        'ip'=>trim($ip),
        'country'=>trim($country),
        'Listingid'=>trim($Listingid)
        ];

        $this->analyseModel->statis($data);
        

        
    }



 }



?>