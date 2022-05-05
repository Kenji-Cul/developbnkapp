<?php 
session_start();
include "projectfile.php";
$email = $_POST['seenemail'];
$password = $_POST['seenpassword'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($email) || empty($password)){
        $errormsg = "Email and password required to login";
    }else{
        $member = new User;
        $loggedinuser = $member->login(check_input($email));
        if(password_verify($password,$loggedinuser['password'])){
            $_SESSION['firstname'] = $loggedinuser['firstname'];
             $_SESSION['lastname'] = $loggedinuser['lastname'];
             $_SESSION['middlename'] = $loggedinuser['middlename'];
             $_SESSION['phonenumber'] = $loggedinuser['telephone'];
             $_SESSION['email'] = $loggedinuser['emailaddress'];
             $_SESSION['country'] = $loggedinuser['country'];
             $_SESSION['address'] =$loggedinuser['addressof'];
             $_SESSION['accountnum'] = $loggedinuser['account_number'];
             $_SESSION['uniqueid'] = $loggedinuser['unique_id'];
             $_SESSION['nameuser'] = "great123";
             echo "successful";
        }
        else{
            $errormsg = "Invalid login details try again";
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