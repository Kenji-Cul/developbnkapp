<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueid'];
$admin = new User;
$admincheck = $admin->selectLoan($uniqueid);
if($admincheck['loanstatus'] == 'Approved'){
    echo "success";
} else {
    echo "unsuccessful";
}
?>