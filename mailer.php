<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

if(isset($_POST['SendMail']))
{

require 'vendor/autoload.php'; 
    
  $message= $_POST['message'];
  $from= $_POST['from'];

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 0;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'xxxxx@gmail.com';	    // here use your mail id			 
	$mail->Password = 'zzzzzz';			      //use your password here			 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('from@gmail.com', $from);		 
	$mail->addAddress('yyyyyy@gmail.com'); 
	$mail->addAddress('yyyyyy@gmail.com', 'Admin');         // receipient mail address

	
	$mail->isHTML(true);								 
	$mail->Subject = 'Complaint From User On Webchat'; 
	$mail->Body = $message; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
}


?> 
