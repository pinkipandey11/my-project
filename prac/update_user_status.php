<?php
include "db.php";

$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "SELECT * from tblusers WHERE id='".$Id."'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

        $Status = "";
        
     $row = mysqli_fetch_assoc($result);
    
    $Status = $row["status"];
    
     
if($Status==1){
    $Status=0;
   
}else{
    $Status=1;
    
}
$updatesql="UPDATE tblusers SET status='".$Status."' where id = $Id";

$updateresult = mysqli_query($conn,$updatesql);
if($updateresult){
    header("location:table.php?msg=4");
}else{
    header("location:table.php?msg=5");
}
 }

?>