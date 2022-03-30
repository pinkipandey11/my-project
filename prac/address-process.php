<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userId = $_POST["id"];
    $Country = $_POST["country"];
    $State = $_POST["state"];
    $City = $_POST["city"];
    $Address = $_POST["address"];
    $Pincode = $_POST["pincode"];
   $sql = "INSERT into tbluseraddresses(`country`,`state`,`city`,`address`,`pincode`,`userId`) 
   values ('".$Country."','".$State."','".$City."','".$Address."','".$Pincode."','".$userId."')";
   
   $result = mysqli_query($conn,$sql);
   if($result){
       header("location:user-address-table.php?msg=1");
   }else{
    header("location:user-address-table.php?err=1");
   } 
}
?>