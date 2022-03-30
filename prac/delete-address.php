<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "DELETE FROM tbluseraddresses where id = '".$Id."'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:user-address-table.php?msg=3");
}else{
    header("location:user-address-table.php?err=3"); 
}
?>