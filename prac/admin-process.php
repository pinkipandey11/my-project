<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
 
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    // var_dump($address);
   $sql = "INSERT into tbladmins(`firstName`,`lastName`) values('".$firstName."','".$lastName."')";
   
   $result = mysqli_query($conn,$sql);

 $lastid = mysqli_insert_id($conn);
 
    for($i=0;$i< count($address);$i++){
        $insert ="INSERT into tbladminaddress(`address`,`adminId`) values('".$address[$i]."','".$lastid."')"; 
        $exe = mysqli_query($conn,$insert);
    
       }
    if($exe){
        header("location:admin-table.php");
    }else{
        header("location:admin-index.php?err=2");
    }

}

?>