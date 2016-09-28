<head><!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script></head>
<body>
<div data-role="page" id="itemtoevoegen" data-theme="b">
	<div data-role="header">
    	<div data-role="navbar">
    		<ul>
     			<li><a href="ledenoverzicht.php" data-rel="back" data-transition="slide" data-direction="reverse" data-icon="bars">Ga terug</a></li>
     	 		
    		</ul>
  		</div>
  	</div>
	<div data-role="main" class="ui-content">
<?php

if (isset($_POST['submit'])) {


// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = "";


if (isset($_POST['submit'])) {
	if (empty($_POST["onderwerp"])) {
    echo "Onderwerp is verplicht<p/>";
  } else {
		$subject = $_POST['onderwerp'];
  }
  
  if (empty($_POST["name_from"])) {
    echo "Naam is verplicht<p/>";
  } else {  
		$naam = $_POST['name_from'];
  }
  
  if (empty($_POST["bericht"])) {
    echo "Bericht is verplicht<p/>";
  } else {
        $bericht = $_POST['bericht'];
  }
  
  if (empty($_POST["email_from"])) {
    echo "Email is verplicht<p/>";
  } else {
		$email = $_POST['email_from'];
  }
  

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
} else {
  $afzender = $email;
}
  
  echo ('</div>');
		$emailID = $_POST['email'];
		
		
		$body = <<<EOD
        
        <table cellspacing="0" cellpadding="1" border="0">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Afzender: </td>
                    <td style="padding: 5px 10px;">$naam</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Bericht: </td>
                    <td style="padding: 5px 10px;">$bericht</td>
                </tr>
                </tbody>
        </table>
        
EOD;


		$headers = "From: ".$afzender."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		
		if (($_POST['name_from'] &&  $afzender &&  $_POST['onderwerp'] !="") 
&&  isset($_POST["bericht"]) !=""){
mail($emailID, $subject, $body, $headers );
?>
<script type="text/javascript">

window.location = "../ledenoverzicht.php"

</script>

<?php
}

}

		
}
?>
</body>

