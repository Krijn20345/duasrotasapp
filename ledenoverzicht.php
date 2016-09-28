<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    
<div class="row" style="margin-top:15px;">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="ledenoverzicht.php">Ledenoverzicht</a></li>
  
</ol>
    </div>
    <h1>Ledenoverzicht</h1>
    <div class="page-header">Bestuur</div>
		<ul class="list-group">
         <?php // Attempt select query execution
$sql = "SELECT * FROM leden WHERE lidmaatschap='Bestuur' ";
if($result = mysqli_query($link, $sql)){
	$rowcount=mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){        
        while($row = mysqli_fetch_array($result)){
                echo "<li class='list-group-item'><a href='lidweergeven.php?id=".$row['id']."'>" . $row['voornaam'] . " " . $row['achternaam'] . "</a>";
				if ($rang == "Bestuur"){ 
						echo "<span style='float:right;'><a href='lid_wijzigen.php?id=".$row['id']."'><span class='glyphicon glyphicon-cog' style='font-size:2rem;'
					 aria-hidden='true'></span></a></li></span>";
				}else {
						echo "</li>";
				}
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?></ul>

<div class="page-header">Leden</div>
		<ul class="list-group">
         <?php // Attempt select query execution
$sql = "SELECT * FROM leden WHERE lidmaatschap='Lid' ";
if($result = mysqli_query($link, $sql)){
	$rowcount=mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){        
        while($row = mysqli_fetch_array($result)){
                echo "<li class='list-group-item'><a href='lidweergeven.php?id=".$row['id']."'>" . $row['voornaam'] . " " . $row['achternaam'] . "</a>";
				if ($rang == "Bestuur"){ 
						echo "<span style='float:right;'><a href='lid_wijzigen.php?id=".$row['id']."'><span class='glyphicon glyphicon-cog' style='font-size:2rem;'
					 aria-hidden='true'></span></a></li></span>";
				}else {
						echo "</li>";
				}
				
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?></ul>

<div class="page-header">Prospects</div>
		<ul class="list-group">
         <?php // Attempt select query execution
$sql = "SELECT * FROM leden WHERE lidmaatschap='Prospect' ";
if($result = mysqli_query($link, $sql)){
	$rowcount=mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){        
        while($row = mysqli_fetch_array($result)){
                echo "<li class='list-group-item'><a href='lidweergeven.php?id=".$row['id']."'>" . $row['voornaam'] . " " . $row['achternaam'] . "</a>";
				if ($rang == "Bestuur"){ 
						echo "<span style='float:right;'><a href='lid_wijzigen.php?id=".$row['id']."'><span class='glyphicon glyphicon-cog' style='font-size:2rem;'
					 aria-hidden='true'></span></a></li></span>";
				}else {
						echo "</li>";
				}
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?></ul>

<div class="page-header">Hang-arounds</div>
		<ul class="list-group">
         <?php // Attempt select query execution
$sql = "SELECT * FROM leden WHERE lidmaatschap='Hang-Around' ";
if($result = mysqli_query($link, $sql)){
	$rowcount=mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){        
        while($row = mysqli_fetch_array($result)){
                echo "<li class='list-group-item'><a href='lidweergeven.php?id=".$row['id']."'>" . $row['voornaam'] . " " . $row['achternaam'] . "</a>";
				if ($rang == "Bestuur"){ 
						echo "<span style='float:right;'><a href='lid_wijzigen.php?id=".$row['id']."'><span class='glyphicon glyphicon-cog' style='font-size:2rem;'
					 aria-hidden='true'></span></a></li></span>";
				}else {
						echo "</li>";
				}
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?></ul>

    
    
   
  <?php include "includes/footer_inc.php"; ?>