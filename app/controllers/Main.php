<?php
namespace app\controllers;

class Main extends \app\core\Controller {
    public function index() {
        $pages = new \app\models\Page();
        $pages = $pages->getAll();
        $this->view('Main/index', $pages);     
    }
    public function address() {
        $this->view('Main/address');
    }
    public function faq() {
        $this->view('Main/Faq');
    }
    
}