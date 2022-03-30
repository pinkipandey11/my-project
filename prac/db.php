<?php
function pr($arr=[]){
    echo "<pre>"; print_r($arr); echo "</pre>";
}
$conn = mysqli_connect("localhost","root","","blog");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
?>
