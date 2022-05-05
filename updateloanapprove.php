<?php 
include_once "projectfile.php";
$unique = $_POST['uniqueapproval'];
$loanid = $_POST['loanid'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$member = new User;
$memberuser = $member->updateLoan($unique,$loanid);
}
?>