<?php 
include "projectfile.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$phonenumber = $_POST['telephone'];
$email = $_POST['email'];
$country = $_POST['country'];
$password = $_POST['password'];
$secondpassword = $_POST['secondpassword'];
$address = $_POST['addressof'];
$gender = $_POST['gender'];
$marital = $_POST['maritalstats'];
$day = $_POST['dob'];
$month = $_POST['mob'];
$year = $_POST['yob'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $gender = $_POST['gender'];
    if(empty($firstname) || $firstname == ""){
        $errormsg = "Please input your firstname";
    }

    elseif(empty($lastname) || $lastname == ""){
        $errormsg = "Please input your lastname";
    }

    elseif(empty($middlename) || $middlename == ""){
      $errormsg = "Please input your middlename";
  }
    elseif(empty($password) || $password == ""){
        $errormsg = "Please input your password";
      }
      elseif(strlen($password) <= 5){
         $errormsg = "Your password must be more than five characters";
      }

      elseif($password != $secondpassword){
        $errormsg = "Passwords do not match";
      }

      elseif(empty($email) || $email == ""){
        $errormsg = "Please input your email";
      }

      elseif(empty($phonenumber) || $phonenumber == "" || $phonenumber == "2147483647"){
        $errormsg = "Please input your phone number";
      }



      elseif(empty($country) || $country == "select"){
        $errormsg = "Please fill in your country name";
      }

      elseif(empty($address) || $address == ""){
        $errormsg = "Please fill in your address";
      }

      elseif(!isset($gender) || empty($gender)){
        $errormsg = "Please choose your gender";
      }

      elseif(empty($marital) || $marital == ""){
        $errormsg = "Please choose your marital status";
      }

      elseif(empty($day) || $day == "Day"){
        $errormsg = "Choose your day of birth";
      }

      elseif(empty($month) || $month == "Month"){
        $errormsg = "Choose your month of birth";
      }

      elseif(empty($year) || $year == "Year"){
        $errormsg = "Choose your year of birth";
      }

      else{
          $member = new User;
          $emailuser = $member->checkEmailAddress(checkInput($email));
          if(!empty($emailuser)){
            $errormsg = "Email Address already exists";
          }else{
          $user = $member->createUser(checkInput($firstname),checkInput($lastname),checkInput($middlename),checkInput($gender),checkInput($marital),checkInput($day),checkInput($month),checkInput($year),checkInput($address),checkInput($country),checkInput($phonenumber),checkInput($email),checkInput($password));
          //echo $user;
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