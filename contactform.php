<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
ob_start();
require 'vendor/autoload.php';
define("PASSWORD","leculzsnnfggojer");
define("EMAIL","bankdevelopmentfin@gmail.com");



   

    // $mailTo = "bankdevelopmentfin@gmail.com";
    // $headers = "From: ".$mailFrom;
    // $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    // mail($mailTo, $subject, $txt, $headers);
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                     $fullname = $_POST['fullname'];
                     $number = $_POST['phonenumber'];
                     $emailFrom= $_POST['email'];
                     $message = $_POST['message'];
                     if(empty($fullname) || $fullname==""){
                         $errormsg = "Fullname field is required";
                        
                     }
                     elseif(empty($number) || $number==""){
                         $errormsg = "Phonenumber field required";
                        
                     }
                     elseif(empty($emailFrom) || $emailFrom==""){
                     $errormsg = "Email field required";
                    
                     }
                     elseif(empty($message) || $message==""){
                     $errormsg = "Message field required";
                    
                     }
                  else {
                     
                
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
    $mail->Subject = 'From a user in your website';
    $mail->Body = "<p>You received an email from ".$emailFrom."</p><br><p>Name: ".$fullname."</p><br><p>Phone Number: ".$number."</p><br><p>Message: ".$message."</p>";
    $mail->AltBody = "This is the plain text version of the email content";
    $mail->From = $emailFrom;
    $mail->FromName = "Website User";
    $mail->AddAddress("bankdevelopmentfin@gmail.com");
    // $mail->addReplyTo('info@simpletech.com.ng');
    try {
        $mail->send();
        echo "Your message has been sent";
       $successmsg = "Your message has been sent";
    } catch (Exception $e) {  
        echo "Mailer Error: " . $mail->ErrorInfo;
        $errormsg = "Sorry,failed to send your message";
    }




}
header("Location: contact.php?error=$errormsg&success=$successmsg");
}

ob_end_flush();
   