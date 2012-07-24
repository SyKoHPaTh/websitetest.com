<?php

	require "model/user_model.php";


	if(isset($_POST['submit'])){
		//setup array to match table fields=>form values
		$form = array(
			"username" => filter_var($_POST['username'], FILTER_SANITIZE_STRING),
			"password" => filter_var($_POST['password'], FILTER_SANITIZE_STRING),
			"email_address" => filter_var($_POST['emailaddr'], FILTER_SANITIZE_EMAIL),
			"name" => filter_var($_POST['name'], FILTER_SANITIZE_STRING),
			"created" => time(),
			"modified" => time()
			);

		//validate our values
		$errors = "";
		if($form['password'] != $_POST['password_confirm']){
			$errors .= "Passwords do not match!<br>";
		}

		if($form['email_address'] != $_POST['emailaddr']){
			$errors .= "Email Address contains invalid characters!<br>";
		}

		//secure/encrypt the password
		$salt = "pepper";
		$form['password'] = md5($salt + $form['password']);


		if($errors == ""){
			//add user to the database
			add_user($websitetest_db, $form);

			//get all users from database
			$allUsers = get_all_users($websitetest_db);

			//show all users
			require "view/user_display.php";
		} else {
			//errors found, show form again
			require "view/user_form.php";
		}
	} else {
			//show the user registration form
		require "view/user_form.php";
	}

?>