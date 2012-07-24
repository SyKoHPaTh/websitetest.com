<html>
<head>
	<title>Users - Display all</title>
</head>
<body>
	<ul>
	<?php foreach($allUsers as $value): ?>
		<li><?php echo $value; ?></li>
	<?php endforeach; ?>
	</ul>
</body>
</html>