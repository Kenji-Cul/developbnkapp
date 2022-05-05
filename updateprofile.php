<?php 
session_start();
include_once "projectfile.php";
$address = $_POST['profilead'];
$phonenumber = $_POST['profileno'];
$unique = $_SESSION['uniqueid'];

if(empty($address) || empty($phonenumber)){
    echo "Please fill in all fields";
} else {
    $member = new User;
    $user = $member->updateUser($unique,checkInput($address),checkInput($phonenumber));
}

function checkInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>