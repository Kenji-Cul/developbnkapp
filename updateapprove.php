<?php 
include_once "projectfile.php";
$unique = $_POST['uniqueapproval'];
$checkid = $_POST['checkid'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$member = new User;
$memberuser = $member->updateCheck($unique,$checkid);
}
?>