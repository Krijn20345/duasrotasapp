<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    <div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="agenda.php">Agenda</a></li>
  
</ol>
</div>

<h4>Lid toevoegen</h4>
<form action="includes/process_quotetoevoegen.php" method="post">
	<div class="form-group">
    <input type="text" class="form-control" name="auteur" placeholder="Auteur">
  </div>
  <div class="form-group">
    <textarea type="text" class="form-control" name="quote" placeholder="Quote"></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    
    
  <?php include "includes/footer_inc.php"; ?>