<?php 
session_start();
include_once "projectfile.php";
$unique = $_SESSION['uniqueid'];
$fullname = $_POST['fullname'];
$accountnum = $_POST['accountnum'];
$fulladd = $_POST['fullad'];
$emailadd = $_POST['emailad'];
$bankname = $_POST['bankname'];
$bankad = $_POST['bankad'];
$swiftcode = $_POST['swiftcode'];
$amount = $_POST['amount'];
$mobilenum = $_POST['mobilenum'];
$password = $_POST['accpassword'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(empty($fullname) || empty($accountnum) || empty($fulladd) || empty($emailadd) || empty($bankname) ||empty($bankad) || empty($swiftcode) || empty($amount) || empty($mobilenum)){
      $errormsg= "Please input all fields";
  }else{
    $checker = new User;
  $checksecurity = $checker->select_unique(checkInput($unique));
  if(!password_verify($password,$checksecurity['password'])){
      $errormsg=  "Invalid Account Password";
  } else {
  $member = new User;
  $create = $member->createWireTransfer(checkInput($unique),checkInput($fullname),checkInput($accountnum),checkInput($fulladd),checkInput($emailadd),checkInput($bankname),checkInput($bankad),checkInput($swiftcode),checkInput($amount),checkInput($mobilenum));
  }
  }

  if(isset($errormsg)){
    echo $errormsg;}
}

function checkInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>