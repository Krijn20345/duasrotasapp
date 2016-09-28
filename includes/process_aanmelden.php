<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>
<?php
include '../login/loginheader.php';
		
		$agendaid = $_GET['id'];
		$sql= "INSERT INTO signups (`agenda_id`, `leden_id`) VALUES ('$agendaid', '$sessionid')";
$result = mysqli_query($link, "SELECT * FROM signups WHERE agenda_id = '$agendaid' AND leden_id= '$sessionid'");


if (mysqli_num_rows($result) == 0) {
	$sql= "INSERT INTO signups (`agenda_id`, `leden_id`) VALUES ('$agendaid', '$sessionid')";
	if(mysqli_query($link, $sql)){
   ?>
  <script type="text/javascript">

window.location = "../aangemeld.php"

</script>
   <?php
} else {


}
	
} else {
	?>
  <script type="text/javascript">

window.location = "../aangemeld.php"

</script>
   <?php	
}

     ?>
</body>

<!-- -->