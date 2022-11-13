<?php
namespace app\controllers;

class Company extends \app\core\Controller {
    public function index() {
        if(isset($_POST['action'])) {
            $company_name = $_POST['company_name_input'];
            $company_email = $_POST['company_email_input'];
            $company_address = $_POST['company_address_input'];

            $company = new \app\models\Company();
            $company->company_name = $company_name;
            $company->company_email = $company_email;
            $company->company_address = $company_address;
            $company->insert();
            $this->view('Main/index');
        } else {
            $this->view('Company/index');

        } 
    }
}