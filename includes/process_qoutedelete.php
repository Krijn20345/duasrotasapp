<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
	$sql = "DELETE FROM quotes WHERE id=".$_GET['id'];
		echo $sql;
?>
<script type="text/javascript">
window.location = "../quotes_overzicht.php"
</script>
<?php
if(mysqli_query($link, $sql)){
	
   
} else {

}
 
?>
</body>