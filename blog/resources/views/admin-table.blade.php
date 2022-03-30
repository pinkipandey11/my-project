<html>
   
   <head>
      <title>View Admins Records</title>
   </head>
   
   <body>
   @if ($message = Session::get('success'))
   <strong style="color:green;">{{ $message }}</strong> 
   @endif
      <h1>Admin Table</h1>
       <a href="\demo">Add Admin</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td colspan="2">Action</td>
         </tr>
         @php($i=1)
         @foreach ($admins as $admin)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $admin->firstName }}</td>
            <td>{{ $admin->lastName }}</td>
            <td><a href = "address/{{$admin->id}}">Address</a></td>
            <td><a href = "deleteadmin/{{$admin->id}}">Delete</a></td>
            
         </tr>
         @endforeach
      </table>
   </body>
</html>