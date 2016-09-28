<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
 $id = $_POST['id']; 
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);

// Attempt update query execution
$sql = "UPDATE leden SET `password`='$hash' WHERE `id`='$id'";

if(mysqli_query($link, $sql)){
   ?>
  <script type="text/javascript">

window.location = "../ledenoverzicht.php"

</script>
   <?php
} else {


}



 
?>
</body>