<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueid'];

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $checker = new User;
    $checksecurity = $checker->select_unique(checkInput($uniqueid));
    if(password_verify($password,$checksecurity['password'])){
        echo "successful";
    } else {
        echo "Invalid Account Password";
    }
}

function checkInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}