<!DOCTYPE html>
<html>
<head>
<title>Category| Add</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<form id="categoryform">
	<input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
	<table>
	<tr>
	<td>Category Name</td>
	<td><input type='text' id="name" name='name' /></td>
	<tr>
	<td colspan = '2'>
	<input type = 'submit' id="updatebtn" value = "Add category"/>
    <!-- <button type="button"></button> -->
	</td>
	</tr>
	</table>
</form>

<script type="text/javascript">
$("#updatebtn").on('click',(function(e) {
e.preventDefault();
var fdata = new FormData($(categoryform).get(0)); 
// console.log(fdata);
$.ajax({
    url: "{{ route('createcategory') }}",
    type: "POST",
    data: fdata,
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
        window.location.href = "{{ route('list.category') }}";
    } ,
    error: function(){
        console.log("err");
    }
 });
 }));
 </script>


</body>
</html>
