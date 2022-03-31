<html>
   
   <head>
   
      <title>View Users Records</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </head>
   
   <body>
   @if ($message = Session::get('success'))
   <strong style="color:green;">{{ $message }}</strong> 
   @endif
   
      <h1>Users Table</h1>
     
       <a href="/insert">Add Users</a>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            
            <td colspan="2">Action</td>
         </tr>
         @php($i=1)
         
         @foreach ($users as $user)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href = "edit/{{$user->id}}">Update</a>|<a href = "delete/{{ $user->id }}">Delete</a></td>
            
         </tr>
         @endforeach
      </table>
     <button><a  href="{{ route('export') }}">Export User Data in Excel</a></button><br>
     <button><a  href="{{ route('generatePDF') }}" target="_blank">Export User Data in pdf</a></button><br>
     <button><a  href="{{ route('export-csv') }}">Export User Data in csv</a></button><br>
   

   </body>


</html>