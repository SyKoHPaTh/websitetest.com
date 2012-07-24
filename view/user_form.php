<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
	<form name="user_registration" action="index.php" method="post">
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
					Password Confirm
				</td>
				<td>
					<input type="password" name="password_confirm">
				</td>
			</tr>
			<tr>
				<td>
					Email Address
				</td>
				<td>
					<input type="text" name="emailaddr">
				</td>
			</tr>
			<tr>
				<td>
					Full Name
				</td>
				<td>
					<input type="text" name="fullname">
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