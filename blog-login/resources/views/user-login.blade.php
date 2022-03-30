<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user Login</title>
</head>
<body>
<h3>User Login</h3>
<form action="{{ route('login') }}" method ="POST">
	@csrf
	  
	<input type="email" name="email" placeholder="Enter Your Email"><br><br>
	<input type="password" name="password" placeholder="Enter Your password"><br><br>
	<button type="submit">Login</button><br><br>
	<button><a href="{{ route('forget-password') }}">Forgot Password</a></button>
</form>
</body>
</html>