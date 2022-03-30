<?php
include "db.php";

$name = $_POST['name'];
	

$query = "INSERT INTO tblcategories(`name`) VALUES('".$name."')";
$result = mysqli_query($conn,$query);

if ($result) {
    echo "Data Added";
} else {
    echo "Error Occured";
}
?>