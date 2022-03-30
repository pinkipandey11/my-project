<html>
    <head>
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
<body>

<div class="page-content page-container" id="page-content">
     <div class="padding">
         <div class="row container d-flex justify-content-center">
             <div class="col-lg-8 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         
                         <h4 class="card-title text-center">Add and remove row in table using jquery</h4>
                         <hr>
                         <div class="table-responsive">
                         <div id="response"></div>
                             <form id="form" method="POST">
                             <table id="faqs" class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>Admin</th>
                                         <th>Status</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                        <!-- <tr><td><input type="hidden" class="form-control" name="id"></td></tr> -->
                                        <tr><td><input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name"></td></tr>
                                         <tr><td><input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name"></td></tr>
                                         <tr><td><input type="text" placeholder="Address" name="address[]" id="address" class="form-control"></td>
                                        <td class="mt-10"><a onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus"></i> ADD NEW</a></td>
                                     </tr>
                                     
                                 </tbody>
                             </table>
                             </div>
                         <div class="text-center"><button type="submit" class="badge badge-success"><i class="fa fa-plus"></i>Send</button></div>
                     </div>
                   </form>
                         
                 </div>
             </div>
         </div>
     </div>
 </div>
<script>
var faqs_row = 0;
function addfaqs() {
html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><input type="text" class="form-control" name="address[]" id="address" placeholder="address"></td>'; 
    html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

    html += '</tr>';

$('#faqs tbody').append(html);

faqs_row++;
}
$("#form").on("submit",function(e){
    e.preventDefault();
    var fdata = new FormData(this);

    $.ajax({
        url: "admin-process.php",
        type: "POST",
        data: fdata,
        contentType: false,
        cache: false,         
        processData:false,        
        success: function(res){
            $('#firstName').val('');
                $('#lastName').val('');
                $('#address').val('');
                alert(res);
                 window.location.href = "admin-table.php";  
        } ,
        error: function(){
            console.log("err");
        }
    });
})
</script>


</body>
</html>