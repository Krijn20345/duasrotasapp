<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';



$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$adres = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];
$geboortedatum = date ('Y-m-d', strtotime($_POST['geboortedatum']));
$motor = $_POST['motor'];
$lidmaatschap = $_POST['lidmaatschap'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT)."\n";


	
// attempt insert query execution
$sql = "INSERT INTO leden(`voornaam`, `achternaam`, `email`, `telefoon`, `adres`, `woonplaats`, `geboortedatum`, `rijbewijs`, `motor`, `lidmaatschap`, `username`, `password`) VALUES ('$voornaam', '$achternaam', '$email', '$telefoon', '$adres', '$woonplaats', '$geboortedatum', 'Ja', '$motor', '$lidmaatschap', '$voornaam', '$password')";

?>
<script type="text/javascript">

window.location = "../ledenoverzicht.php"

</script>
<?php
if(mysqli_query($link, $sql)){
   
} else {
	echo mysql_error();
}

?>
</body>