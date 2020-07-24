<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

require 'php_mailer/src/Exception.php';
require 'php_mailer/src/PHPMailer.php';
require 'php_mailer/src/SMTP.php';
	require_once("php_mailer\src\PHPMailer.php");
	
	$mail= new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'pk.pratiksha17@gmail.com';
	$mail->Password = 'taurus@8094';
	$mail->SetFrom('no-reply@gmail.com');
	$mail->Subject = 'Hello';
	$mail->Body = 'A test email';
	$mail->AddAddress('pratiksha.p.k.17@gmail.com');
	$mail->Send();
?>