<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $this->view('Main/index');
    }
    public function address() {
        $this->view('Main/address');
    }
    public function faq() {
        $this->view('Main/Faq');
    }
    public function redirectMcdonald(){
        $this->view('Company/CompanyPages/mcdonalds.php');
    }
}