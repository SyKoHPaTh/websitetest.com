<html>
<head>
	<title>User Login Form</title>
</head>
<body>
	<form name="user_login" action="index.php/login" method="post">
		<table>
			<tr>
				<td>
					Username
				</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					Errors:
				</td>
				<td>
					<b style="color:red"><?php echo $errors; ?></b>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="submit" value="Submit Form">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>