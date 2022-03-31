<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <hr>
                            <div class="table-responsive">
                                <form id="addressform">
                                @csrf()
                               
                                    <table id="faqs" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Admin</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="firstName" name="firstName"
                                                        placeholder="First Name"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" id="lastName" name="lastName"
                                                        placeholder="Last Name"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" placeholder="Address" id="address[]" name="address[]"
                                                        class="form-control"></td>
                                                <td class="mt-10"><a onclick="addfaqs();" class="badge badge-success"><i
                                                            class="fa fa-plus"></i> ADD NEW</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                            </div>
                            <div class="text-center"><button type="submit" class="badge badge-success"><i
                                        class="fa fa-plus"></i>Send</button></div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    var faqs_row = 0;

    function addfaqs() {
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td><input type="text" class="form-control" id="address[]" name="address[]" placeholder="address"></td>';
        html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row +
            '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
    }


    $("#addressform").on('submit',(function(e) {
e.preventDefault();
var fdata = new FormData(this);
$.ajax({
  url: "{{ route('ajaxsave') }}",
  type: "POST",
  data: fdata,
  contentType: false,
      cache: false,
  processData:false,
  success: function(data)
    {
        alert(data.success);
        window.location.href = "{{ route('list.admin') }}";
    } ,
    error: function(){
        console.log("err");
    }
 });
 }));
 
</script>


</body>

</html>