<html>
   
   <head>
      <title>Users | Edit</title>
   </head>
   
   <body>

      <form action = "/edit/{{$users->id}}" method = "post">
         <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '{{$users->name}}'/>
               </td>
               <td>Email</td>
               <td>
                  <input type = 'email' name = 'email' 
                     value = '{{$users->email}}'/>
               </td>
               <td>
                  <input type = 'text' name = 'password' 
                     value = '{{$users->password}}'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update user" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>