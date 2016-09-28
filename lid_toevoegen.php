<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    <div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="agenda.php">Agenda</a></li>
  
</ol>
</div>

<h4>Lid toevoegen</h4>
<form action="includes/process_lidtoevoegen.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="voornaam" placeholder="Voornaam">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="achternaam" placeholder="Achternaam">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" name="telefoon" placeholder="Telefoon">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="adres" placeholder="Adres">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="postcode" placeholder="Postcode">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="woonplaats" placeholder="Woonplaats">
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="geboortedatum" placeholder="Geboortedatum">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="motor" placeholder="Motor">
  </div>
  
  <div class="form-group">
  	<select name="lidmaatschap" class="form-control">
  		<option value="Hang-Around" selected>Hang-Around</option>
  		<option value="Prospect">Prospect</option>
  		<option value="Lid">Lid</option>
  		<option value="Bestuur">Bestuur</option>
	</select>
  </div>
      <div class="form-group">
    <input type="text" class="form-control" name="password" placeholder="Wachtwoord">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    
    
  <?php include "includes/footer_inc.php"; ?>