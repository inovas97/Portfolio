<?php
	$name = $_POST['name'];
	$eimailFrom = $_POST['email'];
	$message = $_POST['message'];
	$subject = "message from webpage";
	$eimailTo = "novasgiannis97@gmail.com";
	$headers = "From: ".$eimailFrom;
	$txt = "You have received an email from: ".$eimailFrom.".\n\n"."Message: \n\n".$message;
	session_start();

	if(mail($eimailTo, $subject, $txt, $headers)){
		#echo "Your e-mail send succesfully!";
		$_SESSION["message"] = "Your e-mail send succesfully!";
	}
	else{
		$_SESSION["message"] = "Can not send your e-mail";
		#$error = "Can not send your e-mail";
		#echo "Can not send your e-mail";
	}
	
	header("Location: contact.php");

?>