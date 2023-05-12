<?php
class RegistrationController {
    private $model;
    private $view;
    
    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }
    
    public function processForm() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $step = $_POST['step'];
            switch ($step) {
                case '1':
                    $companyName = $_POST['companyName'];
                    $telephone = $_POST['telephone'];
                    $email = $_POST['email'];
                    $this->model->setCompanyDetails($companyName, $telephone, $email);
                    break;
                case '2':
                    $address1 = $_POST['address1'];
                    $address2 = $_POST['address2'];
                    $postalCode = $_POST['postalCode'];
                    $city = $_POST['city'];
                    $country = $_POST['country'];
                    $this->model->setAddressDetails($address1, $address2, $postalCode, $city, $country);
                    break;
                case '3':
                    $ictadNumber = $_POST['ictadNumber'];
                    $companyGrade = $_POST['companyGrade'];
                    $uploadedFile = $_FILES['registrationDoc'];
                    $this->model->setCompanyIDDetails($ictadNumber, $companyGrade, $uploadedFile);
                    break;
                case '4':
                    $password = $_POST['password'];
                    $confirmPassword = $_POST['confirmPassword'];
                    $otp = $_POST['otp'];
                    $success = $this->model->setPasswordAndOTP($password, $confirmPassword, $otp);
                    if ($success) {
                        // password and OTP have been set successfully, redirect to a thank you page
                        header('Location: thankyou.php');
                    } else {
                        // there was an error setting the password or OTP, display an error message
                        $this->view->displayErrorMessage('There was an error processing your request. Please try again.');
                    }
                    break;
            }
        }
    }
}

class RegistrationModel {
    private $companyName;
    private $telephone;
    private $email;
    private $address1;
    private $address2;
    private $postalCode;
    private $city;
    private $country;
    private $ictadNumber;
    private $companyGrade;
    private $registrationDoc;
    private $password;
    private $otp;
    
    public function setCompanyDetails($companyName, $telephone, $email) {
        $this->companyName = $companyName;
        $this->telephone = $telephone;
        $this->email = $email;
    }
    
    public function setAddressDetails($address1, $address2, $postalCode, $city, $country) {
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
    }
    
    public function setCompanyIDDetails($ictadNumber, $companyGrade, $uploadedFile) {
        $this->ictadNumber = $ictadNumber;
        $this->companyGrade = $companyGrade;
        $this->registrationDoc = $uploadedFile;
    }
    
    public function setPasswordAndOTP($password, $confirmPassword, $otp) {
        if ($password != $confirmPassword) {
            return false;
        }
    }

    public function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'otp' => trim($_POST['otp']),
                'error' => '',
                'status' => ''
            ];

            $verified = $this->verificationModel->verifyOTP($data['otp']);

            if (is_numeric($data['otp']) && $verified) {
                if ($this->verificationModel->verify($verified->id)) {
                    // set verification successful flash message
                    // setFlash("verify","Your account has been verified",Flash::FLASH_SUCCESS);
                    // redirect to the login of patient
                    redirect('users/login');
                } else {
                    // set verification failed flash message
                    // setFlash("verify","Account verification failed!",Flash::FLASH_DANGER);
                    // redirect to the signup of patient
                    redirect('users/register');
                }
            } else {
                $data['error'] = "Invalid OTP";
            }
        } else {
            $data = [
                'otp' => '',
                'error' => '',
                'status' => ''
            ];
        }
        $this->view('users/signupVerification', $data);
    }

}
        // check if OTP is valid (e.g. match with a previous sent
