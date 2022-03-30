<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "DELETE FROM tblimages where id = '".$Id."'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:img-table.php?msg=3");
}else{
    header("location:img-table.php?err=3"); 
}
?>