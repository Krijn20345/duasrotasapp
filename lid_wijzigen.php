<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>

  
  <div class="row">
  <h1>Lid aanpassen</h1>
  <form action="includes/process_lidwijzigen.php" method="post">
  
  
  <?php // Attempt select query execution
$id=$_GET['id'];
$sql = "SELECT * FROM leden WHERE id='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){ ?>
        
        <div class="form-group">
    		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
  		</div>
  		
        <div class="form-group">
        	<label for="voornaam">Voornaam:</label>
            <input type="text" name="voornaam" id="voornaam" class="form-control" value="<?php echo $row['voornaam']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="achternaam">Achternaam:</label>
            <input type="text" name="achternaam" id="achternaam" class="form-control" value="<?php echo $row['achternaam']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="telefoon">Telefoon:</label>
            <input type="tel" name="telefoon" id="telefoon" class="form-control" value="<?php echo $row['telefoon']; ?>">
        </div>
               
        <div class="form-group">
        	<label for="adres">Adres:</label>
            <input type="text" name="adres" id="adres" class="form-control" value="<?php echo $row['adres']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="postcode">Postcode:</label>
            <input type="text" name="postcode" id="postcode" class="form-control" value="<?php echo $row['postcode']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="woonplaats">Woonplaats:</label>
            <input type="text" name="woonplaats" id="woonplaats" class="form-control" value="<?php echo $row['woonplaats']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="geboortedatum">Geboortedatum:</label>
            <input type="date" name="geboortedatum" id="geboortedatum" class="form-control" value="<?php echo $row['geboortedatum']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="rijbewijs">Rijbewijs:</label>
            <select class="form-control" name="rijbewijs">
            	<option value="Nee" <?php if ($row['rijbewijs']=='Nee') { echo 'selected'; }; ?>>Nee</option>
                <option value="Ja" <?php if ($row['rijbewijs']=='Ja') { echo 'selected'; }; ?>>Ja</option>
            </select>
        </div>
        
        <div class="form-group">
        	<label for="motor">Motor:</label>
            <input type="text" name="motor" id="motor" class="form-control" value="<?php echo $row['motor']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="telefoon">Lidmaatschap:</label>
            <select class="form-control" name="lidmaatschap">
            	<option value="Bestuur" <?php if ($row['lidmaatschap']=='Bestuur') { echo 'selected'; }; ?>>Bestuur</option>
                <option value="Lid" <?php if ($row['lidmaatschap']=='Lid') { echo 'selected'; }; ?>>Lid</option>
                <option value="Prospect" <?php if ($row['lidmaatschap']=='Prospect') { echo 'selected'; }; ?>>Prospect</option>
                <option value="Hang-around" <?php if ($row['lidmaatschap']=='Hang-around') { echo 'selected'; }; ?>>Hang-around</option>
            </select>
        </div>
  
        <button type="submit" class="btn btn-success" name="submit" value="submit" >Aanpassen</button>
        
        <a href="includes/process_liddelete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Verwijder</button></a>
        <a href="lid_wwwijzigen.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Wijzig wachtwoord</button></a>
        <?php }
		// Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} ?>

              
            </form>
  
  
  
  </div>


  <?php include "includes/footer_inc.php"; ?>