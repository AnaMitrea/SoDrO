<?php
require 'SMTP&PhpMailer/includes/Exception.php';
require 'SMTP&PhpMailer/includes/PHPMailer.php';
require 'SMTP&PhpMailer/includes/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = gethostbyname('smtp.gmail.com');
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "587";
//Set gmail username
$mail->Username = "sodroproject@gmail.com";
$mail->Password ="!9ms4NF?P4pF";
$mail->Subject="Reset your password";
$mail->setFrom("sodroproject@gmail.com");
$mail->Body="Test email";
$mail->addAddress("sodroproject@gmail.com");
//Finally send email
if ( $mail->send() ) {
    echo "Email Sent..!";
}else{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
//Closing smtp connection
$mail->smtpClose();