<html>
   
   <head>  

      <title>View Users Records</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   
   <body>
   <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
      <h1>Users Table</h1>
       <a href="{{ route('ajaxposts') }}">Add Users</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            
            <td colspan="2">Action</td>
         </tr>
         @php($i=1)
         @foreach ($posts as $post)
         <tr id="table_{{$post->id}}">
            <td>{{ $i++ }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->email }}</td>
            <td><a href="/edit-ajax/{{$post->id}}" id="show">Edit</a>
             |<a href="#" id="{{$post->id}}" onclick="deleteData(this.id)">Delete</a></td>
         </tr>

         @endforeach
      </table>
   </body>

   <script>
        function deleteData(clicked_id)
        {
            var idForDelete = clicked_id;

           const csrfToken = $("#token").val();
             $.ajax({
                type: "POST",
                url: "{{ route('delete') }}",
                data: {
                    idFromAjax:idForDelete,
                    _token:csrfToken,
                },
                success: function (data) {
                    if(data=="done")
                    {
                        alert("Deleted successfully");
                        $("#table_"+idForDelete).remove();
                    }
                    
                },
                error: function (data) {
                
                }
            });
        }
   </script>




</html>