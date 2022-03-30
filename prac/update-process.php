<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Id = $_POST["id"];
  $Name = $_POST["name"];
  $Email = $_POST["email"];
  $Password = $_POST["password"];  
}
$sql= "UPDATE tblusers SET name = '".$Name."', email='".$Email."', password ='".$Password."' where id = '".$Id."'";

$result = mysqli_query($conn,$sql);

if($result){
header("location: table.php?msg=2");
}else{
   
header("location: update.php?err=1");
  
}

?>