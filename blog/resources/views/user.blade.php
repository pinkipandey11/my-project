<!DOCTYPE html>
<html>

<head>
    <title>Users| Add</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>

<body>

    <form id="userForm" action="{{ route('create') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="col-md-4">
            <label>Name</label>
            <input type='text' name='name' class="form-control">
            <!-- @if ($errors->has('name'))
            <span class="invalid feedback" role="alert">
                <strong>{{ $errors->first('name') }}.</strong>
            </span>
            @endif -->
        </div>
        <div class="col-md-4">
            <label>Email</label>
            <input type="email" name='email' class="form-control">
            <!-- @if ($errors->has('email'))
            <span class="invalid feedback" role="alert">
                <strong>{{ $errors->first('email') }}.</strong>
            </span>
            @endif -->
        </div>
        <div class="col-md-4">
            <label>Password</label>
            <input type="password" name='password' class="form-control">
            <!-- @if ($errors->has('password'))
            <span class="invalid feedback" role="alert">
                <strong>{{ $errors->first('password') }}.</strong>
            </span>
            @endif -->
        </div>
        <input type='submit' value="Add Users" />

    </form>
</body>

<script>  
$(function() {
  $("#userForm").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      name: "Please enter your name",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>  

</html>