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
$lastname = $_SESSION['lastname'];

$price = $_POST['price'];
$firstname = $_POST['firstname'];
$accountbal = $_POST['accountbal'];
$user =new User;
$adminviewer = $user->select_user($accountbal);
$accountbal2 = $adminviewer['account_balance'];
$email = $_POST['email'];
$credit = $_POST['credit'];
$date = date("l jS \of F Y h:i:s A");



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
$mail->Subject = 'DevBank Transaction Alert['.$credit.':'.$price.']';
$mail->Body = '<div style="width:100%; height: 100%; display:flex; align-content:center; justify-content:center; flex-direction: column; background: #BBD2C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #292E49, #536976, #BBD2C5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 padding:8em; padding-left:0;">
<div style="padding:4em;">
  <h2 style="text-transform:uppercase; color:white;">Dear '.$firstname.'  '.$adminviewer['lastname'].',</h2>
  <p>Below are your trannsaction details</p>
    <h4 style="color:black!important; width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;  width:100%; padding:1em 0.5em; border-radius: 10px;">Txn: '.$credit.'</h4>
    <h4 style="color:black!important;   width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">Acc: 2XX..32X</h4>
    <h4 style="color:black!important;  width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">Amount: $'.$price.'</h4>
    <h4 style="color:black!important;  width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">DP:TNF-DEVELOPMENT-BANK/ USSD_'.$firstname.'</h4>
    <h4 style="color:black!important;  width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">Date:'.$date.'</h4>
    <h4 style="color:black!important;  width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">Bal: $'.$accountbal2.'</h4>
    <h4 style="color:black!important;   width:100%; background-color: rgba(255, 255, 255, 0.3);   box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding:1em 0.5em; border-radius: 10px;">TRANSFER WITH DB</h4>
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

header("Location: users.php?alert=sent");

ob_end_flush();
?>