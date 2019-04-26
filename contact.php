<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

	try {
		//Server settings
		$mail->SMTPDebug = 0;                                       // Enable verbose debug output
		$mail->isSMTP();                                            // Set mailer to use SMTP
		$mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'a.abdelfatah.100@gmail.com';                     // SMTP username
		$mail->Password   = 'bxxpyhkudxpsxllt';                               // SMTP password
		$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;                                    // TCP port to connect to
	
		//Recipients
		$mail->setFrom('a.abdelfatah.100@gmail.com', 'Mailer');
		//$mail->addAddress('', 'Joe User');     // Add a recipient
		$mail->addAddress('hasbaty@yahoo.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
	
		// Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		$body = "\nName: {$_POST['name']}\nEmail: {$_POST['email']}\n\n\n{$_POST['message']}\n\n";
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'hello from vr';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
else{
	echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
}
?>