<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    <div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="agenda.php">Agenda</a></li>
  
</ol>
</div>

<h4>Event toevoegen</h4>
<form action="includes/process_itemtoevoegen.php" method="post">
  <div class="form-group">
    <input type="date" class="form-control" name="datum" placeholder="Datum">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="onderwerp" placeholder="Onderwerp">
  </div>
  <div class="form-group">
    <input type="time" class="form-control" name="tijd" placeholder="Tijd">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="locatie" placeholder="Locatie">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="organisator" placeholder="Organisator">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    
    
  <?php include "includes/footer_inc.php"; ?>