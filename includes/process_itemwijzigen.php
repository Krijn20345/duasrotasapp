<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';

$id = $_POST['id'];
$datum = date ('Y-m-d', strtotime($_POST['datum']));
$onderwerp = $_POST['onderwerp'];
$tijd = $_POST['tijd'];
$locatie = $_POST['locatie'];



// Attempt update query execution
$sql = "UPDATE agenda SET `datum`='$datum', `onderwerp`='$onderwerp', `tijd`='$tijd', `locatie`='$locatie' WHERE `id`='$id'";

?>
<script type="text/javascript">
<!--
window.location = "../agenda.php"
//-->
</script>
<?php
if(mysqli_query($link, $sql)){
   
} else {

}
 
?>
</body>