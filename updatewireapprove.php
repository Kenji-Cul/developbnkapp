<?php 
include_once "projectfile.php";
$unique = $_POST['wireapproval'];
$loanid = $_POST['wireid'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$member = new User;
$memberuser = $member->updateWire($unique,$loanid);
}
?>