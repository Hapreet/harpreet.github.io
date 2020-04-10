<?php

if(isset($_POST['submit']))

 {

 	$phone=$_POST['phone'];
 	$mess=$_POST['MESSAGE'];
 	
	// Authorisation details.
	$username = "hs143297@gmail.com";
	$hash = "9d8e08b8f14dd6dc20e6fe9494ab4e7a0cf8a206e1fc690f8f42692e7c815a6d";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$phone"; // A single number or a comma-seperated list of numbers
	$message = "$mess";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
 }


?>