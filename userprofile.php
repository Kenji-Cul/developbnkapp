<?php 
session_start();
include_once "projectfile.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>blueneek</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="animate.min.css">
      <link rel="stylesheet" type="text/css" href="icons/css/all.css">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo3.jpg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item ">
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li> 
                              </ul>
                              <div class="sign_btn" style="display:flex; flex-direction:column;"><h3><span><?php if(isset($_SESSION['username'])){echo "Hi, ".$_SESSION['username'];}?></span></h3></div>
                              <div class="sign_btn"><a href="logout.php">Log Out</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
       
       <style>
          .accountbalance{
             position:absolute;
             right:4em;
          }

          .check{
             position:absolute;
             left:4em;
          }

          .check button{
             padding:1.4em;
             border-radius:10px;
             background-color: #bbb;
          }

          .check button:hover{
            border: 2px solid #000;
          }

          .check a{
              color:black!important;
          }

          .check a:hover{
            color:black!important;
          }
          .button{
             padding: 10px 20px;
             color:white;
             border-radius: 20px;
             background-color: #4f4f4f;
             border: 2px solid black;
             font-size: 20px;
             cursor:pointer;
             position:absolute;
             top:12em;
          }
          .button:hover{
            box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
            padding: 7px 15px;
          }
          .linkupload input[type="submit"]{
    background-color: white;
     padding:20px 10px;
     border-radius:50%;
     color: black;
     cursor:pointer;
 }

 .linkupload input[type="submit"]:hover{
    background:black;
    color:white;
 }

 .upload label:hover{
   background:black;
    color:white;
    cursor:pointer;
 }
          .upload label{
             cursor:pointer;
            padding:19px 14px;
     border-radius:50%;
     display:flex;
     align-items:center;
     justify-content:center;
     background-color: white;
     color: black;
 }
          .upload input[type="file"]{
     display:none;
 }
 .uploaddiv form{
    width:100%;
    height: 100%;
    display:flex;
   align-items:center;
   justify-content:center;
   gap:2em;
 }
          .uploaddiv{
             display:none;
             height:7em;
             width:20em;
             background-color: #aaa;
             position:absolute;
             top: -10.2em;
             right:10%;
             box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
             border-radius: 0 0 5px 5px;
          }
          .bradius{
             width:17.2em;
             height:17em;
             border: 2px solid #aaa;
             border-radius:50%;
             position: absolute;
             top:1em;
             margin-left:1%;
          }
          .bradius:hover{
            border: 2px solid blue;
            cursor:pointer;
          }
          .imagediv img{
             width: 19em;
             height: 19em;
             object-fit:cover;
             clip-path:circle(40%);
          }
          .imagediv{
             position: relative;
             display:flex;
             align-items:center;
             justify-content:center;
          }
          .divdisplay{
             display:block;
          }
       </style>
      
      <div class="users" id="users">
      <div class="heading" style="display:flex; align-items:center; justify-content:space-around;">
      <h2 style="text-align:center; border: 3px dashed blue; width:150px; padding: 0.5em 1em;">USER</h2>
     <form action="" id="deleteform">
     <?php 
           $admin = new User;
           $adminviewer = $admin->select_user($_REQUEST['uniqueid']);
          ?>
         <input type="text" name="unique" id="unique" value="<?php echo $adminviewer['unique_id'];?>">
         <button id="deletebtn">DELETE USER</button>
     </form>
      </div>
          <?php 
           $admin = new User;
           $adminviewer = $admin->select_user($_REQUEST['uniqueid']);
          ?>
          <div class="heading">
          <?php if(!empty($adminviewer['profileimg'])){?>
              <img src="profile/<?php echo $adminviewer['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
      </div>

      <form action="sendalert.php" id="sendform" class="sendform" style="display:flex; width:100%; justify-content:center; align-items:flex-end; flex-direction:column;" method="POST">
         <select name="credit" id="">
            <option value="select">--Pls Select--</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
         </select>
         <input type="text" name="price" placeholder="Enter added amount">
         <input type="text" name="firstname" value="<?php echo $adminviewer['firstname'];?>">
         <input type="hidden" name="accountbal" value="<?php echo $adminviewer['unique_id'];?>">
         <input type="hidden" name="email" value="<?php echo $adminviewer['emailaddress'];?>">
         <button type="submit">Send Alert</button>
      </form>

      <style>
         #sendform{
            transform: translateY(-200vh);
            transition: 2s;
         }
         .showalertdiv{
            transform: translateY(0)!important;
         }

         #sendform select{
            width:13em;
            background:transparent;
            padding:0.3em 1em;
            border:none;
            outline:none;
            border-bottom: 2px solid white;
         }

         #sendform input{
            background:transparent;
            padding:0.3em 1em;
            border:none;
            outline:none;
            border-bottom: 2px solid white;
         }

         #sendform button{
        border: 3px dashed white;
        padding: 0.5em 1em;
        border-radius: 9px;
        background-color: blue;
        color:white;
      }

      #sendform button:hover{
         border: 3px dashed #bbb;
         color:black;
      }
      </style>

      

      <div class="infodiv">
          <div class="profileimg">
          <?php if(!empty($adminviewer['profileimg'])){?>
              <img src="profile/<?php echo $adminviewer['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
          </div>
          <div class="fname">
              <h4><?php echo $adminviewer['firstname'];?></h4>
          </div>

          <div class="lname">
              <h4><?php echo $adminviewer['lastname'];?></h4>
          </div>

          <div class="lname">
              <h4><form action="" id="accountform" style="display:none;" method="POST">
                 <input type="text" name="account" id="" value="<?php echo $adminviewer['account_balance'];?>">
                 <input type="text" name="accountid" style="display:none;" id="" value="<?php echo $adminviewer['unique_id'];?>">
                   <button  id="accountbtn">SAVE</button>
              </form>
              <span>&#36;<?php echo $adminviewer['account_balance'];?></span>
              <button id="editbtn">EDIT</button>
            </h4>
          </div>

      </div>


      <div class="heading">
      <h2 style="text-align:center; border: 3px dashed blue; width:150px; padding: 0.5em 1em;">LOANS</h2>
      </div>

      <?php 
           $admin = new User;
           $adminloan = $admin->select_loan($_REQUEST['uniqueid']);
           $counter = 0;
       if(!empty($adminloan)){
          foreach($adminloan as $key => $value){
          ?>
           <div class="approval">
           <h4 style="color:red;"><?php echo $value['loanstatus'];?></h4>
         </div>
         <a href="loansapproval.php?loanid=<?php echo $value['loan_id'];?>&uniqueid=<?php echo $_REQUEST['uniqueid'];?>">
      <div class="infodiv">
          <div class="profileimg">
          <?php if(!empty($adminviewer['profileimg'])){?>
              <img src="profile/<?php echo $adminviewer['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
          </div>
          <div class="fname">
              <span>Marital Status</span>
              <h4><?php echo $value['maritalstatus']?></h4>
          </div>

          <div class="lname">
          <span>Occupation</span>
              <h4><?php echo $value['occupation']?></h4>
          </div>

          <div class="lname">
          <span>Type of loan</span>
              <h4><?php echo $value['typeofloan']?></h4>
          </div>


          <div class="email">
          <span>SSN Number</span>
              <h4><?php echo $value['ssnnumber']?></h4>
          </div>
      </div>
              </a>
              <div style="padding:3em;"></div>
      <?php }}else{?>
        <div class="infodiv" style="display:flex; align-items:center; justify-content:center;"><h1>No Loans For This User</h1></div>
        <?php }?>


      <div class="heading">
      <h2 style="text-align:center; border: 3px dashed blue; width:150px; padding: 0.5em 1em;">CHECKS</h2>
      </div>

      <?php 
           $admin = new User;
           $admincheck = $admin->select_check($_REQUEST['uniqueid']);
           $counter = 0;
           $counter1 = 0;
           $counter2 = 0;
           $counter3 = 0;
           $counter4 = 0;
           $counter5 = 0;
           $counter6 = 0;
           $counter7 = 0;
       if(!empty($admincheck)){
          foreach($admincheck as $key => $value){
          ?>
          <div class="approval">
           <h4 style="color:red;"><?php echo $value['status'];?></h4>
         </div>
         <a href="checkapproval.php?checkid=<?php echo $value['check_id'];?>&uniqueid=<?php echo $_REQUEST['uniqueid'];?>">
      <div class="infodiv checkdiv">
          <div class="profileimg">
          <?php if(!empty($adminviewer['profileimg'])){?>
              <img src="profile/<?php echo $adminviewer['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
          </div>
          <div class="fname">
          <span>Bank Name</span>
              <h4><?php echo $value['bankname']?></h4>
          </div>

          <div class="lname">
          <span>Receiver Name</span>
              <h4><?php echo $value['receiver_name']?></h4>
          </div>

          <div class="email">
          <span>Remitter Name</span>
              <h4><?php echo $value['remitter_name']?></h4>
          </div>

          <div class="email">
          <span>Amount</span>
              <h4><?php echo $value['amount']?></h4>
          </div>

          <div class="email">
          <span>Activation code</span>
              <h4><?php echo $value['mt100_activation']?></h4>
          </div>

          <div class="email">
          <span>Check Number</span>
              <h4><?php echo $value['check_number']?></h4>
          </div>

          <div class="email">
          <span>Client Number</span>
              <h4><?php echo $value['client_number']?></h4>
          </div>

          <div class="email address">
          <span>Address</span>
              <h4><?php echo $value['addressof']?></h4>
          </div>
      </div>
      </a>
       <div style="padding:3em;"></div>
<script>
   const approvespan<?php echo $counter1++;?> = document.querySelector('.approval h4')
// const updateapprove= document.querySelector('.approveupdate');
const approveborder<?php echo $counter3++;?> = document.querySelector('.approval');


if(approvespan<?php echo $counter4++;?>.textContent ==='Approved'){
   approveborder<?php echo $counter5++;?>.style.border = "2px solid green";
   approveborder<?php echo $counter6++;?>.style.borderBottom = "none";
   approvespan<?php echo $counter7++;?>.style.color = "green";
}

// function checkShow(){
//          //        document.querySelector('.app').style.display = "none";
//    setInterval(() => {
//       const checkinput = document.querySelector('.appcheck');
// if(checkinput.checked == true){
//              let xhr = new XMLHttpRequest(); //creating XML Object
//                 xhr.open("POST", "updateapprove.php", true);
//                 xhr.onload = () => {
//                         if (xhr.readyState === XMLHttpRequest.DONE) {
//                             if (xhr.status === 200) {
//                                 let data = xhr.response;
//                                 console.log(data);
//                                 if(data === "successful"){
//                                 document.location.reload();
//                                 }
//                             }
//                         }
//                     }
//                     // we have to send the information through ajax to php
//                 let formData = new FormData(updateapprove); //creating new formData Object

//                 xhr.send(formData);
//                }
//    }, 8000);
// }
</script>
<?php }}else{?>
<div class="infodiv" style="display:flex; align-items:center; justify-content:center;"><h1>No Checks For This User</h1></div>
        <?php }?>


        <div class="heading">
      <h2 style="text-align:center; border: 3px dashed blue; width:300px; padding: 0.5em 1em;">WIRE TRANSFERS</h2>
      </div>

      <?php 
           $admin = new User;
           $wiretransfer = $admin->select_wire($_REQUEST['uniqueid']);
           $counter = 0;
       if(!empty($wiretransfer)){
          foreach($wiretransfer as $key => $value){
          ?>
           <div class="approval">
           <h4 style="color:red;"><?php echo $value['wirestatus'];?></h4>
         </div>
         <a href="wireapproval.php?wireid=<?php echo $value['wire_id'];?>&uniqueid=<?php echo $_REQUEST['uniqueid'];?>">
      <div class="infodiv checkdiv">
          <div class="profileimg">
          <?php if(!empty($adminviewer['profileimg'])){?>
              <img src="profile/<?php echo $adminviewer['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
          </div>
          <div class="fname">
          <span>Receiver Name</span>
              <h4><?php echo $value['receiverfullname']?></h4>
          </div>

          <div class="lname">
          <span>Receiver Account Num</span>
              <h4><?php echo $value['receiveraccount']?></h4>
          </div>

          <div class="email">
          <span>Receiver Address</span>
              <h4><?php echo $value['receiveraddress']?></h4>
          </div>

          <div class="email">
          <span>Receiver Email</span>
              <h4><?php echo $value['receiveremail']?></h4>
          </div>

          <div class="email">
          <span>Amount</span>
              <h4><?php echo $value['amount']?></h4>
          </div>
              </div>
              </a>
       <div style="padding:3em;"></div>
<?php }}else{?>
<div class="infodiv" style="display:flex; align-items:center; justify-content:center;"><h1>No Wire Transfer For This User</h1></div>
        <?php }?>


        <div class="heading">
      <h2 style="text-align:center; border: 3px dashed blue; width:300px; padding: 0.5em 1em;">PROOF IMAGES</h2>
      </div>


        <div class="infodiv" style="display:flex; align-items:center; justify-content:center; flex-wrap: wrap; gap:1em; padding:2em;">
        <?php 
         $mem = new User;
         $member = $mem->select_proof($_GET['uniqueid']);
         if(!empty($member)){
         foreach ($member as $key => $value) {
        ?>
       <?php if(!empty($value['proofimg'])){?>
         <div style="display:flex; flex-direction:column;" class="proofimage2">
         <img src="proof/<?php echo $value['proofimg']?>" alt="No image" style="width:100%; height:17em; object-fit:cover;">
         <h4><?php echo $value['proofdate']?></h4>
         </div>
              <?php }else{?>
                 <h2>No Image</h2>
                <?php }} } else {?>
                  <h2>No Proof Images for this User</h2>
                  <?php }?>
</div>
      </div>

     
      
     

      
      

      <style>
         .proofimage2 img{
            transition: filter 0.3s linear, transform 0.3s linear;
            border: 7px solid white;
         }

         .proofimage2 img:hover{
            transform: scale(1.1);
         }

         .approval{
            background-color: white; height:35px; width:120px; position:absolute; right:10%; margin-top: -0.5em; border-radius: 5px 5px 0px 0px; display:flex; align-items:center; justify-content:center; border:2px solid #ddd; border-bottom:none; cursor:pointer;
         }

          .address h4{
              width:10em!important;
              overflow-x:auto;
          }
          .nousers{
              height:20em;
              width: 100%;
          }
      .users{
          padding-top: 5em;
          min-height:90vh;
          padding-left:2em;
          padding-right: 3em;
          background-color: #d8dfee;
          padding-bottom: 4em;
      }

      .heading{
          width:100%;
          display:flex;
          align-items:center;
          justify-content:center;
          padding-top:7em;
      }

      .profileimg img{
          width:6em;
          height: 6em;
          object-fit:cover;
          clip-path: circle(40%);
      }

      .heading img{
          width:8em;
          height: 8em;
          object-fit:cover;
          clip-path: circle(40%);
      }

      .infodiv{
          display:flex;
          align-items:center;
          justify-content: space-between;
          margin-top:2em;
          background-color: rgba(255, 255, 255, 0.8);
          padding: 0em 1.2em;
          border-radius: 10px;
          cursor:pointer;
      }


      .infodiv h4{
        border: 3px dashed #ddd;
        padding: 0.5em 1em;
        border-radius: 9px;
      }

      #deletebtn{
        border: 3px dashed #000;
        padding: 0.5em 1em;
        border-radius: 9px;
        background-color:red;
        color:white;
      }

      #editbtn{
        border: 3px dashed white;
        padding: 0.5em 1em;
        border-radius: 9px;
        background-color:green;
        color:white;
      }

      #accountbtn{
        border: 3px dashed white;
        padding: 0.5em 1em;
        border-radius: 9px;
        background-color: blue;
        color:white;
      }

      #deletebtn:hover{
        border: 3px dashed #fff;
      }

      #unique{
          display:none;
      }

      .infodiv span{
          text-align:center;
      }


      .infodiv:hover{
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      }

      @media only screen and (max-width:900px){
             .infodiv{
                position: relative;
               margin: 0 auto;
                width:70%;
               display:flex;
          align-items:center;
          justify-content: space-between;
          gap:2em;
                flex-wrap:wrap;
                flex-direction:column;
                padding:2em!important;
             }

             #accountform{
                position:relative;
             }

             #accountform input{
             width:120%!important;
        }

             .infodiv div{
                width:90%;
                text-align:center;
                padding:1em;
             }

             .approval{
                position:absolute;
                left:40%;
                margin: 0 auto;
                z-index:10000;
                outline:none;
                border: 5px solid grey;
                border-top: none;
                border-bottom: 2px solid grey;
             }
          }
      </style>
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li>You can contact us by clicking on the contact us link on the navbar .Then you can send whatever interest you have for us.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. <a href="index.php"> From Development Bank</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
           const deleteform = document.getElementById('deleteform');
           const deletebtn = document.getElementById('deletebtn');
           const editbtn = document.getElementById('editbtn');
           const accountbtn = document.getElementById('accountbtn');
           const accountform = document.getElementById('accountform');

         deleteform.onsubmit = (e)=>{
            e.preventDefault();
         }

         accountform.onsubmit = (e)=>{
            e.preventDefault();
         }

         deletebtn.onclick =() =>{
    let xhr = new XMLHttpRequest(); //creating XML Object
    xhr.open("POST", "deleteuser.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                  let profiledata = xhr.response;
                  //   console.log(data);
                    // console.log(data);
                    if(profiledata === "success"){
                        // uploader.style.display = "none";
                        location.href = "users.php";
                    }
                }
            }
        }
        // we have to send the information through ajax to php
    let formData = new FormData(deleteform); //creating new formData Object

    xhr.send(formData); //sending the form data to php
}

accountbtn.onclick =() =>{
    let xhr = new XMLHttpRequest(); //creating XML Object
    xhr.open("POST", "updateaccount.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                  let profiledata = xhr.response;
                  //   console.log(data);
                    // console.log(data);
                    console.log(profiledata);
                    if(profiledata === "success"){
                        // uploader.style.display = "none";
                        // location.href = "users.php";
                        document.getElementById('sendform').classList.add('showalertdiv')
                        accountform.style.display = "none";
                        console.log(profiledata);
                    }
                }
            }
        }
        // we have to send the information through ajax to php
    let formData = new FormData(accountform); //creating new formData Object

    xhr.send(formData); //sending the form data to php
}


editbtn.onclick = function(){
   accountform.style.display = "block";
}

      </script>
   </body>
</html>

