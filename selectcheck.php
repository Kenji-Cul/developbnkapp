<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueid'];
$member = new User;
$checkuser = $member->selectCheck($uniqueid);
if(isset($checkuser['amount'])){
echo $checkuser['amount'];
} else {
    echo "noamount";
}
?>