<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
 
// Escape user inputs for security
$datum = date ('Y-m-d', strtotime($_POST['datum']));
$onderwerp = $_POST['onderwerp'];
$tijd = $_POST['tijd'];
$locatie = $_POST['locatie'];
$organisator = $_POST['organisator'];
 
// attempt insert query execution
$sql = "INSERT INTO agenda(`datum`, `onderwerp`, `tijd`, `locatie`, `organisatie`) VALUES ('$datum', '$onderwerp', '$tijd', '$locatie', '$organisator')";
?>
<script type="text/javascript">

window.location = "../agenda.php"

</script>>
<?php
if(mysqli_query($link, $sql)){
   
} else {

}
 
?>
</body>