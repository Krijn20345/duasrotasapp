<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    
<div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="#">Evenementen</a></li>
  
</ol>
</div>
<?php 
$id=$_GET['id'];
	$sql = "SELECT * FROM agenda e
JOIN signups s ON e.id = s.agenda_id
JOIN leden u ON u.id = s.leden_id
WHERE e.id=$id
";

echo "<table class='table'";
echo "<thead><tr><th>Naam</th><th>Evenement</th><th>Tijd</th><th>Locatie</th></tr></thead>";
echo "<tbody>";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row['voornaam']." ".$row['achternaam']."</td>";
			echo "<td>".$row['onderwerp']."</td>";
			echo "<td>". date('H:i', strtotime($row['tijd'])) ."</td>";
			echo "<td>".$row['locatie']."</td>";
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