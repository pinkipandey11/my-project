<!DOCTYPE html>
<html>
<head>
    <title>Image Upload using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
<h4> Image Upload Using Ajax</h4>

    <form id="imageform" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><strong>Image : </strong></label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-success" name="submit" value="Save">
        </div>
    </form>                     
</body>
<script type="text/javascript">
$(document).ready(function (e) {
$("#imageform").on('submit',(function(e) {
e.preventDefault();
var fdata = new FormData(this);
debugger;
$.ajax({
  url: "{{ route('ajaximage') }}",
  type: "POST",
  data: fdata,
  contentType: false,
      cache: false,
  processData:false,
  success: function(response){
    if(response.status){
        alert(response.success);
        window.location.href = "{{ route('list.images') }}";
    }
    else{
        alert(response.error);  
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