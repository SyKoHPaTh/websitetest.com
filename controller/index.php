<?php

	if($urlParts[2] == "" || $urlParts[3] == ""){
		//index.php was not supplied, so modify links to reflect that
		$prefix = "index.php/";
	}

	require "view/index.php";

?>