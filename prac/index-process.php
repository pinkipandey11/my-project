<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = $_POST["name"];
  $Email = $_POST["email"];
  $Password = $_POST["password"];
  $Status = $_POST["status"];
}
$sql = "INSERT into tblusers(`name`,`email`,`password`,`status`) VALUES('".$Name."','".$Email."','".$Password."','".$Status."')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
    header("location: index.php?msg=1");
}else{
    header("location: index.php?err=1");
}

?>