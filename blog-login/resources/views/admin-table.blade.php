<html>
   
   <head>
   
      <title>View Admins Records</title>
   </head>
   
   <body>
   @if ($message = Session::get('success'))
   <strong style="color:green;">{{ $message }}</strong> 
   @endif
   
      <h3>Admins Table</h3>
     
       <a href="{{ route('admin-form')}}">Add admins</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
         </tr>
         @php($i=1)
         
         @foreach ($admins as $admin)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
           
            
         </tr>
         @endforeach
      </table>

   </body>


</html>