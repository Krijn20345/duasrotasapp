<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include '../login/loginheader.php';
include 'db_config.php';
$sessionusername = $_SESSION['username'];
$sql = "select * from leden where id = $sessionid";
 $result = mysqli_query($link, $sql);
 while($row = mysqli_fetch_array($result)) {
  $sessionid = $row['id'];
  $woonplaats = $row['woonplaats'];
 }
 
 $id= $_GET['id'];
	$sql = "DELETE FROM signups WHERE agenda_id=$id AND leden_id=$sessionid";

?>
<script type="text/javascript">

window.location = "../aangemeld.php"

</script>
<?php
if(mysqli_query($link, $sql)){
   
} else {

}
 
?>
</body>