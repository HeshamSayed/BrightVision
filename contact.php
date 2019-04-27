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
		$mail->Host       = 'smtp.brightvision-tech.com';           //'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'test@brightvision-tech.com';                //'a.abdelfatah.100@gmail.com';                     // SMTP username
		$mail->Password   = 'Test123456';               //'bxxpyhkudxpsxllt';                               // SMTP password
		$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 465;                                    // TCP port to connect to
	
		//Recipients
		$mail->setFrom($_POST['email'], $_POST['email']);
	
		//$mail->addAddress('', 'Joe User');     // Add a recipient
		$mail->addAddress('awadmohamed233@gmail.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
	
		// Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		$body = "\nName: {$_POST['name']}<br><br>Sender: {$_POST['email']}<br><br>Message:  {$_POST['message']}\n\n";
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = "Message From {$_POST['email']}";
		$mail->Body    = $body;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		echo true;
	} catch (Exception $e) {
		echo false;
	}
}
else{
	echo false;
}
?>