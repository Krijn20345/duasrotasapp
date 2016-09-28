<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
	$sql = "DELETE FROM leden WHERE id=".$_GET['id'];
		echo $sql;
?>
<script type="text/javascript">
window.location = "../ledenoverzicht.php"
</script>
<?php
if(mysqli_query($link, $sql)){
	
	echo $sql;
   
} else {

}
 
?>
</body>