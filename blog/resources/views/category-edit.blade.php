<html>
   
   <head>
      <title>Category | Edit</title>
   </head>
   
   <body>
      <form action = "/editcategory/{{$categories->id}}" method = "post">
         <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '{{$categories->name}}'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update category" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>