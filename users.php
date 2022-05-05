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

          @media only screen and (max-width:800px){
             .infodiv{
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
          }
       </style>
      
      <div class="users" id="users">
          <div class="heading">
      <h2 style="text-align:center; border: 3px dashed blue; width:150px; padding: 0.5em 1em;">USERS</h2>
      </div>

      <?php 
       $admin = new User;
       $adminview = $admin->viewusers();
       $counter = 0;
       if(!empty($adminview)){
          foreach($adminview as $key => $value){
      ?>
      <a href="userprofile.php?uniqueid=<?php echo $value['unique_id'];?>">
      <div class="infodiv">
          <h4><span><?php echo ++$counter;?></span></h4>
          <div class="profileimg">
              <?php if(!empty($value['profileimg'])){?>
              <img src="profile/<?php echo $value['profileimg']; ?>" alt="image">
              <?php }else{?>
                <img src="imagesfolder/user2.png" alt="image">
                <?php }?>
          </div>
          <div class="fname">
              <h4><?php echo $value['firstname'];?></h4>
          </div>

          <div class="lname">
              <h4><?php echo $value['lastname'];?></h4>
          </div>

          <div class="email">
              <h4><?php echo $value['emailaddress'];?></h4>
          </div>
      </div>
      </a>

      <?php }}else{?>
         <div class="nousers">
           <h1>No Users Available Yet</h1>
         </div>
    <?php }?>
      </div>


      <style>
          .nousers{
              height:20em;
              width: 100%;
          }
      .users{
          padding-top: 5em;
          min-height:50vh;
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
      }

      .profileimg img{
          width:6em;
          height: 6em;
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


      .infodiv:hover{
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
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
         let button = document.querySelector('.button');
         let uploader = document.querySelector('.uploaddiv');
         const uploadform = document.querySelector('.uploadform'),
           sendBtn = uploadform.querySelector(".linkupload input");
           const imagediv = document.querySelector('.imgdiv');
         button.addEventListener('click',()=>{
            uploader.classList.toggle('divdisplay');
         });

         uploadform.onsubmit = (e)=>{
            e.preventDefault();
         }

         sendBtn.onclick =() =>{
    let xhr = new XMLHttpRequest(); //creating XML Object
    xhr.open("POST", "adminprofileupload.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                  let profiledata = xhr.response;
                  //   console.log(data);
                    // console.log(data);
                    if(profiledata === "success"){
                        uploader.style.display = "none";
                    }
                }
            }
        }
        // we have to send the information through ajax to php
    let formData = new FormData(uploadform); //creating new formData Object

    xhr.send(formData); //sending the form data to php
}


setInterval(() => {
    let xls = new XMLHttpRequest();
    xls.open("GET", "adminprofileimg.php", true);
    xls.onload = () => {
        if (xls.readyState === XMLHttpRequest.DONE) {
            if (xls.status === 200) {
                let imgdata = xls.response;
               // console.log(imgdata);
                    imagediv.innerHTML = imgdata;
            }
        }
    }
    xls.send();
}, 100);
      </script>
   </body>
</html>

