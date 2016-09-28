<head><script src="http://code.jquery.com/jquery-1.11.3.min.js"></script></head>
<body>

<?php
include "../login/loginheader.php";


	
		if (isset($_POST['event_aanmelden'])){
		$ledenid = $_SESSION['username'];
		$id = $_POST['id'];
		
		
		$sql = "INSERT INTO signups(`agenda_id`, `leden_id`) VALUES ('$id', '$sessionid')";
		
		if(mysqli_query($link, $sql)){

?>
<script type="text/javascript">
<!--
window.location = "../agenda.php"
//-->
</script>
<?php
} else {

}
 

			

    };
	
		if (isset($_POST['contact_lid'])){
	
		$emailto = $_POST['emailto'];
		$namefrom = $_POST['namefrom'];
		$onderwerp = $_POST['onderwerp'];
		$bericht = $_POST['bericht'];
		
		$emailID = $emailto;
		
		
		$body = <<<EOD
        
        <table cellspacing="0" cellpadding="1" border="0">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Afzender: </td>
                    <td style="padding: 5px 10px;">$namefrom</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Bericht: </td>
                    <td style="padding: 5px 10px;">$bericht</td>
                </tr>
                </tbody>
        </table>
        
EOD;


		$headers = "From: app@duasrotas.nl\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		mail($emailID, $onderwerp, $body, $headers );
		
		
		?>
<script type="text/javascript">
<!--
window.location = "../ledenoverzicht.php"
//-->
</script>
<?php
    };?>
    </body>
