<!DOCTYPE html>
<html>

<head>
    <title> List Country State City</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <h4 class="text-success">Country State City List </h4>
    <form>
        <label for="country">Country</label>
        <select class="form-control" id="country-dropdown">
            <option value="">Select Country</option>
            <?php
                include "database.php";
                $sql = "SELECT * FROM countries";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)) {
                ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
            <?php
                }
                ?>
        </select>

        <label for="state">State</label>
        <select class="form-control" id="state-dropdown">
        </select>

        <label for="city">City</label>
        <select class="form-control" id="city-dropdown">
        </select>

        <script>
        $(document).ready(function() {
            $('#country-dropdown').on('change', function() {
                var country_id = this.value;
                $.ajax({
                    url: "state.php",
                    type: "POST",
                    data: {
                       
                        country_id: country_id
                       
                    },
                    cache: false,
                    success: function(result) {
                        $("#state-dropdown").html(result);
                        $('#city-dropdown').html(
                            '<option value="">Select State First</option>');
                    }
                });
            });
            $('#state-dropdown').on('change', function() {
                var state_id = this.value;
                $.ajax({
                    url: "cities.php",
                    type: "POST",
                    data: {
                        state_id: state_id
                    },
                    cache: false,
                    success: function(result) {
                        $("#city-dropdown").html(result);
                    }
                });
            });
        });
        </script>
</body>

</html>