<?php 
include "projectfile.php";
$uniqueid = $_POST['unique'];
$admin = new User;
$adminviewer = $admin->delete_user($uniqueid);
?>