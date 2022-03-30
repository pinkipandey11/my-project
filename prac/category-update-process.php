<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Id = $_POST["id"];
  $Name = $_POST["name"];
  
}
$sql= "UPDATE tblcategories SET name = '".$Name."' where id = '".$Id."'";

$result = mysqli_query($conn,$sql);

if($result){
header("location: category-table.php?msg=2");
}else{
   
header("location: update-category.php?err=1");
  
}

?>