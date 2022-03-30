<!DOCTYPE html>
<html>

<head>
    <title>Users| Add</title>

</head>

<body>
<h3>User Registration form</h3>
    <form action="{{ route('insertdata') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="col-md-4">
            <label>Name</label>
            <input type='text' name='name' class="form-control">
    
        </div>
        <div class="col-md-4">
            <label>Email</label>
            <input type="email" name='email' class="form-control">
          
        </div>
        <div class="col-md-4">
            <label>Password</label>
            <input type="password" name='password' class="form-control">
            
        </div>
        <input type='submit' value="Add Users" />

    </form>
</body>


</html>