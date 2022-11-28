<?php
namespace app\controllers;

class Company extends \app\core\Controller {
    public function index() {
        if(isset($_POST['action'])) {

            $company_owner = $_POST['company_owner_name_input'];
            $company_name = $_POST['company_name_input'];
            $company_email = $_POST['company_email_input'];
            $company_address = $_POST['company_address_input'];
            $company_suite = $_POST['company_suite_input'];
            $company_postalCode = $_POST['company_postal_code_input'];

            $company = new \app\models\Company();
            $company->company_owner = $company_owner;
            $company->company_name = $company_name;
            $company->company_email = $company_email;
            $company->company_address = $company_address;
            $company->company_suite = $company_suite;
            $company->company_postalCode = $company_postalCode;
            
            $company->insert();
            $this->view('Main/index');
        } else {
            $this->view('Company/index');

        } 
    }

    public function redirectMcdonald(){
        $this->view('Company/CompanyPages/mcdonalds');
    }
}