<html>
   
   <head>
      <title>Category | Edit</title>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   
   <body>
      <form id="updatecategory">
      @csrf()
      <input type="hidden" id="category_id" value="{{$id}}">
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' id="name" name = 'name' 
                     value = '{{$category->name}}'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <button type = 'submit' id="submitupdate">update</button>
               </td>
            </tr>
         </table>
      </form>
   </body>

<script type="text/javascript">
$(document).ready(function (e) {
$("#updatecategory").on('submit',(function(e) {
e.preventDefault();
var id = $('#category_id').val();
var url = "{{ route('updateAjax', ":id") }}";
url = url.replace(':id', id);
var fdata = new FormData(this);
console.log(fdata);
$.ajax({
  url: url,
  type: "POST",
  data: fdata,
  contentType: false,
      cache: false,
  processData:false,
  success: function(data)
    {
      alert("form updated successfully");
            $('#name').val('');
            window.location.href = "{{ route('list.category') }}";
    } ,
    error: function(){
        console.log("err");
    }
 });
 }));
 });
</script>

</html>