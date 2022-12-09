<?php
	DEFINE('BASE','/');
	session_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array([]);
	require("app/core/autoload.php");
