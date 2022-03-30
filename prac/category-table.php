<?php
include "db.php";
?>
<a href = "add-category.php">Add Category </a>
<table border=1 cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
</thead>
<?php
$sql = "SELECT * FROM tblcategories order by id desc";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {

 while($row = mysqli_fetch_assoc($result)) {
     
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
    
    <td><a href = "update-category.php?id=<?php echo $row["id"];?>">Update</a> | <a href = "delete-category.php?id=<?php echo $row["id"];?>">Delete</a></td>
</tr>
<?php
 }
}
?>
</tbody>
</table>
<a href="export-csv.php" class="btn btn-success pull-right">Export Categories</a>
