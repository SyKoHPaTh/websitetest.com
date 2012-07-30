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
	<?php else: ?>
		<a href="<?php echo $prefix; ?>login">Login</a><br>
	<?php endif; ?>
	<a href="register">Register</a><br>
	<?php print_r($_SESSION); ?>
</body>
</html>