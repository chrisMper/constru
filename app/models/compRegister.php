<?php
class Registration_model {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addRegistration($data) {
        $this->db->query('INSERT INTO registrations (company_name, telephone, email, address_1, address_2, postal_code, city, country, ictad_number, company_grade, registration_doc, password) VALUES(:company_name, :telephone, :email, :address_1, :address_2, :postal_code, :city, :country, :ictad_number, :company_grade, :registration_doc, :password)');

        // Bind values
        $this->db->bind(':company_name', $data['company_name']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address_1', $data['address_1']);
        $this->db->bind(':address_2', $data['address_2']);
        $this->db->bind(':postal_code', $data['postal_code']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':ictad_number', $data['ictad_number']);
        $this->db->bind(':company_grade', $data['company_grade']);
        $this->db->bind(':registration_doc', $data['registration_doc']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
