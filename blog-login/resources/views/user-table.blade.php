<html>
   
   <head>
   
      <title>View Users Records</title>
   </head>
   
   <body>

   
      <h1>Users Table</h1>
     
       <a href="{{ route('user-form')}}">Add Users</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
   
            
         </tr>
         @php($i=1)
         
         @foreach ($users as $user)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
           
            
         </tr>
         @endforeach
      </table>
   
   

   </body>


</html>