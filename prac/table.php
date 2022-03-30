<?php
include "db.php";
$sql = "SELECT * FROM tblusers";
$result = mysqli_query($conn,$sql);
?>
<a href = "index.php">Add Users </a>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</t>
    <th>Status</th>
    <th>Actions</th>
    <th>User-Address</th>
</thead>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["password"];?></td>
    <td><a href = "update_user_status.php?id=<?php echo $row["id"];?>">
    <?php  if($row["status"]==1){
        echo "ACTIVE";
    }else{
        echo "INACTIVE";
    }  ?>
    </a></td>
    <td><a href = "update.php?id=<?php echo $row["id"];?>">Update</a> | <a href = "delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
    <td><a href = "user-address-table.php?id=<?php echo $row["id"];?>">
    <?php
    if(isset($row["id"])){
        echo "Address";
    }else{
        echo " ";
    }
?>
</td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
<a href="generate-excel.php" class="btn btn-success pull-right">Export excel Users</a><br>
<a href="generate-pdf.php" target="_blank" class="btn btn-success pull-right">Export Pdf Users</a>

