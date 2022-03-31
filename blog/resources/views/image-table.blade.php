<html>
   
   <head>
   
      <title>View Images Records</title>
   </head>
   
   <body>
   @if ($message = Session::get('success'))
   <strong style="color:green;">{{ $message }}</strong> 
   @endif

      <h1>Images Table</h1>
       <a href="{{ route('image-upload') }}">Add Images</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Delete</td>
   
         </tr>
         @php($i=1)
         @foreach ($images as $image)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $image->image }}</td>
            <td><a href = "delete-image/{{ $image->id }}">Delete</a></td>
           
            
         </tr>
         @endforeach
      </table>
   </body>
</html>