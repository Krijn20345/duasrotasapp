<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    <div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="agenda.php">Agenda</a></li>
  
</ol>
</div>

<div class="container">
		<div class="row">
			<div class="[ col-xs-12]">
				<ul class="event-list">
<?php // Attempt select query execution
$sql = "SELECT * FROM agenda  WHERE datum >= NOW() - INTERVAL 1 DAY ORDER BY datum ASC ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
				echo "<li>";
				echo "<time datetime=" .date('d-m-Y', strtotime($row['datum'])) . ">";
				echo "<span class='day'>".date('d', strtotime($row['datum']))."</span>";	
				echo "<span class='month'>".date('M',strtotime($row['datum']))."</span>";	
				echo "</time>";
				echo "<div class='info'>";
				echo "<h2 class='title'>".$row['onderwerp']."</h2>";
				echo "<p class='desc'>" . $row['locatie'] . "</p>";
				echo "<ul>";
				echo "<li style='width:33%;'><span class='glyphicon glyphicon-time'></span> ". date('H:i', strtotime($row['tijd'])) . "</li>";
				echo "<li style='width:33%;'><a href='aanmeldingen.php?id=".$row['id']."'><span class='glyphicon glyphicon-user'></span> Aanmeldingen</a></li>";
				echo "<li style='width:33%;'><a href='includes/process_aanmelden.php?id=".$row['id']."'><span class='glyphicon glyphicon-ok'></span> Aanmelden</a></li>";
				echo "</ul>";
				echo "</div>";	
                
                if ($rang == "Bestuur"){
				echo "<div class='social'>";
				echo "<ul>";
				echo "<li class='facebook' style='width:33%;'><a href='agenda_wijzigen.php?id=".$row['id']."'><span class='fa fa-cogs'></span></a></li>";			
				echo "</ul>";	
				echo "</div>";}
				echo "</li>";
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
?>

</ul>
</div>
</div>
</div>


    
    
  <?php include "includes/footer_inc.php"; ?>