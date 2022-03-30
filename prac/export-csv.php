<?php

include 'db.php';

$sql= "SELECT * FROM tblcategories ORDER BY id DESC";

$result=mysqli_query($conn,$sql);

if($result->num_rows > 0){
    $delimiter = ",";
    $filename = "categories_" . date('Y-m-d') . ".csv";
    
    $f = fopen('php://memory', 'w');
    $fields = array('ID', 'Name');
    fputcsv($f, $fields, $delimiter);

    while($row = $result->fetch_assoc()){
        $lineData = array($row['id'], $row['name']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f, 0);
    
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
}
exit;

?>