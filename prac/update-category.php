<?php
include "db.php";
?>
<h1>Category Update Table</h1>
<?php 
$Id = "";
if(isset($_GET["id"])){
    $Id = $_GET["id"];
}
$sql = "SELECT * from tblcategories WHERE id='".$Id."'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {

        $Name = "";
         
        
        $row = mysqli_fetch_assoc($result);
    ?>
        <form action = "category-update-process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="text" name="name" value ="<?php echo $row["name"]; ?>">
        
            <button type= "submit">send</button>
        </form>
    <?php 
}else{
    header("Location: table.php");
}
?>