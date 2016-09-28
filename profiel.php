<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    
<div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="profiel.php">Profiel</a></li>
  
</ol>
</div>
 <?php // Attempt select query execution
$sessionusername = $_SESSION['username'];

	$sql = "select * from leden where username = '". $_SESSION['username'] . "'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			?>
            
            
            <form action='includes/process_profielwijzigen.php' method='post'>
            <fieldset class="form-group">
            <input type='hidden' name='id' id='id' value='<?php echo $row[0];?>'>
            <label>Voornaam</label>
            <input type="text" class="form-control" name="voornaam" value="<?php echo $row['voornaam']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Achternaam</label>
            <input type="text" class="form-control" name="achternaam" value="<?php echo $row['achternaam']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Telefoon</label>
            <input type="text" class="form-control"  name="telefoon"value="<?php echo $row['telefoon']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Adres</label>
            <input type="text" class="form-control" name="adres" value="<?php echo $row['adres']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Postcode</label>
            <input type="text" class="form-control" name="postcode" value="<?php echo $row['postcode']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Woonplaats</label>
            <input type="text" class="form-control" name="woonplaats" value="<?php echo $row['woonplaats']; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Geboortedatum</label>
            <input type="text" class="form-control" name="geboortedatum" value="<?php echo date('d-m-Y', strtotime($row['geboortedatum'])) ; ?>">
            </fieldset>
            
            <fieldset class="form-group">
            <label>Motor</label>
            <input type="text" class="form-control" name="motor" value="<?php echo $row['motor']; ?>">
            </fieldset>

			
            <button type="submit" class="btn btn-default">Opslaan</button> <a href="lid_wwwijzigen.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Wijzig wachtwoord</button></a>


            </form>
				
				<?php
        }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
?>



    
    
  <?php include "includes/footer_inc.php"; ?>