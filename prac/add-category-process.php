<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $Name= $_POST["name"];
}
$sql="INSERT into tblcategories(`name`) Values ('".$Name."')";

$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
    header("location:category-table.php?msg=1");
}else{
    header("location:category-table.php?msg=1"); 
}
?>
