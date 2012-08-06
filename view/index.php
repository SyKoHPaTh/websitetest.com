<?php
	if(!isset($prefix)){ $prefix = ""; } //init
?><html>
<head>
	<title>User Management System</title>
</head>
<body>
	<?php if($_SESSION["logged_in"]=="YES"): ?>
		Welcome Back, <?php echo $_SESSION['name']; ?>!<br>
		<a href="<?php echo $prefix; ?>logout">Logout</a><br>
		<a href="<?php echo $prefix; ?>profile">Profile</a><br>
	<?php else: ?>
		<a href="<?php echo $prefix; ?>login">Login</a><br>
		<a href="<?php echo $prefix; ?>register">Register</a><br>
	<?php endif; ?>
</body>
</html>