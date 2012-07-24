<?php

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

	function add_user($dataArray){
		$insert_fields = "";
		$insert_values = "";
		foreach($dataArray as $fields=>$values){
			$insert_fields .= $fields;
			$insert_values .= $values;
			if($fields != end($dataArray)){
				$insert_fields .= ", ";
				$insert_values .= ", ";
			}
		}
		$sql = "INSERT INTO users (" . $insert_fields . ") VALUES (" . $insert_values . ")";

		echo $sql, "<br>", $fields, "<br>", $values, "<br>";
	}

?>