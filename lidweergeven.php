<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>

<div class="container" style="margin-top:50px;">

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="ledenoverzicht.php">Ledenoverzicht</a></li>
  
</ol>

<?php // Attempt select query execution
$id=$_GET['id'];
$sql = "SELECT * FROM leden WHERE id='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

		while($row = mysqli_fetch_array($result)){
			
			?>
            <div class="panel panel-default">
            	<div class="panel-heading"><?php echo $row['voornaam']; ?> <?php echo $row['achternaam']; ?> | <?php echo $row['lidmaatschap']; ?></div>
            	<div class="panel-body">
                	<table class="table">
                        <tr>
                    		<td>E-mail:</td>
                        	<td><?php echo $row['email'] ;?></td>
                    	</tr>
                        <tr>
                    		<td>Telefoon:</td>
                        	<td><a href="tel:<?php echo $row['telefoon'] ;?>"><?php echo $row['telefoon'] ;?></a></td>
                    	</tr>
                        <tr>	
                        	<td>Leeftijd:</td>
                            <td><?php 
# procedural
echo date_diff(date_create($row['geboortedatum']), date_create('today'))->y; ?> Jaar</td>
                        </tr>
                        <tr>
                    		<td>Geboortedatum:</td>
                        	<td><?php echo date('d-m-Y', strtotime($row['geboortedatum'])) ;?></td>
                    	</tr>
                        <tr>
                    		<td>Adres:</td>
                        	<td><?php echo $row['adres'] ;?></td>
                    	</tr>
                        <tr>
                    		<td>Postcode:</td>
                        	<td><?php echo $row['postcode'] ;?></td>
                    	</tr>
                        <tr>
                    		<td>Woonplaats:</td>
                        	<td><?php echo $row['woonplaats'] ;?></td>
                    	</tr>
                        <tr>
                    		<td>Type motor:</td>
                        	<td><?php echo $row['motor'] ;?></td>
                    	</tr>
                  
                        
                    </table>
                </div>
            
            </div>
            
            <?php

		}
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>




  </div>
  </div>

  </div>


</body>


</html>