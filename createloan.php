<?php 
session_start();
include "projectfile.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$marital = $_POST['marital'];
$occupation = $_POST['occupation'];
$ssnnumber = $_POST['ssnnumber'];
$amount = $_POST['amount'];
$uniqueid = $_SESSION['uniqueid'];
$typeofloan = $_POST['loan'];
$checkpass = $_POST['checkout'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($firstname) || $firstname == ""){
        $errormsg = "Please input your firstname";
    }

    elseif(empty($lastname) || $lastname == ""){
        $errormsg = "Please input your lastname";
    }

    elseif(empty($middlename) || $middlename == ""){
        $errormsg = "Please input your middlename";
    }
    elseif(empty($marital) || $marital == ""){
        $errormsg = "Please input your marital status";
      }

      elseif(empty($occupation) || $occupation == ""){
        $errormsg = "Please input your occupation";
      }

      
      elseif(empty($amount) || $amount == ""){
        $errormsg = "Please input your amount";
      }


      elseif(empty($ssnnumber) || $ssnnumber == ""){
        $errormsg = "Please input your ssn number";
      }

      elseif(empty($typeofloan) || $typeofloan == ""){
        $errormsg = "Please fill in your loan type";
      }

      elseif(empty($checkpass) || $checkpass == ""){
         $errormsg = "Password field is required";
      }

      else{
        $checker = new User;
        $checksecurity = $checker->select_unique(checkInput($uniqueid));
        if(password_verify($checkpass,$checksecurity['password'])){
          $member = new User;
          $user = $member->createLoan(checkInput($firstname),checkInput($lastname),checkInput($middlename),checkInput($amount),checkInput($marital),checkInput($occupation),checkInput($ssnnumber),$uniqueid,checkInput($typeofloan));
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