<?php
    
if(isset($_POST['inquire-submit'])){


    $email = $_POST['email'];
	$fullName= $_POST['fullname'];
    $subject = $_POST['inquire_subject'];
    $contactNum = $_POST['contact_num'];
	$message = $_POST['message'];
	
	
	$mailTo ="info@acteccaloocan.com";
	$headers = "From: " .$email;
	$txt ="You have received an email form ". $fullName.". \n\n". $message;
	
mail($mailTo, $subject, $txt, $headers);
	header("Location: ../index.php?mailsend");
	
}