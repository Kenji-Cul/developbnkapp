<?php 
session_start();
include "projectfile.php";
$email = $_SESSION['email'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $member = new User;
  $user = $member->add_photo($email);
  echo $user;
} 
?>