<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
  		<div class="row" style="margin-top:15px;">
        	<div class="col-xs-12" style="text-align:center;">
            	<img src="login/images/logo.png" height="150px"/>
            </div>
        
        
        </div>
		
		<!-- BERICHT -->

		<?php if ($password == "\$1\$ACEaAFDR\$oH7GjF1i/tYUTUa1sko/z0"){?>
        <div class="row" style="margin-top:15px;">
        <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Wijzig je wachtwoord!</strong> <?php echo "$sessionusername"; ?>, wijzig snel je wachtwoord!
</div>
<a href="lid_wwwijzigen.php?id=<?php echo $sessionid; ?>"><button type="button" class="btn btn-warning">Wijzig wachtwoord</button></a>

</div>
        <?php } else { ?>
        <div class="row" style="margin-top:15px;">
        <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Ingelogd!</strong> Welkom <?php echo "$sessionusername"; ?>!
</div>
</div>
        <?php
	
}?>
                



<div class="list-group" style="margin-top:10px; font-size:2rem;">
        <a href="agenda.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div><div class="col-xs-10">Agenda</div></div></a>
          <a href="aangemeld.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></div><div class="col-xs-10">Jouw events</div></div></a>
  <a href="ledenoverzicht.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div><div class="col-xs-10">Leden</div></div></a>
    <a href="merchandise.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></div><div class="col-xs-10">Merchandise</div></div></a>
    <a href="weer.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></div><div class="col-xs-10">Weerbericht</div></div></a>
 <!-- <a href="#" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-tag"></span></div><div class="col-xs-10">Merchandise</div></div></a> -->
  <a href="https://www.wetransfer.com/?to=krijn@duasrotas.nl" target="_blank" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-export" aria-hidden="true"></span></div><div class="col-xs-10">Stuur foto's</div></div></a>

<?php if ($rang == "Bestuur"){?>
<a href="quotes_overzicht.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></div><div class="col-xs-10">Quotes</div></div></a>
<?php } else {
	
}?>
</div>
<div class="list-group" style="margin-top:10px; font-size:2rem;">
  <a href="profiel.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></div><div class="col-xs-10">Wijzig</div></div></a>

</div>

<?php if ($rang == "Bestuur"){?>
<div class="list-group" style="margin-top:10px; font-size:2rem;">
  <a href="lid_toevoegen.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div><div class="col-xs-10">Lid toevoegen</div></div></a>
    <a href="agenda_toevoegen.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div><div class="col-xs-10">Event toevoegen</div></div></a>
        <a href="quote_toevoegen.php" class="list-group-item"><div class="row"><div class="col-xs-2"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></div><div class="col-xs-10">Quote toevoegen</div></div></a>

</div>
 

<?php } else {
	
}?>
    
    
   
  <?php include "includes/footer_inc.php"; ?>