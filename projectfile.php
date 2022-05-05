<?php 

/**
 * Author : Teibo Gideon
 * Program : Banking Website
 * Date : March 28,2022
 */

 
class User {
    var $firstname;
    var $lastname;
    var $country;
    var $phonenumber;
    var $emailaddress;
    var $password;
    var $dbcon;

    function __construct(){
        //create object of MySqli Class
        $this->dbcon = new MySqli("localhost","root","","bank_db");
        //check if the connection is okay
        if($this->dbcon->connect_error){
            die("Connection failed: ". $this->dbcon->connect_error);
        }else{
            //echo "Connected Successfully";
        }
    }
    

    function createUser($firstname,$lastname,$middlename,$gender,$maritalstats,$day,$month,$year,$address,$country,$phonenumber,$emailaddress,$password){
        $pwd = password_hash($password,PASSWORD_DEFAULT);
        $uniqueid = rand();
        $account_number = rand();
        $sql = "INSERT INTO user(firstname,lastname,middlename,gender,maritalstatus,dayof,monthof,yearof,addressof,account_number,country,telephone,unique_id,emailaddress,password) VALUES('{$firstname}','{$lastname}','{$middlename}','{$gender}','{$maritalstats}','{$day}','{$month}','{$year}','{$address}','{$account_number}','{$country}','{$phonenumber}','{$uniqueid}','{$emailaddress}','{$pwd}')";
        $result = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            session_start();
             session_unset();
             $_SESSION['user_id'] = $this->dbcon->insert_id;
             $_SESSION['firstname'] = $firstname;
             $_SESSION['lastname'] = $lastname;
             $_SESSION['middlename'] = $middlename;
             $_SESSION['phonenumber'] = $phonenumber;
             $_SESSION['email'] = $emailaddress;
             $_SESSION['country'] = $country;
             $_SESSION['address'] = $address;
             $_SESSION['accountnum'] = $account_number;
             $_SESSION['uniqueid'] = $uniqueid;
             $_SESSION['nameuser'] = "great123";
            echo "success";
        }else{
            //echo "Email address already exists";
            echo $this->dbcon->error;
        }
    }

    function checkEmailAddress($email){
      $sql = "SELECT * FROM user WHERE emailaddress ='{$email}'";
      $result = $this->dbcon->query($sql);
      $row = $result->fetch_assoc();
      if($result->num_rows == 1){
          return $row;
      }else{
          return $row;
      }
    }

    function login($email){
        $sql = "SELECT * FROM user WHERE emailaddress= '{$email}'";
        $result = $this->dbcon->query($sql);
      $row = $result->fetch_assoc();
      if($result->num_rows == 1){
          return $row;
      }else{
          return $row;
      }
    }

    function select_unique($unique){
        $sql = "SELECT * FROM user WHERE unique_id= '{$unique}'";
        $result = $this->dbcon->query($sql);
      $row = $result->fetch_assoc();
      if($result->num_rows == 1){
          return $row;
      }else{
          return $row;
      }
    }

    function add_photo($photo){
        if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $file_error = $_FILES['image']['error'];
        $filetmp = $_FILES['image']['tmp_name'];
      // validate image
        if($file_error > 0){
            $error = "You have not selected a file";
            return $error;
        }
    
        if($filesize > 2097152){
            $error = "Your file should be less than 2mb";
            return $error;
        }
    
        $extensions = array("gif", "png", "jpeg", "svg", "jpg");
        $file_ext = explode(".",$filename);
        $file_ext = end($file_ext);
    
        if(!in_array(strtolower($file_ext), $extensions)){
            $error = $file_ext."File format not supported";
            return $error;
        }
    
        //upload image
        $folder = "profile/";
        $newfilename = time().rand().".".$file_ext;
        $destination = $folder.$newfilename;
        if(move_uploaded_file($filetmp, $destination)){
         $sql = "UPDATE user SET profileimg='{$newfilename}' WHERE emailaddress='{$photo}'";
         $result = $this->dbcon->query($sql);
      
              //check if the connection runs successfully
              if($this->dbcon->affected_rows==1){
                //   echo "<h3 align='center'>Photo added successfully</h3>";
                echo "success";
              }else{
               // echo  $this->dbcon->error;//"<h3 align='center'>There is an error with your file</h3>";
              }
     }
    }
    }

    function admin_photo($photo){
        if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $file_error = $_FILES['image']['error'];
        $filetmp = $_FILES['image']['tmp_name'];
      // validate image
        if($file_error > 0){
            $error = "You have not selected a file";
            return $error;
        }
    
        if($filesize > 2097152){
            $error = "Your file should be less than 2mb";
            return $error;
        }
    
        $extensions = array("gif", "png", "jpeg", "svg", "jpg");
        $file_ext = explode(".",$filename);
        $file_ext = end($file_ext);
    
        if(!in_array(strtolower($file_ext), $extensions)){
            $error = $file_ext."File format not supported";
            return $error;
        }
    
        //upload image
        $folder = "profile/";
        $newfilename = time().rand().".".$file_ext;
        $destination = $folder.$newfilename;
        if(move_uploaded_file($filetmp, $destination)){
         $sql = "UPDATE admintable SET profileimg='{$newfilename}' WHERE emailaddress='{$photo}'";
         $result = $this->dbcon->query($sql);
      
              //check if the connection runs successfully
              if($this->dbcon->affected_rows==1){
                //   echo "<h3 align='center'>Photo added successfully</h3>";
                echo "success";
              }else{
               // echo  $this->dbcon->error;//"<h3 align='center'>There is an error with your file</h3>";
              }
     }
    }
    }



    function select_profile($email){
        $sql ="SELECT * FROM user WHERE emailaddress ='$email'";
        $result = $this->dbcon->query($sql);
         $rows = array();
             if($this->dbcon->affected_rows > 0){
                 while($row = $result->fetch_assoc()){
                     $rows[] = $row;
                      if(empty($row['profileimg'])){
                        $output = '<img src="imagesfolder/user2.png">';
                         }else{
                           $output =' <img src="profile/'.$row['profileimg'].'">';
                         }
                 }
                 echo $output;
                 return $rows;
             }else{
                 return $rows;
             }
         }


         function select_adminprofile($email){
            $sql ="SELECT * FROM admintable WHERE emailaddress ='{$email}'";
            $result = $this->dbcon->query($sql);
             $rows = array();
                 if($this->dbcon->affected_rows > 0){
                     while($row = $result->fetch_assoc()){
                         $rows[] = $row;
                          if(empty($row['profileimg'])){
                            $output = '<img src="imagesfolder/user2.png">';
                             }else{
                               $output =' <img src="profile/'.$row['profileimg'].'">';
                             }
                     }
                     echo $output;
                     return $rows;
                 }else{
                     return $rows;
                 }
             }


         function createLoan($firstname,$lastname,$middlename,$amount,$marital,$occupation,$ssnnumber,$uniqueid,$typeofloan){
            $loanid = rand();
             $sql = "INSERT INTO loan(loan_id,firstname,lastname,middlename,amount,maritalstatus,occupation,ssnnumber,unique_id,typeofloan) VALUES('{$loanid}','{$firstname}','{$lastname}','{$middlename}','{$amount}','{$marital}','{$occupation}','{$ssnnumber}','{$uniqueid}','{$typeofloan}')";

             $result = $this->dbcon->query($sql);
             if($this->dbcon->affected_rows == 1){
                 echo "success";
             }else{
                 //echo $this->dbcon->error;
             }
         }

         function fileCheck($bankname,$receiver,$remitter,$amount,$activation,$checknumber,$clientno,$uniqueid,$address){
             $checkid = rand();
              $sql = "INSERT INTO checktable(check_id,bankname,receiver_name,remitter_name,amount,mt100_activation,check_number,client_number,unique_id,addressof) VALUES('{$checkid}','{$bankname}','{$receiver}','{$remitter}','{$amount}','{$activation}','{$checknumber}','{$clientno}','{$uniqueid}','{$address}')";

              $result = $this->dbcon->query($sql);
             if($this->dbcon->affected_rows == 1){
                 echo "success";
             }else{
                // echo $this->dbcon->error;
             }
         }

         function createAdmin($username,$adminemail,$adminpassword){
             $pwd = md5($adminpassword);
             $sql = "INSERT INTO admintable(username,emailaddress,password) VALUES('{$username}','{$adminemail}','{$pwd}')";

             $result = $this->dbcon->query($sql);
             if($this->dbcon->affected_rows == 1){
                session_start();
                session_unset();
                $_SESSION['username'] = $username;
                $_SESSION['emailaddress'] = $adminemail;
                 echo "success";
             }else{
                 //echo $this->dbcon->error;
             }
         }

         function adminlogin($email,$password){
            $pwd = md5($password);
            $sql = "SELECT * FROM admintable WHERE emailaddress= '{$email}' AND password = '{$pwd}'";
            $result = $this->dbcon->query($sql);
          $row = $result->fetch_assoc();
          if($result->num_rows == 1){
              return $row;
          }else{
              return $row;
          }
        }
    
        function viewusers(){
            $sql ="SELECT * FROM user";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}
        }

        function select_user($uniqueid){
            $sql = "SELECT * FROM user WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows == 1){
                return $row;
            }else{
                return $row;
            }
        }

        function select_loan($uniqueid){
            $sql = "SELECT * FROM loan WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function select_check($uniqueid){
            $sql = "SELECT * FROM checktable WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function select_wire($uniqueid){
            $sql = "SELECT * FROM wiretransfer WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function selectChecked($checkid){
            $sql = "SELECT * FROM checktable WHERE check_id = '{$checkid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function selectLoaned($loanid){
            $sql = "SELECT * FROM loan WHERE loan_id = '{$loanid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function selectWired($wireid){
            $sql = "SELECT * FROM wiretransfer WHERE wire_id = '{$wireid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function select_proof($uniqueid){
            $sql = "SELECT * FROM prooftable WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }
        }

        function delete_user($uniqueid){
            $sql = "DELETE  FROM user WHERE unique_id = '{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "success";
            }else{
                echo $this->dbcon->error;
            }
        }

        function update_account($account,$uniqueid){
            $sql = "UPDATE user SET account_balance = '{$account}' WHERE unique_id='{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "success";
            }else{
                echo $this->dbcon->error;
            }

        }

        function select_account($account,$uniqueid){
            $sql = "SELECT * user FROM  WHERE  account_balance = '{$account}' AND unique_id='{$uniqueid}'";
            $result = $this->dbcon->query($sql);
            $rows = array();
            if($this->dbcon->affected_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }else{
                return $rows;
            }

        }

        function insertProof($unique,$date){
            if(isset($_FILES['image'])){
            $filename = $_FILES['image']['name'];
            $filesize = $_FILES['image']['size'];
            $filetype = $_FILES['image']['type'];
            $file_error = $_FILES['image']['error'];
            $filetmp = $_FILES['image']['tmp_name'];
          // validate image
            if($file_error > 0){
                $error = "You have not selected a file";
                return $error;
            }
        
            if($filesize > 2097152){
                $error = "Your file should be less than 2mb";
                return $error;
            }
        
            $extensions = array("gif", "png", "jpeg", "svg", "jpg");
            $file_ext = explode(".",$filename);
            $file_ext = end($file_ext);
        
            if(!in_array(strtolower($file_ext), $extensions)){
                $error = $file_ext."File format not supported";
                return $error;
            }
        
            //upload image
            $folder = "proof/";
            $newfilename = time().rand().".".$file_ext;
            $destination = $folder.$newfilename;
            if(move_uploaded_file($filetmp, $destination)){
             $sql = "INSERT INTO  prooftable(unique_id,proofimg,proofdate) VALUES('{$unique}','{$newfilename}','{$date}')";
             $result = $this->dbcon->query($sql);
          
                  //check if the connection runs successfully
                  if($this->dbcon->affected_rows==1){
                    //   echo "<h3 align='center'>Photo added successfully</h3>";
                    echo "success";
                  }else{
                   // echo  $this->dbcon->error;//"<h3 align='center'>There is an error with your file</h3>";
                  }
         }
        }
        }

        function updateUser($unique,$address,$phoneno){
            $sql = "UPDATE user SET addressof='{$address}',telephone='{$phoneno}' WHERE unique_id='{$unique}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "success";
            }else{
                echo $this->dbcon->error;
            }
        }

        function updatePassword($unique,$password){
            $sql2 = "SELECT * FROM user WHERE token='{$unique}'";
            $result = $this->dbcon->query($sql2);
            $rows = $result->fetch_assoc();
            if($result->num_rows == 1){
                           $pwd = password_hash($password,PASSWORD_DEFAULT);
                            $sql = "UPDATE user SET password='{$pwd}' WHERE token='{$unique}'";
                            $result = $this->dbcon->query($sql);
                            if($this->dbcon->affected_rows == 1){
                                echo "success";
                            }else{
                                echo "Could not update password try again later";
                            }
               
            }else{
                  echo "Invalid User";
            }
                   
        }

        function selectCheck($unique){
            $sql = "SELECT * FROM checktable WHERE unique_id='{$unique}' AND status='Unapproved' ORDER BY user_id DESC LIMIT 1";
            $result = $this->dbcon->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows == 1){
                return $row;
            }else{
                return $row;
            }
        }

        function selectWire($unique){
            $sql = "SELECT * FROM wiretransfer WHERE unique_id='{$unique}' AND wirestatus='Unapproved' ORDER BY user_id DESC LIMIT 1";
            $result = $this->dbcon->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows == 1){
                return $row;
            }else{
                return $row;
            }
        }

        function selectLoan($unique){
            $sql = "SELECT * FROM loan WHERE unique_id='{$unique}' AND loanstatus='Unapproved' ORDER BY user_id DESC LIMIT 1";
            $result = $this->dbcon->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows == 1){
                return $row;
            }else{
                return $row;
            }
        }

        function updateCheck($unique,$checkid){
            $sql = "UPDATE checktable  SET status = 'Approved' WHERE unique_id='{$unique}' AND check_id='{$checkid}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "successful";
            }else{
                echo $this->dbcon->error;
            }
        }

        function updateLoan($unique,$loanid){
            $sql = "UPDATE loan  SET loanstatus = 'Approved' WHERE unique_id='{$unique}' AND loan_id='{$loanid}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "successful";
            }else{
                echo $this->dbcon->error;
            }
        }

        function updateWire($unique,$wireid){
            $sql = "UPDATE wiretransfer  SET wirestatus = 'Approved' WHERE unique_id='{$unique}' AND wire_id='{$wireid}'";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
                echo "successful";
            }else{
                echo $this->dbcon->error;
            }
        }


        function createWireTransfer($uniqueid,$fullname,$accountnum,$address,$email,$bankname,$bankad,$swiftcode,$amount,$mobile){
            $wire_id = rand();
            $sql = "INSERT INTO wiretransfer(wire_id,unique_id,receiverfullname,receiveraccount,receiveraddress,receiveremail,receiverbankname,receiverbankad,receiverswiftcode,amount,mobilenumber) VALUES('{$wire_id}','{$uniqueid}','{$fullname}','{$accountnum}','{$address}','{$email}','{$bankname}','{$bankad}','{$swiftcode}','{$amount}','{$mobile}')";
            $result = $this->dbcon->query($sql);
            if($this->dbcon->affected_rows == 1){
               echo "success";
            } else {
                echo $this->dbcon->error;
            }
        }
    

        // public function forgetpass($email){

        //     $email = mysqli_real_escape_string($this->dbcon,
        //     $_POST['email']);
         
        //       $sql = "SELECT unique_id FROM user WHERE emailaddress = '$email'";
        //       $result = $this->dbcon->query($sql);
         
        //       if($result->num_rows > 0){
         
        //         $str = "0123456789AabBcCdDeEFfgGhiIjJkLmMnNoPQrSTuVwxYZ";
        //         $str = str_shuffle($str);
        //         $str = substr($str, 0, 15);
        //           require 'access.php';
                 

        //         require 'vendor/autoload.php';    
    
         
        //           $mail = new PHPMailer(true);
         
         
        //           $mail->isSMTP();                                            // Set
        //          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        //        $mail->SMTPDebug = 3;
        //       $mail->SMTPAuth   = true;                                   //
        //       //Enable SMTP authentication
        //       $mail->Username   = EMAIL;                     // SMTP username
        //       $mail->Password   = PASS;                               // SMTP password
        //       $mail->SMTPSecure = 'tls';                                            
        //  //Enable TLS encryption, `ssl` also accepted
        //       $mail->Port       = 587; 
        //       $mail->isHTML(true);                                   // TCP
        //  //port to connect to
         
        //       //Recipients
        //     //   $mail->setFrom('simpletech.notify@gmail.com', 'notification');
        //       $mail->addAddress($_POST['email'],'simpletech.notify@gmail.com');  
        //       $mail->From = "gideonboy012@gmail.com";
        //       $mail->FromName = "Gideon Teibo";   // Add a recipient
        //                     // Name is optional
        //     //   $mail->addReplyTo('info@simpletech.com.ng');
         
        //  $url="http://localhost/project/resetpass.php?token=".$str.'&email='.$email;
        //       $mail->isHTML(true);                                  // Set email
        //  //format to HTML
        //       $mail->Subject = 'Password Reset Notification';
        //     $mail->Body    = "Please click the link below to reset your password
        //  to your Simple banking Software or copy link to your browser if not
        //  clickable ...If you did not attempt to change your Password please
        //  quickly notify the Software admininstrator.".''."<button class='btn
        //  btn-info'><a href='$url' style='color:white'>password
        //  reset</a></button>";
         
         
        //  if (!$mail->send()) {
         
        //  } else{
        //     // $outemail= 'Message has been sent: ';
        //        }
         
         
         
        //         $sql = "UPDATE user SET token = '$str' WHERE emailaddress = '$email'";
        //         $result = $this->dbobj->conn->query($sql);
         
        //         $out= "Please check your Registered mail inbox and follow the
        //  instructions to reset password";
         
        //       } else {
         
        //         $out= "Invalid input. Please check the email.";
        //       }
         
         
        //  return @$outemail . ' ' . $out .' ' ."<a href='index.php'>Back to Login
        //  page</a>";
         
        //     }


        //     public function passret($email,$token,$newpass,$rtpass,$reset){

        //         $email = mysqli_real_escape_string($this->dbobj->conn, $email);
        //              $token = mysqli_real_escape_string($this->dbobj->conn, $token);
                
        //              $sql = "SELECT unique_id FROM user WHERE emailaddress = '$email' AND token =
        //         '$token'";
        //              $result = $this->dbcon->query($sql);
                
        //              if($result->num_rows > 0){
                
        //                if(isset($reset)){
                
        //                  $np = mysqli_real_escape_string($this->dbobj->conn, $newpass);
        //                  $rp = mysqli_real_escape_string($this->dbobj->conn, $rtpass);
                
        //                  $sql = "SELECT * FROM user WHERE emailaddress = '$email'";
        //                  $result = $this->dbcon->query($sql);
                
        //                  if($np == $rp){
                
        //                    $hash = md5(strrev(trim($np)));
                
        //                    $sql = "UPDATE user SET password = '$hash' AND token = '' WHERE emailaddress = '$email'";
        //                    if ($this->dbcon->query($sql)==true) {
        //                      $out = "<div class='alert alert-success'>Password reset was
        //         successful! <a href='index.php'>Back to Login page</a></div>" ;
        //                    }
                
                
        //                  } else {
                
        //                    $out="<div class='alert alert-warning'>Password does not
        //         match!</div>";
        //                  }
        //                }
                
        //              } else {
                
        //                $out= "<div class='alert alert-danger'>Please, check your
        //         link!</div>";
        //              }
                
        //         return $out;
                
                
        //         }
                
         
}

?>
