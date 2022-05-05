<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueid'];
$admin = new User;
$admincheck = $admin->selectWire($uniqueid);
if($admincheck['wirestatus'] == 'Approved'){
    echo "success";
} else {
    echo "unsuccessful";
}
?>