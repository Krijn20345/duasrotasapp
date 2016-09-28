<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    
<div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="#">Evenementen</a></li>
  
</ol>
</div>
<?php 
	$sql = "SELECT * FROM agenda e
JOIN signups s ON e.id = s.agenda_id
JOIN leden u ON u.id = s.leden_id
WHERE u.id=$sessionid AND datum >= NOW() - INTERVAL 1 DAY ORDER BY datum ASC 
";

echo "<h3>" .$sessionusername. ", je hebt je aangemeld voor de volgende evenementen:</h3>";
echo "<table class='table'";
echo "<thead><tr><th>Datum</th><th>Evenement</th><th>Tijd</th><th>Locatie</th><th>Afmelden</th></tr></thead>";
echo "<tbody>";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".date('d-m', strtotime($row['datum'])) ."</td>";
			echo "<td>".$row['onderwerp']."</td>";
			echo "<td>". date('H:i', strtotime($row['tijd'])) ."</td>";
			echo "<td>".$row['locatie']."</td>";
			echo "<td><a href='includes/process_afmelden.php?id=".$row['agenda_id']."'><i class='glyphicon glyphicon-remove'></i></a></td>";
			echo "<tr>";
		
            
                }
        // Close result set
        mysqli_free_result($result);
    } } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 echo "<tbody>";
 echo "</table>";

?>



    
    
  <?php include "includes/footer_inc.php"; ?>