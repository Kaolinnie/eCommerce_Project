<?php
namespace app\controllers;

class Company extends \app\core\Controller {
    public function index() {
        $this->view('Company/index');
    }
}