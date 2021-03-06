<?php
	require "model/user_model.php";

	//Edit user profile
		if(isset($_POST['submit'])){
			//setup array to match table fields=>form values
			$form = array(
				"password" => filter_var($_POST['password'], FILTER_SANITIZE_STRING),
				"email_address" => filter_var($_POST['emailaddr'], FILTER_SANITIZE_EMAIL),
				"name" => filter_var($_POST['fullname'], FILTER_SANITIZE_STRING),
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
			$oldPassword = md5($salt + md5($_POST['oldpassword']));
			if(!check_password($websitetest_db, $_SESSION['username'], $oldPassword)){
				$errors .= "Old password is not correct!<br>";
			}
				//encrypt for storage
			$form['password'] = md5($salt + md5($form['password']));

			if($errors == ""){
				//update user in the database
				update_user($websitetest_db, $_SESSION['username'], $form);

				//show index page upon completion
				require "view/index.php";
			}
		}

		//reload user profile information
		$form = get_user($websitetest_db, $_SESSION['username']);
		require "view/user_profile.php";

?>