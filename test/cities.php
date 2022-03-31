<?php
include "database.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$state_id = $_POST["state_id"];
$sql = "SELECT * FROM cities where state_id = $state_id";
$result= mysqli_query($conn,$sql);
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
}
?>