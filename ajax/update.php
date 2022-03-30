<?php

include 'db.php';


extract($_POST);

$query = "UPDATE tblcategories SET name='$name' WHERE id=" . $id;

$result = mysqli_query($conn,$query);

if ($result) {
    echo "Data Updated";
} else {
    echo "Unable to Update Data";
}
?>