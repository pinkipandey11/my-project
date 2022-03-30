<?php
include "db.php";
?>
<h1>User Address Update Table</h1>
<?php 
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "SELECT * from tbluseraddresses WHERE id='".$Id."'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

        $Country = "";
        $State = "";
        $City = "";
        $Address = "";
        $Pincode = "";
        
        $row = mysqli_fetch_assoc($result);
    ?>
        <form action = "update-address-process.php" method="POST">
    <input type="text" name="country" value ="<?php echo $row["country"];?>">
    <input type="text" name = "state" value ="<?php echo $row["state"];?>">
    <input type="text" name="city" value ="<?php echo $row["city"];?>">
    <input type="text" name="address" value ="<?php echo $row["address"];?>">
    <input type="number" name = "pincode" value="<?php echo $row["pincode"];?>">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <button type= "submit" name="submit">send</button>
    
</form>
    <?php 
}else{
    header("Location: user-address-table.php");
}
?>