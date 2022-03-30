<?php
include "database.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$country_id = $_POST["country_id"];
$sql ="SELECT * FROM states where country_id = $country_id";
$result =mysqli_query($conn,$sql);

?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>

<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
}
?>