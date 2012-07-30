<?php

	//check if logged in!
	if($_SESSION['logged_in'] == "YES"){
		unset($_SESSION);
	}

	require "view/index.php";
?>