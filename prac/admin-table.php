<?php
include "db.php";
$sql = "SELECT * FROM tbladmins";
$result = mysqli_query($conn,$sql);
?>
<a href = "admin-index.php">Add admins </a>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>FName</th>
    <th>LName</th>
    <th>Address</th>
    <th>Action</th>
   
</thead>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["firstName"];?></td>
    <td><?php echo $row["lastName"];?></td>
    <td><a href = "admin-address-table.php?id=<?php echo $row["id"];?>">
    <?php
    if(isset($row["id"])){
        echo "Address";
    }else{
        echo " ";
    }
?>
<td><a href = "admin-delete.php?id=<?php echo $row["id"];?>">Delete</td>
</td>
</tr>
<?php
    }
}
?>
</tbody>
</table>
