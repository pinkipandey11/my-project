<!DOCTYPE html>
<html>
<head>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>
<body>

<form id="postForm" name="postForm" class="form-horizontal">
@csrf()
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" >
            <div class="alert-message" id="nameError"></div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-12">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" >
        <div class="alert-message" id="emailError"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="" >
        <div class="alert-message" id="passwordError"></div>
        </div>
    </div>

    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="savedata" value="ajaxcreate">Save
        </button>
    </div>
</form>
    
</body>

<script type="text/javascript">
    $(function() {
  $("#postForm").validate({
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
$(document).ready(function (e) {
$("#postForm").on('submit',(function(e) {
e.preventDefault();
var fdata = new FormData(this);
$.ajax({
  url: "{{ route('ajaxcreate') }}",
  type: "POST",
  data: fdata,
  contentType: false,
      cache: false,
  processData:false,
  success: function(response)
    {
        debugger;
        if(response.status){
            alert(response.success);
            window.location.href = "{{ route('list.user') }}";
        }
        else{   
            $('#nameError').text(response.error);
           //alert(response.error);  
           }
    } ,
    error: function(){
        console.log("err");
    }
 });
 }));
 });
</script>
 
 
</html>