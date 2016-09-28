<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';



$quote = $_POST['quote'];
$auteur = $_POST['auteur'];



	
// attempt insert query execution
$sql = "INSERT INTO quotes(`quote`, `auteur`) VALUES ('$quote', '$auteur')";

?>
<script type="text/javascript">

window.location = "../index.php"

</script>
<?php
if(mysqli_query($link, $sql)){
   
} else {
	echo mysql_error();
}

?>
</body>