<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "DELETE FROM tblcategories where id = '".$Id."'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:category-table.php?msg=3");
}else{
    header("location:category-table.php?err=3");
}
?>