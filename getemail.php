<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
define("PASSWORD","leculzsnnfggojer");
define("EMAIL","bankdevelopmentfin@gmail.com");
ob_start();
session_start();
include "projectfile.php";
$email = $_SESSION['email'];
$firstname = $_SESSION['firstname'];
$random = mt_rand();


$mail = new PHPMailer(true);
$mail->SMTPDebug = 3;   
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->isHTML(true);
$mail->Username = EMAIL;
$mail->Password = PASSWORD;
// $mail->SetFrom('simpletech.notify@gmail.com', 'notification');
$mail->Subject = 'Verification of email';
$mail->Body = '<h4>Hi,'.$firstname.'</h4><br><h2>Input this  number for email verification--->'.$random.'</h2>';
$mail->AltBody = "This is the plain text version of the email content";
$mail->From = "gideonboy012@gmail.com";
$mail->FromName = "Development Bank";
$mail->AddAddress($email);
// $mail->addReplyTo('info@simpletech.com.ng');
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

header("Location: emailverify.php?random=$random");

ob_end_flush();
?>