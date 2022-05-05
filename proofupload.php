<?php 
include_once "projectfile.php";
$unique = $_POST['unique'];
$date = $_POST['date'];
$member = new User;
$admin = $member->insertProof($unique,$date);
?>