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
		$mail->Host       = 'smtp.ipage.com';           //'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'eng.adel@brightvision-tech.com';                //'a.abdelfatah.100@gmail.com';                     // SMTP username
		$mail->Password   = 'Adel3Dmax@@';               //'bxxpyhkudxpsxllt';                               // SMTP password
		$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;                                    // TCP port to connect to
	
		//Recipients
		$mail->setFrom($_POST['email'], $_POST['name']);
	
		$mail->addAddress('eng.adel@brightvision-tech.com');               // Name is optional
	
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