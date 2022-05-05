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
$mail->Subject = 'Thank you for choosing Development Bank';
$mail->Body = '<div style="width:100%; height: 100%; display:flex; align-content:center; justify-content:center; flex-direction: column; background: #BBD2C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #292E49, #536976, #BBD2C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 padding:8em; padding-left:0;">
<div style="padding:4em;">
  <div style="text-align:left; color:white!important;">
  <p style="color:white!important;">Dear Valued Customer</p>
    <p style="color:white!important;">Welcome to Development Bank</p>
    <p style="color:white!important;">This is to acknowledge receipt of your informations and your account has been fully verified</p>
     <br>
     <br>
    <p style="color:white!important;">We are very pleased to serve you as one of our valued customers. We thank you for choosing us and we are looking forward to building a sustainable banking relationship with you. Feel free to apply for loans and grants, BTC, Credit Cards and forex trading,our staffs are commmitted towards our customers banking goals and building a reliable and safest modes of savings.</p>
    <br>
    <br>
    <br>
    <p style="color:white!important;">Please keep your password and informations safe</p>
  </div>
  
    
</div>
</div>';
$mail->AltBody = "This is the plain text version of the email content";
$mail->From = "bankdevelopmentfin@gmail.com";
$mail->FromName = "Development Bank";
$mail->AddAddress($email);
$mail->AddReplyTo('bnkdevelop@info.com');
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

header("Location: profile.php?email=verifiedsuccessfully");

ob_end_flush();
?>