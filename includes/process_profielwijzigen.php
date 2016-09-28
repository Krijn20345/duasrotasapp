<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
 
// Escape user inputs for security
$id	= $_POST['id'];
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$geboortedatum = date ('Y-m-d', strtotime($_POST['geboortedatum']));
$motor = $_POST['motor'];

 
// attempt insert query execution
$sql = "UPDATE leden SET `voornaam`='$voornaam', `achternaam`='$achternaam', `email`='$email', `telefoon`='$telefoon', `adres`='$adres', `postcode`='$postcode', `woonplaats`='$woonplaats', `geboortedatum`='$geboortedatum',`motor`='$motor' WHERE `id`='$id'";

if(mysqli_query($link, $sql)){
	
	?>
    <script type="text/javascript">
<!--
window.location = "../profiel_gewijzigd.php"
//-->
</script>
    <?php
   
} else {

}
 
?>
</body>