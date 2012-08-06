<?php
	session_start();

	require "../../includes/db_connect.php"; //modify to your needs

	$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$urlParse = parse_url($url);

	$urlParts = explode('/', $urlParse['path']);

	if(isset($urlParts[3])){
		//check if file exists
		$controller = "controller/" . $urlParts[3] . ".php";
		if(!file_exists($controller)){
			die("Controller not found: " . $controller);
		}
	} else {
		$controller = "controller/index.php";
	}

	require $controller; //pass to controller
?>