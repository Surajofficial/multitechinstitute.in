<?php
session_start();
if($_POST['submit']!=''){

extract($_POST);

$to="multitechtilaknagar@gmail.com";
//$to="multitechinstituteindia@gmail.com, multitechinstitute25@gmail.com";
//$to="info@itnucleus.com, dataitn@gmail.com";

$body.="<strong>Name :</strong> ".$fname."<br><br>";
$body.="<strong>Contact Number :</strong> ".$fphone."<br><br>";
$body.="<strong>Course :</strong> ".$fcourse."<br><br>";

$from = 'MIME-Version: 1.0' . "\r\n";
$from.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from.= 'From: <info@multitechinstitute.in>' . "\r\n";

$subject="".$fname." - Pop up Form Enquiry - Led TV Repairing Course - www.multitechinstitute.in";
$send_contact=mail($to,$subject,$body,$from);


/// mail to customer

/*$to=$email;
$subject="Thanks for showing your interest in www.multitechinstitute.com";

$body="Dear ".$name."<br><br>";
$body.="Thanks for showing your interest in multitechinstitute.com<br>We will contact you very soon.<br><br>";
$body.="Regards<br>";
$body.="Team, <br>www.multitechinstitute.com<br><br><br><br>";



$from = 'MIME-Version: 1.0' . "\r\n";
$from.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from.= 'From: <info@multitechinstitute.com>' . "\r\n";

$send_contact=mail($to,$subject,$body,$from);
*/
if($send_contact)

{
?>

<?php 
$_SESSION['SUCCESS'] = "Thanks for your enquiry. We will get in touch with you asap";

	echo "<center><strong>Thanks for your Enquiry......<br /><br />We will get back to you within 24 Hrs....<br /><br />

	Redirecting.....</strong><br /><br />

	<img src='loading-spiral.gif'>

	</center><META HTTP-EQUIV='Refresh'

	CONTENT='3; URL=index.php'>";

}

else 

{

	echo "ERROR";

}


}

?>
