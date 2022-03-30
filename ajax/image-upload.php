<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="ajax.js"></script>
</head>
<body>
<form id="form" enctype="multipart/form-data">
<label>Image:</label>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="upload" name="btnimage">
</form>
<div id="message"></div>

</body>
</html>

<script type="text/javascript">
$(document).ready(function (e) {

$("#form").on('submit',(function(e) {
e.preventDefault();

var fdata = new FormData(this);
console.log(fdata);
$.ajax({
  url: "ajax-upload-process.php",   
  type: "POST",             
  data: fdata,   
  contentType: false,          
      cache: false,         
  processData:false,        
  success: function(data)     
    {
      $("#message").html(data);     
    } ,
    error: function(){
        console.log("err");
    }        
 });
 }));
 });
 </script>