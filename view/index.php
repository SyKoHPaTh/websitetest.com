<html>
<head>
	<title>User Management System</title>
</head>
<body>
	<?php if($_SESSION["logged_in"]=="YES"): ?>
		Welcome Back, <?php echo $_SESSION['name']; ?>!<br>
		<a href="logout">Logout</a><br>
	<?php else: ?>
		<a href="login">Login</a><br>
	<?php endif; ?>
	<a href="register">Register</a><br>
	<?php print_r($_SESSION); ?>
</body>
</html>