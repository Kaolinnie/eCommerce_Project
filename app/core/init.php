<?php
	DEFINE('BASE','/');
	session_start();
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
        setcookie("lang",$lang, 0, '/');
    }else {
        if(!isset($_COOKIE['lang'])) {
            setcookie("lang",'en', 0, '/');
        }
        $lang = $_COOKIE["lang"] ?? 'en';
    }
    $rootlang = preg_split('/_/', $lang);
    $rootlang = (is_array($rootlang)?$rootlang[0]:$rootlang);
    setlocale(LC_ALL, $rootlang.".UTF8");
    bindtextdomain($lang, "locale");
    textdomain($lang);
    require("app/core/autoload.php");
