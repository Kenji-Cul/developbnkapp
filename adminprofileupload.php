<?php 
session_start();
include "projectfile.php";
$email = $_SESSION['emailaddress'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $member = new User;
  $user = $member->admin_photo($email);
  echo $user;
} 
?>