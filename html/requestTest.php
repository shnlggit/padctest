<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>request test</title>
</head>
<body>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="Login" />
		<table>
			<tr>
				<td>login</td>
			</tr>
			<tr>
				<td>Access token</td>
				<td><input type="text" name="token1" value="ABC" /></td>
			</tr>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="userid" value="1" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
</body>
</html>