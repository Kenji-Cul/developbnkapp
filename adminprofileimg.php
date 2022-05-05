<?php 
session_start();
include "projectfile.php";
if(isset($_SESSION['emailaddress'])){
$teacher = new User;
$teacherpic = $teacher->select_adminprofile($_SESSION['emailaddress']);
}
?>