<?php include "includes/header_inc.php"; ?>
    <?php include "includes/navbar.php";?>
    
    <div class="row" style="margin-top:15px;">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="agenda.php">Agenda</a></li>
  
</ol>
</div>


<table class="table">
            	<thead>
                	<th>Quote</th>
                    <th>Auteur</th>
                    <th>Opties</th>
                </thead>
                <tbody>
<?php // Attempt select query execution
$sql = "SELECT * FROM quotes";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){ ?>
			
            <tr>
            	<td><?php echo $row['quote'] ?></td>
                <td><?php echo $row['auteur'] ?></td>
                <td><a href="includes/process_quotedelete.php?id=<?php echo $row['id']; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
            </tr>
				
   <?php     }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
?>
</tbody>
</table>

    
    
  <?php include "includes/footer_inc.php"; ?>