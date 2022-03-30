<?php
include "db.php";
?>
<h1>User Update Table</h1>
<?php 
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "SELECT * from tblusers WHERE id='".$Id."'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

        $Name = "";
        $Email = "";
        $Password = "";
        $Status = "";
        
        $row = mysqli_fetch_assoc($result);
    ?>
        <form action = "update-process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="text" name="name" value ="<?php echo $row["name"]; ?>">
            <input type="email" name="email" value ="<?php echo $row["email"]; ?>">
            <input type="text" name = "password" value="<?php echo $row["password"]; ?>">
            <button type= "submit">send</button>
        </form>
    <?php 
}else{
    header("Location: table.php");
}
?>