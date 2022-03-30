<?php
include "db.php";
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
    
}
$sql = "SELECT * from tblusers WHERE id='".$Id."'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

       $Id="";
         
        
        $row = mysqli_fetch_assoc($result);
    

?>
<a href = "user-address.php?id=<?php echo $row["id"];?>">Add Address </a>
<?php
}
?>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>Country</th>
    <th>State</th>
    <th>City</t>
    <th>Address</th>
    <th>Pincode</th>
    <th>Actions</th>
</thead>
<?php
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
    
}
$sql = "SELECT * FROM tbluseraddresses where userId='".$Id."'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["country"];?></td>
    <td><?php echo $row["state"];?></td>
    <td><?php echo $row["city"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["pincode"];?></td>
    <td><a href = "user-address-update.php?id=<?php echo $row["id"];?>">Update</a> | <a href = "delete-address.php?id=<?php echo $row["id"];?>">Delete</a></td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
