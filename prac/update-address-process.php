<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id = $_POST["id"];
    $Country = $_POST["country"];
    $State = $_POST["state"];
    $City = $_POST["city"];
    $Address = $_POST["address"];
    $Pincode = $_POST["pincode"];  

$sql= "UPDATE tbluseraddresses SET country = '".$Country."', state='".$State."', city ='".$City."', address ='".$Address."' where id = '".$Id."'";

$result = mysqli_query($conn,$sql);

if($result){
header("location: user-address-table.php?msg=2");
}else{
   
header("location: user-address-update.php?err=1");
  
}
}
?>