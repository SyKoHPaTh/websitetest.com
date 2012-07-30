<?php

	if($urlParts[2] == ""){
		//index.php was not supplied, so modify links to reflect that
		$prefix = "index.php/";
	}

	require "view/index.php";

?>