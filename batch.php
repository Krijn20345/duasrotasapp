<?php include "includes/db_config.php"; ?>
    <table>
    
<?php // Attempt select query execution
$id1 = mysqli_query($link, "SELECT id FROM `leden`");
$id = mysqli_fetch_array($id1);

echo $id;
$username = "SELECT voornaam FROM `leden`";

$sql = "UPDATE leden SET `username` = '$username', `verified` = '1', `mod_timestamp` = NOW() WHERE `leden`.`id` = $id;";

if($result = mysqli_query($link, $sql)){
    
   echo "Succesvol";  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?></table>