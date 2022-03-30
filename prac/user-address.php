
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
<form action = "address-process.php" method="POST">
   <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    <input type="text" name="country" placeholder = "Enter Your country" class = "form-control">
    <input type="text" name = "state" placeholder ="Enter Your state" class = "form-control">
    <input type="text" name="city" placeholder ="Enter Your city" class = "form-control">
    <input type="text" name="address" placeholder ="Enter Your Address" class = "form-control">
    <input type="number" name = "pincode" placeholder ="Enter Your Pincode" class="form-control">

    <button type= "submit" name="submit">send</button>
    
</form>
<?php
    }else{
        echo "error";
    }
?>