<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "DELETE FROM tblusers where id = '".$Id."'";
$result = mysqli_query($conn,$sql);
if($result){
    header("location:table.php?msg=3");
}else{
    header("location:table.php?err=3"); 
}
?>