<?php

	function get_all_users(){
	 	$sql = "SELECT * FROM users";
		$result = mysqli_query($websitetest_db, $sql);
		if(!$result){
			die('SQL Error: ' . mysqli_error($websitetest_db));
		}

		$userList = array();

		while($row = mysqli_fetch_assoc($result)){ 
			$userList[] = $row['name']; //store all names into the list
		}

		mysqli_free_result($result);

		return $userList;
	}

?>