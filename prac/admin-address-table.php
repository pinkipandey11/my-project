<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "SELECT * FROM tbladminaddress where adminId = '".$Id."'";

$result = mysqli_query($conn,$sql);

?>

<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>Address</th>
    <th>AdminId</th>
   
</thead>
<?php
if (mysqli_num_rows($result) > 0) {

    while($row=  mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["adminId"];?></td>
    
</tr>
<?php
    }
}

?>
</tbody>
</table>