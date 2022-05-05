<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueid'];
$member = new User;
$checkuser = $member->selectWire($uniqueid);
echo $checkuser['amount'];

?>