<?php 
include "projectfile.php";
$account = $_POST['account'];
$accountid = $_POST['accountid'];
$admin = new User;
// $accountinfo = $admin->select_account($account,$accountid);
// if($account > $accountinfo['account_balance']){
//     $output = "Credit";
// } elseif($account < $accountinfo['account_balance']){
//     $output = "Debit";
// }
// echo $output;
$editor = $admin->update_account($account,$accountid);
?>