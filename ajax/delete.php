<?php

include 'db.php';

$query = "DELETE FROM tblcategories WHERE id=" . $_POST['id'] . " LIMIT 1";
$result = mysqli_query($conn,$query);

if ($result) {
    echo "data Deleted";
} else {
    echo "Unable to Delete Data" . $conn->error;
}
?>