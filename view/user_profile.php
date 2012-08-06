<html>
<head>
	<title>User Edit Profile</title>
</head>
<body>
	<form name="user_profile" action="profile" method="post">
		<table>
			<tr>
				<td>
					Username
				</td>
				<td>
					<?php echo $form['username']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Old Password
				</td>
				<td>
					<input type="password" name="oldpassword">
				</td>
			</tr>
			<tr>
				<td>
					New Password
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					New Password Confirm
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
					<input type="text" name="emailaddr" value="<?php echo $form['email_address']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Full Name
				</td>
				<td>
					<input type="text" name="fullname" value="<?php echo $form['name']; ?>">
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
					<input type="submit" name="submit" value="Update Information">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>