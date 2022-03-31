<html>
   
   <head>
      <title>View Admins Records</title>
   </head>
   
   <body>
      <h1>Admin Ajax Address Table</h1>
      
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Address</td>
            
           
         </tr>
         @php($i=1)
         @foreach ($addresses as $address)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $address->address }}</td>
            
         </tr>
         @endforeach
      </table>
   </body>
</html>