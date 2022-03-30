<?php
include "db.php";
$sql = "SELECT * FROM tblimages";
$result = mysqli_query($conn,$sql);
?>
<a href = "upload.php">upload images</a>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
</thead>
<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["image"];?></td>
    <td><a href = "img-delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
</tr>
<?php
    }
}
?>
</tbody>
</table>