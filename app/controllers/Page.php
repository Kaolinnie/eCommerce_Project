<?php
namespace app\controllers;

class Page extends \app\core\Controller {
    public function getPage($page_id){}
    public function getAllPages() {
        $pages = new \app\models\Page();
        $pages = $pages->getAll();
        $this->view('Layout/PageBrief',$pages);
    }
}