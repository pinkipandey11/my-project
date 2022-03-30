<?php
include "db.php";
$filename = "users.xls"; 

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$sql = "select * from tblusers";
$result = mysqli_query($conn,$sql);

$flag = false;
while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
        
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>