<?php 
include "projectfile.php";
$username = $_POST['adminname'];
$adminemail = $_POST['adminemail'];
$adminpassword = $_POST['adminpassword'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($username) || $username == ""){
        $errormsg = "Please input your username";
    }

      elseif(empty($adminemail) || $adminemail == ""){
        $errormsg = "Please input your email";
      }

      elseif(empty($adminpassword) || $adminpassword == ""){
        $errormsg = "Please input your password";
      }
      elseif(strlen($adminpassword) <= 5){
         $errormsg = "Your password must be more than five characters";
      }

      else{
          $member = new User;
          $user = $member->createAdmin(checkInput($username),checkInput($adminemail),checkInput($adminpassword));
          //echo $user;
      }

      if(isset($errormsg)){
        echo $errormsg;}

}

function checkInput($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>