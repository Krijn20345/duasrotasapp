<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include 'db_config.php';
 $id = $_POST['id'];
 $voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$geboortedatum = date ('Y-m-d', strtotime($_POST['geboortedatum']));
$rijbewijs = $_POST['rijbewijs'];
$motor = $_POST['motor'];
$lidmaatschap = $_POST['lidmaatschap'];

// Attempt update query execution
$sql = "UPDATE leden SET `voornaam`='$voornaam', `achternaam`='$achternaam', `email`='$email', `telefoon`='$telefoon', `adres`='$adres', `postcode`='$postcode', `woonplaats`='$woonplaats', `geboortedatum`='$geboortedatum', `rijbewijs`='$rijbewijs', `motor`='$motor', `lidmaatschap`='$lidmaatschap' WHERE `id`='$id'";

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