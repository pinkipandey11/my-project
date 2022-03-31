<html>
   
   <head>  

      <title>View Category Records</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   
   <body>
   @if ($message = Session::get('success'))
       <strong style="color:green;">{{ $message }}</strong>
   @endif
   <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
      <h1>Category Ajax Table</h1>
       <a href="{{ route('categoryajax') }}">Add Category</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            
            <td colspan="2">Action</td>
         </tr>
         @php($i=1)
         @foreach ($categories as $category)
         <tr id="table_{{$category->id}}">
            <td>{{ $i++ }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="/category-ajax-edit/{{$category->id}}" id="show">Edit</a>|
            <a href="#" id="{{$category->id}}" onclick="deleteData(this.id)">Delete</a>
             </td>
         </tr>

         @endforeach
      </table>
   </body>

   <script>
        function deleteData(clicked_id)
        {
            var idForCategory = clicked_id;

           const csrfToken = $("#token").val();
             $.ajax({
                type: "POST",
                url: "{{ route('deleteCategory') }}",
                data: {
                    idFormcategory:idForCategory,
                    _token:csrfToken,
                },
                success: function (data) {
                    if(data=="done")
                    {
                        alert("Deleted successfully");
                        $("#table_"+idForCategory).remove();
                    }
                    
                },
                error: function (data) {
                
                }
            });
        }
   </script>




</html>