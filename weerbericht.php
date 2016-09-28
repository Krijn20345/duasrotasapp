<?php include "includes/db_config.php"; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Duas Rotas App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/bootstrap-social.css" >
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/weather-icons.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
    <link href="css/main.css" rel="stylesheet" media="screen">
    <style>
	@import 'https://fonts.googleapis.com/css?family=Galada|Patua+One|Sancreek';
	body {
		background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                rgba(0,0,0,0.8) url('images/bg.jpg');
    
		color:#A89C77;
		font-family: 'Patua One', cursive;
		//font-family: 'Galada', cursive;
		//font-family: 'Sancreek', cursive;
	}
	
	</style>
  </head>
  <body>
  <?php
// haal het huidige weer in Amsterdam op in graden Celcius in het Nederlands
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Rosmalen,NL&units=metric&lang=nl&appid=134286833afa36379c363e918f2d39e4');

// parse de JSON
$data = json_decode($json);
?>
  
      <div class="container">

 <div class="row" style="text-align:center;" >

  <div class="col-lg-12">
        
    <div class="row" style="font-size:15rem; text-align:center;">
    	<div class="col-lg-12">
        	<?php foreach ($data->weather as $weather) {
    echo '<i class="wi wi-owm-'.$weather->id.'"></i>';
}  ?> <strong><?php  echo "". round($data->main->temp)."&deg;C" ?></strong>
        </div>           
    </div>
    
    <div class="row" style="font-size:5rem; text-align:center;">
    <div class="col-lg-6"><i class="wi wi-wind-direction"></i><?php echo " ".$data->wind->deg." &deg;"?></div>
    <div class="col-lg-6"><i class="wi wi-strong-wind"></i><?php echo " ".$data->wind->speed." m/s"    ?></div>
    </div>

<div class="row" style=" margin-top:15%;font-size:4rem; text-align:center;">

<h2>Verwachting</h2>
     <?php
// haal het huidige weer in Amsterdam op in graden Celcius in het Nederlands
$json = file_get_contents('http://api.openweathermap.org/data/2.5/forecast/daily?q=Rosmalen,NL&cnt=3&units=metric&lang=nl&appid=134286833afa36379c363e918f2d39e4');

// parse de JSON
$data = json_decode($json);
?>

        <?php foreach ($data->list as $list) {?>
         <div class="row" style=" text-align:center;font-size:5rem;">
         <div class="col-lg-4"><?php echo date('d-m-Y', $list->dt); ?></div>
         <div class="col-lg-4"><?php foreach ($list->weather as $weather) {
    echo '<i class="wi wi-owm-'.$weather->id.'"></i>';
}  ?></div>
         
         <div class="col-lg-4"><?php  echo "". round($list->temp->min)."&deg;C" ?> / <?php  echo "". round($list->temp->max)."&deg;C" ?></div>
         
         </div>
         <?php } ?>
   

</div>

</div>

</div>
    </div> <!-- /container -->
 
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alert.js"></script>

    </body>
</html>