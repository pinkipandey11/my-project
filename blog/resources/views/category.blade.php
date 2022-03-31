<!DOCTYPE html>
<html>
<head>
<title>Category| Add</title>
</head>
<body>
@if (count($errors) > 0)

<ul>
	@foreach ($errors->all() as $error)
			<li style="color:red;">{{ $error }}</li>
	@endforeach
</ul>
        
@endif
<form action = "{{ route('update') }}" method = "post">
	<input type = "hidden" name = "_token" value = "{{ csrf_token()}}">
	<table>
	<tr>
	<td>Category Name</td>
	<td><input type='text' name='name' /></td>
	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add category"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>
