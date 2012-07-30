<?php
	//require "db_connect.php"; //load config from /includes if pathed in php.ini
		//OR
	require "../../includes/db_connect.php"; //<yoursite.com>/websitetest.com/index.php
		//OR
	//require __DIR__ . "/includes/db_connect.php";

	$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$urlParse = parse_url($url);

	print_r($urlParse);

	$urlParts = explode('/', $urlParse);

	print_r($urlParts);

	//require "controller/index.php"; //pass to controller
?>