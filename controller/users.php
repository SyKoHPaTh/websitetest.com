<?php
	$sql = "SELECT * FROM users";
	$result = mysqli_query($websitetest_db, $sql);
	if(!$result){
		die('SQL Error: ' . mysqli_error($result));
	}

	while($row = mysqli_fetch_assoc($result)){ 
		echo $row['name']; //list all names
	}

	mysqli_free_result($result);
?>