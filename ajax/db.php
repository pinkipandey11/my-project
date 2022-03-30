<?php

$conn = mysqli_connect("localhost","root","","dbpractice");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
?>