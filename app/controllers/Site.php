<?php
namespace app\controllers;

class Site extends \app\core\Controller {
    public function lang($url = '') {
        $lang = $_COOKIE['lang'];
        $url = $this->validate_input($url);
        $location = "location:/$url?lang=".($lang=='en'?'fr_ca':'en');
        header($location);
    }
}