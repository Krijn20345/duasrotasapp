<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
<div class="row" style="margin-top:15px;">
    <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="#">Weerbericht</a></li>
  
</ol>
</div>
    <div class="row" >
<?php
// haal het huidige weer in Amsterdam op in graden Celcius in het Nederlands
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Rosmalen,NL&units=metric&lang=nl&appid=134286833afa36379c363e918f2d39e4');

// parse de JSON
$data = json_decode($json);
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $data->name; ?> - <?php  echo "".$data->main->temp."&deg; C" ?> - <?php foreach ($data->weather as $weather) {
    echo '<i class="wi wi-owm-'.$weather->id.'"></i>';
}  ?></h3>
  </div>
    <div class="panel-body">
    <table class="table">
    	<tr>
        <thead>
        	<th>Temp</th>
            <th>Lucht</th>
            <th>Wind</th>
        </thead>
         </tr>
         <tr>   
    <td><?php echo "Min: ".$data->main->temp_min."&deg; C"   ?></td>
    <td><?php echo "Vocht: ".$data->main->temp_min."%"    ?></td>
    <td><?php echo "".$data->wind->speed." m/s"    ?></td>
    </tr>
    <tr>
    <td><?php echo "Max: ".$data->main->temp_max."&deg; C"    ?></td>
    <td><?php echo "Druk: ".$data->main->pressure." hPa"    ?></td>
    <td><?php echo "Richting: ".$data->wind->deg." &deg;"    ?></td>
    </tr>
  </table>
    	

</div>
</div>

</div>



<div class="row">
<?php
// haal het huidige weer in Amsterdam op in graden Celcius in het Nederlands
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Tilburg,NL&units=metric&lang=en&appid=134286833afa36379c363e918f2d39e4');

// parse de JSON
$data = json_decode($json);
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $data->name; ?> - <?php  echo "".$data->main->temp."&deg; C" ?> - <?php foreach ($data->weather as $weather) {
    echo '<i class="wi wi-owm-'.$weather->id.'"></i>';
}  ?></h3>
  </div>
    <div class="panel-body">
    <table class="table">
    	<tr>
        <thead>
        	<th>Temp</th>
            <th>Lucht</th>
            <th>Wind</th>
        </thead>
         </tr>
         <tr>   
    <td><?php echo "Min: ".$data->main->temp_min."&deg; C"   ?></td>
    <td><?php echo "Vocht: ".$data->main->temp_min."%"    ?></td>
    <td><?php echo "".$data->wind->speed." m/s"    ?></td>
    </tr>
    <tr>
    <td><?php echo "Max: ".$data->main->temp_max."&deg; C"    ?></td>
    <td><?php echo "Druk: ".$data->main->pressure." hPa"    ?></td>
    <td><?php echo "Richting: ".$data->wind->deg." &deg;"    ?></td>
    </tr>
  </table>
    	

</div>
</div>

</div>

<?php include "includes/footer_inc.php"; ?>