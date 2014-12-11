<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>request test</title>
</head>
<body>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="login" />
		<table>
			<tr>
				<td>login</td>
			</tr>
			<tr>
				<td>Access token</td>
				<td><input type="text" name="token" value="ABC" /></td>
			</tr>
			<tr>
				<td>User ID</td>
				<td><input type="text" name="openid" value="1" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
	<hr>
	<form action="processRequest.php" method="post">
		<input type="hidden" name="requestClass" value="memcachetest" />
		<table>
			<tr>
				<td>memcache test</td>
			</tr>
			<tr>
				<td><input type="submit" value="send" /></td>
			</tr>
		</table>
	</form>
</body>
</html>