<?php
	//require "db_connect.php"; //load config from /includes if pathed in php.ini
		//OR
	require "../../includes/db_connect.php"; //<yoursite.com>/websitetest.com/index.php
		//OR
	//require __DIR__ . "/includes/db_connect.php";

	require "controller/users.php"; //pass to controller
?>