<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
    echo "Sorry, there was an error uploading your file.";
    }

 $sql = "insert into tblimages(`image`) values('".$target_file."')";
 
 $result = mysqli_query($conn,$sql);
 if($result){
     header("location:img-table.php");
 }else{
    header("location:upload.php?err");
 }
}
?>