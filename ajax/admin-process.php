<?php
include "db.php";

 
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    // var_dump($address);
   $sql = "INSERT into tbladmins(`firstName`,`lastName`) values('".$firstName."','".$lastName."')";
   
   $exe = mysqli_query($conn,$sql);
   
 $lastid = mysqli_insert_id($conn);
 
    for($i=0;$i< count($address);$i++){
        $insert ="INSERT into tbladminaddress(`address`,`adminId`) values('".$address[$i]."','".$lastid."')"; 
        $res = mysqli_query($conn,$insert);
    
       }
    if($res){
       echo "Address insert successfully";
    }else{
       echo "something went wrong";
    }


?>