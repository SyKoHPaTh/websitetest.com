<?php
	require "model/user_model.php";


	//login user
		if(isset($_POST['submit'])){
			//setup array to match table fields=>form values
			$form = array(
				"username" => filter_var($_POST['username'], FILTER_SANITIZE_STRING),
				"password" => filter_var($_POST['password'], FILTER_SANITIZE_STRING)
				);

			//secure/encrypt the password
			$salt = "pepper";
			$form['password'] = md5($salt + md5($form['password']));


			//check if user and password matches
			if(validate_user($websitetest_db, $form)){
				//if so, cram that user into session

			} else {
				//user not found, or incorrect password!
			}

			require "view/user_login.php";
		}

?>