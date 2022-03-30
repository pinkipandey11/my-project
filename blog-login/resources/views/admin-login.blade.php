<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	<h3>Admin Login</h3>
<form action="{{ route('view') }}" method ="POST">
	  <input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="email" name="email" placeholder="Enter Your Email"><br><br>
	<input type="password" name="password" placeholder="Enter Your password"><br><br>
	<button type="submit">Login</button><br><br>
	<button><a href="">Forgot Password</a></button>
</form>
</body>
</html>