<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>

  
  <div class="row">
  <h1>Item aanpassen</h1>
  <form action="includes/process_itemwijzigen.php" method="post">
  
  
  <?php // Attempt select query execution
$id=$_GET['id'];
$sql = "SELECT * FROM agenda WHERE id='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){ ?>
        
        <div class="form-group">
    		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
  		</div>
        
        <div class="form-group">
        <label for="voornaam">Datum:</label>
    		<input type="date" class="form-control" name="datum" value="<?php echo $row['datum']; ?>">
  		</div>
  		
        <div class="form-group">
        	<label for="voornaam">Titel:</label>
            <input type="text" class="form-control" name="onderwerp" value="<?php echo $row['onderwerp']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="achternaam">Tijd:</label>
            <input type="time" class="form-control" name="tijd" value="<?php echo $row['tijd']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="email">Locatie:</label>
            <input type="text" class="form-control" name="locatie"  value="<?php echo $row['locatie']; ?>">
        </div>
        
        <div class="form-group">
        	<label for="telefoon">Organisator:</label>
            <input type="text" class="form-control" name="organisator"  value="<?php echo $row['organisatie']; ?>">
        </div>
               
        
  
        <button type="submit" class="btn btn-success" name="submit" value="submit" >Aanpassen</button>
        
        <a href="includes/process_itemdelete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Verwijder</button></a>
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