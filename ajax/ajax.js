//inserting data
// $(document).on('click', "#formbtn", function (e) {
function test(){
    // e.preventDefault();
    let data = {
        name: $('#name').val(),
    }
    $.ajax({
        url: 'insert.php',
        method: "POST",
        data: data,
        success: function (res) {
            $('#name').val('');
            load_data();
            // window.location = 'table.php';
        }
    })
// });
}
//Read Data
function load_data() {
    $.ajax({
        url: 'table.php',
        method: "POST",
        success: function (res, status) {
            if (status == "success") {
                $("#table").html(res);
            }
        }
    });


}

load_data();


$(document).on('click', '.edit', function () {
    let id_value = $(this).attr('id');
    $.ajax({
        url: 'edit.php',
        method: "POST",
        data: { id: id_value },
        success: function (res) {
            //parsing data from json to object
            let data = $.parseJSON(res);
            $('#name').val(data.name);
            $('#dataid').val(data.id);
            $('#formbtn').text("Update Data").attr('id', "updatebtn").attr('type', '').attr('onclick', 'demo();');
        }
    })
});


//update Data
function demo(){
// $(document).on('click', "#updatebtn", function (e) {
//     e.preventDefault();
    let data = {
        id: $('#dataid').val(),
        name: $('#name').val(),
    }
    $.ajax({
        url: 'update.php',
        method: "POST",
        data: data,
        success: function (res) {
            $('#name').val('');
            $('#updatebtn').text("Save Data").attr('id', "formbtn").attr('type', 'submit');
            load_data();
            
        }
    })
}

//delete data
$(document).on('click', '.delete', function () {
    let id_value = $(this).attr('id');
    $.ajax({
        url: 'delete.php',
        method: "POST",
        data: { id: id_value },
        success: function (res, status) {
            if (status == 'success') {
                load_data();
            }
        }
    })
});
