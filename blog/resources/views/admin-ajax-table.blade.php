<html>
   
   <head>
      <title>View Admins Records</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </head>
   
   <body>
   <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
   
      <h1>Admin Ajax Table</h1>
       <a href="{{ route('ajaxadd') }}">Add Admin</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td colspan="2">Action</td>
         </tr>
         @php ($i = 1)
         @foreach ($admins as $admin)
         
         <tr id="test_{{$admin->id}}">
            <td>{{$i++}}</td>
            <td>{{ $admin->firstName }}</td>
            <td>{{ $admin->lastName }}</td>
            <td><a href = "admin-address/{{$admin->id}}">Address</a></td>
            <td><a href="#" id="{{$admin->id}}" onclick="deleteAdmin(this.id)">Delete</a></td>
            
         </tr>
         @endforeach
      </table>
<script>
    function deleteAdmin(clicked_id){
      var idAdmin = clicked_id;
      const csrfToken = $('#token').val();
      
      $.ajax({
        type:"POST",
        url:"{{ route('deleteAdmin') }}",
        data:{
            idAjax: idAdmin,
            _token: csrfToken,
            
         },
         success: function (data) {
                    if(data=="done")
                    {
                        alert("Admin Deleted successfully");
                        $("#test_"+idAdmin).remove();
                        
                    }
                    
                },
                error: function (data) {
                
                }


      });

    }

</script>

   </body>
</html>