<html>
   
   <head>
      <title>Users | Edit</title>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   
   <body>
      <form id="updateform">
      @csrf()
      <input type="hidden" id="post_id" value="{{$id}}">
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' id="name" name = 'name' 
                     value = '{{$post->name}}'/>
               </td>
               <td>Email</td>
               <td>
                  <input type = 'email' id="email" name = 'email' 
                     value = '{{$post->email}}'/>
               </td>
               <td>
                  <input type = 'text' id="password" name = 'password' 
                     value = '{{$post->password}}'/>
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
$("#updateform").on('submit',(function(e) {
e.preventDefault();
var fdata = new FormData(this);
var id = $('#post_id').val();
var url = "{{ route('editAjax', ":id") }}";
url = url.replace(':id', id);
$.ajax({
  url: url,
  type: "POST",
  data: fdata,
  contentType: false,
      cache: false,
  processData:false,
  success: function(data)
    {
        alert(data.success);
        window.location.href = "{{ route('list.user') }}";
    } ,
    error: function(){
        console.log("err");
    }
 });
 }));
 });
</script>
 
</html>