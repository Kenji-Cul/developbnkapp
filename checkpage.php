<?php 
session_start();
include "projectfile.php";
$bankname = $_POST['bankname'];
$receiver = $_POST['receiver'];
$remitter = $_POST['remitter'];
$amount = $_POST['amount'];
$activation = $_POST['swiftcode'];
$checknumber = $_POST['checkno'];
$clientno = $_POST['clientno'];
$address = $_POST['address'];
$uniqueid = $_SESSION['uniqueid'];
$checkin = $_POST['checkin'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($bankname) || $bankname == ""){
        $errormsg = "Please input your bank name";
    }

    elseif(empty($receiver) || $receiver == ""){
        $errormsg = "Please input your receiver name";
    }

    elseif(empty($remitter) || $remitter == ""){
        $errormsg = "Please input the name of your remitter";
    }
    elseif(empty($amount) || $amount == ""){
        $errormsg = "Please input your amount";
      }

      elseif(empty($activation) || $activation == ""){
        $errormsg = "Please input your activation number";
      }

      elseif($activation !== "B1V1219001502"){
        $errormsg = "Invalid Swift Code";
      }

      elseif(empty($checknumber) || $checknumber == ""){
        $errormsg = "Please input your check number";
      }

      elseif(empty($clientno) || $clientno == ""){
        $errormsg = "Please input your client number";
      }

      elseif(empty($address) || $address == ""){
        $errormsg = "Please input your address";
      }

      elseif(empty($checkin) || $checkin == ""){
        $errormsg = "Password field is required";
     }

      else{
        $checkerkey = new User;
        $checksecurity = $checkerkey->select_unique(checkInput($uniqueid));
        if(password_verify($checkin,$checksecurity['password'])){
          $member = new User;
          $user = $member->fileCheck(checkInput($bankname),checkInput($receiver),checkInput($remitter),checkInput($amount),checkInput($activation),checkInput($checknumber),checkInput($clientno),$uniqueid,checkInput($address));
          //echo $user;
        } else {
          $errormsg = "Invalid User Password";
        }
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