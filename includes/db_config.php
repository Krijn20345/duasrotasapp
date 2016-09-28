<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("10.3.0.25", "duasrotas_app", "duasrotasapp123", "duasrotas_app");

$limit = 10;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>






