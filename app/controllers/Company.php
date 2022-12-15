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

    #[\app\filters\address]
    public function Page($page_id){
        $page = new \app\models\Page();
        $page = $page->get($page_id);
        $_SESSION['cart'] = array([]);
        $_SESSION['storeCart'] = $page->page_id;
        $products = $page->getProducts($page_id);
        $this->view('Company/companyPage', ['page'=>$page,'product'=>$products]);
    }

    public function getPageName($page_id) {
        $page = new \app\models\Page();
        $page = $page->get($page_id);
        echo $page->company_name;
    }
}