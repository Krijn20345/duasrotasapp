<?php

//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login/main_login.php");
}
else {
	/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("krijnermerins.nl", "duasrotas", "krijn20345", "duasrotas");

$limit = 10;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$sessionusername = $_SESSION['username'];
	$sql = "select * from leden where username = '". $_SESSION['username'] . "'";
 $result = mysqli_query($link, $sql);
 while($row = mysqli_fetch_array($result)) {
  $sessionid = $row['id'];
  $woonplaats = $row['woonplaats'];
  $rang = $row['lidmaatschap'];
  $password = $row['password'];
 }
	}
