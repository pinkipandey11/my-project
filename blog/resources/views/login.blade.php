<!DOCTYPE html>
<html>
<head>
<title>Users| Login</title>
</head>
<body>
    <h2>User Login</h2>
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "{{ csrf_token()}}">
	<table>
	<tr>
	<td>Email Address</td>
	<td><input type="text" name='email'/></td>
	</tr>
    <td>Password</td>
	<td><input type="text" name='password'/></td>
	</tr>
	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add Users"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>
