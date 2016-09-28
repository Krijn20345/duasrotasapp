<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>

  
  <div class="row">
  
  
  
  <?php // Attempt select query execution
$id=$_GET['id'];
$sql = "SELECT * FROM leden WHERE id='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){ ?>
        <h1>Wachtwoord aanpassen voor <?php echo "".$row['voornaam']." ".$row['achternaam'].""; ?></h1>
 		 <form action="includes/process_wwwijzigen.php" method="post">
        <div class="form-group">
    		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
  		</div>
  		
        <div class="form-group">
            <input type="text" name="password" id="password" class="form-control" placeholder="Nieuw wachtwoord">
        </div>
        
        
  
        <button type="submit" class="btn btn-success" name="submit" value="submit" >Aanpassen</button>

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