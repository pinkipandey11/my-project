<html>
   
   <head>  

      <title>View Images Records</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   
   <body>
   <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
      <h4>Images Upload Using Ajax Table</h4>
       <a href="{{ route('ajaximage') }}">Add Images</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Delete</td>
            
         </tr>
         @php($i=1)
         @foreach ($ajaximages as $ajaximage)
         <tr id="image_{{$ajaximage->id}}">
            <td>{{ $i++ }}</td>
            <td>{{ $ajaximage->image }}</td>
            <td><a href="#" id="{{$ajaximage->id}}" onclick="deleteImage(this.id)">Delete</a></td>
         </tr>

         @endforeach
      </table>
   </body>

   <script>
        function deleteImage(clicked_id)
        {
            var idDelete = clicked_id;

           const csrfToken = $("#token").val();
             $.ajax({
                type: "POST",
                url: "{{ route('delete-image') }}",
                data: {
                  idAjaxImage:idDelete,
                    _token:csrfToken,
                },
                success: function (data) {
                    if(data=="done")
                    {
                        alert("Deleted successfully");
                        $("#image_"+idDelete).remove();
                    }
                    
                },
                error: function (data) {
                
                }
            });
        }
   </script>




</html>