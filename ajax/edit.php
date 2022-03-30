<?php

include "db.php";

$q = "SELECT * FROM tblcategories WHERE id=" . $_POST['id'];


$rst = $conn->query($q);


if ($rst->num_rows > 0) {
    
    while ($row = $rst->fetch_assoc()) {
        
        echo json_encode($row);
    }
}
?>