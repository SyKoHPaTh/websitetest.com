<?php

	function validate_user($db_conn, $dataArray){
		$sql = "SELECT * FROM users WHERE username='" . $dataArray['username'] . "'";
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}

		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			if($row['password']==$dataArray['password']){
				return $row; //pass user account back
			} else {
				print_r($row);
				echo "<br>";
				print_r($dataArray);

				return "Incorrect Password";
			}
		} else {
			return "Username not found";
		}
	}

	function get_all_users($db_conn){
	 	$sql = "SELECT * FROM users";
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}

		$userList = array();

		while($row = mysqli_fetch_assoc($result)){ 
			$userList[] = $row['name']; //store all names into the list
		}

		mysqli_free_result($result);

		return $userList;
	}

	function add_user($db_conn, $dataArray){
		$insert_fields = implode(",", array_keys($dataArray));
		$insert_values = "'" . implode("', '", $dataArray) . "'";
		$sql = "INSERT INTO users (" . $insert_fields . ") VALUES (" . $insert_values . ")";
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}
	}

	function update_user($db_conn, $dataArray){
		$fields = "";
		$lastKey = key(array_slice($dataArray, -1, 1, TRUE)); //get last key of array
		foreach($dataArray as $key=>$value){
			$fields .= " $key='$value'";
				//append a comma for proper SQL statement
			if($key != $lastKey){
				$fields .= ",";
			}
		}
		$sql = "UPDATE users SET " . $fields;
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}
	}

	function get_user($db_conn, $username){
		$username = filter_var($username, FILTER_SANITIZE_STRING);

	 	$sql = "SELECT * FROM users WHERE username = '" . $username . "'";
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}

		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
		} else {
			return FALSE;
		}

		return $row;
	}

	function check_password($username, $password){
		//returns TRUE if password matches, otherwise FALSE
		$sql = "SELECT * FROM users WHERE username='" . $username . "'";
		$result = mysqli_query($db_conn, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($db_conn));
		}
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			if($row['password']==$password){
				return TRUE;
			} else {
				return FALSE;
			}
		}
		return FALSE; //no rows found?
	}

?>