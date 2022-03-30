$("#form").on("submit",function(e){
    alert('fdgdf');
    e.preventDefault();
    alert('sdfsdf');
})
    function test(){
        var menueng = [];
        $('input[name="address[]"]').each( function() {
            menueng.push(this.value);
        });
        
        let data = {
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            address: menueng        
        }
         
        $.ajax({
            url: 'admin-process.php',
            method: "POST",
            data: data,
            success: function (res) {
                $('#firstName').val('');
                $('#lastName').val('');
                $('#address').val('');
                alert(res);
                 window.location.href = "admin-table.php";
               
            }
        })
    
    }
    
    
    
    