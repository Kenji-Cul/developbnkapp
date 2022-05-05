<?php 
session_start();
include "projectfile.php";
$email = $_POST['ademail'];
$password = $_POST['adpassword'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($email) || empty($password)){
        $errormsg = "Email and password required to login";
    }else{
        $member = new User;
        $loggedinuser = $member->adminlogin(check_input($email),check_input($password));
        if(empty($loggedinuser)){
            $errormsg = "Invalid login details try again";
        }else{
            $_SESSION['username'] = $loggedinuser['username'];
            $_SESSION['emailaddress'] = $loggedinuser['emailaddress'];
             echo "successful";
        }
    }

    if(isset($errormsg)){
        echo $errormsg;}
}

function check_input($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>