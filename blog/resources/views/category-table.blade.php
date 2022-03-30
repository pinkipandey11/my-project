<html>
   
   <head>
      <title>View category Records</title>
   </head>
   
   <body>
   @if ($message = Session::get('success'))
       <strong style="color:green;">{{ $message }}</strong>
   @endif
      <h1>Category Table</h1>
       <a href="{{route('test')}}">Add Category</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
           
            <td colspan="2">Action</td>
         </tr>
         @php($i=1)
         @foreach ($categories as $category)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $category->name }}</td>
            
            <td><a href = "editcategory/{{$category->id}}">Update</a>|<a href = "deletecategory/{{ $category->id }}">Delete</a></td>
            
         </tr>
         @endforeach
      </table>
   </body>
</html>