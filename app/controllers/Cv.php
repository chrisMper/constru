<?php

use function PHPSTORM_META\elementType;

class Cv extends Controller
{

    private $cvModel;
    public function __construct()
    {
        if (!isset($_SESSION['user_email'])) {
            redirect('users/login');
        }

        $this->cvModel = $this->model('cvv');
    }

    // Load All Posts
    public function index()
    {

        // $this->controller();
    }


    public function addCvData()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'Name' => trim($_POST['Name']),
                'description' => trim($_POST['description']),
                'jobTitle' => $_POST['jobTitle'],
                'contactEmail' => trim($_POST['contactEmail']),
                'contactNumber' => trim($_POST['contactNumber']),
                'adress1' => trim($_POST['adress1']),
                'adress2' => trim($_POST['adress2']),
                'adress3' => trim($_POST['adress3']),
                'userEmail' => trim($_SESSION['user_email'])
            ];
            $file = [
                'file_name' => $_FILES['image']['name'],
                'file_type' => $_FILES['image']['type'],
                'file_size' => $_FILES['image']['size'],
                'temp_name' => $_FILES['image']['tmp_name'],
                'upload_to' => PUBROOT . '/public/img/uploads/profile/'

            ];

            $skill = $_POST['skill'];
            $presentages = $_POST['presentages'];
            $education = $_POST['education'];
            $StartE = $_POST['StartE'];
            $EndE = $_POST['EndE'];
            $experience = $_POST['experience'];
            $Start = $_POST['Start'];
            $End = $_POST['End'];
            if ($this->cvModel->checkUser($_SESSION['user_email'])) {
                
                $this->controller('Pages')->cv();
            } else {
                $cvId =  $this->cvModel->addCv($data, $file);
                $dataD = [
                    'cvId' => $cvId,
                    'userEmail' => $_SESSION['user_email'],
                ];


                if (!empty($cvId)) {

                    for ($i = 0; $i < count($skill); $i++) {

                        $this->cvModel->addCvSkills($skill[$i], $presentages[$i], $dataD);
                        $this->cvModel->addCvEducation($education[$i], $StartE[$i], $EndE[$i], $dataD);
                        $this->cvModel->addCvExperience($experience[$i], $Start[$i], $End[$i], $dataD);
                    }

                    $this->controller('Pages')->cv();
                } else {
                    die('Something went wrong');
                }
            }
        } else {
            redirect('login');
        }
    }
}
