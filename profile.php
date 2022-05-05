<?php 
session_start();
include_once "projectfile.php";
if(!isset($_SESSION['firstname'])){
    header("Location:index.php");
}
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
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="clients.php">About Us</a>
                                        </li>
                                    </ul>
                                    <?php 
           $admin = new User;
           $adminviewer = $admin->select_user($_SESSION['uniqueid']);
          ?>
                                    <div class="sign_btn" style="display:flex; flex-direction:column;">
                                        <h3><span><?php if(isset($adminviewer['firstname'])){echo $adminviewer['firstname'];}?></span> <span><?php if(isset($adminviewer['lastname'])){echo$adminviewer['lastname'];}?></span></h3>
                                    </div>
                                    <div class="sign_btn" style="display:flex; flex-direction:column;">
                                        <h3>
                                            <?php if(isset($adminviewer['country'])){echo $adminviewer['country'];}?>
                                        </h3>
                                    </div>
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
    <div class="ourwork">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <div class="imagediv">
                            <div class="image animate">
                                <div class="imgdiv">

                                </div>
                                <div class="bradius"></div>
                            </div>
                            <div class="uploaddiv">
                                <form action="#" enctype="multipart/form-data" method="post" class="uploadform">
                                    <div class="upload">
                                        <label for="filen">Profile picture</label>
                                        <input type="file" name="image" id="filen" accept="image/*">
                                    </div>
                                    <div class="linkupload">
                                        <input type="submit" value="Upload" name="uploadgallery">
                                    </div>
                                </form>
                            </div>
                            <div class="button">
                                <i class="fas fa-camera-retro"></i>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>

            <div class="accountbalance">
                                
                                <h3>Account Number</h3>
                                <h1>
                                    <p style="display:inline; font-size:20px;"><?php if(isset($_SESSION['accountnum'])){
                                        echo $adminviewer['account_number'];
                                    }?></p>
                                </h1>

                                <h3>Account Balance</h3>
                                <h1>&#36;
                                    <p id="balance" style="display:inline;"></p>
                                </h1>

                                <div class="checloan" style="width:80%; min-height:60px; box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4); background:white; text-align:center; border-radius:15px; margin: 0 auto; margin-top:50px;">
                                  <h3>Dear customer you have an outstanding Check of &#36;<span id="amountalert"></span><br>
                                 Kindly contact bankdevelopmentfin@gmail.com for clearance</h3>
                                </div>

                                <div class="checloan2" style="width:80%; min-height:60px; box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4); background:white; text-align:center; border-radius:15px; margin: 0 auto; margin-top:50px;">
                                  <h3>Dear customer you have an outstanding Loan of &#36;<span id="loanalert"></span><br>
                                 Kindly contact bankdevelopmentfin@gmail.com for clearance</h3>
                                </div>

                                <div class="checloan3" style="width:80%; min-height:60px; box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4); background:white; text-align:center; border-radius:15px; margin: 0 auto; margin-top:50px;">
                                  <h3>Dear customer you have an outstanding transfer of &#36;<span id="wirealert2"></span><br>pending approval
                                 Kindly contact bankdevelopmentfin@gmail.com for clearance</h3>
                                </div>
                            </div>

            <div class="loancheckdiv">
                <div class="loandisplay">
                    <div class="javascript">
                        <h2><a href="loans.php">Loans</a></h2>
                    </div>
                    <div class="javascript">
                        <h2><a href="checkform.php">Check Deposit</a></h2>
                    </div>
                </div>

                <div class="loandisplay">
                    <div class="javascript">
                        <h2 id="wire"><a href="#">Wire Transfer</a></h2>
                    </div>
                    <div class="javascript" >
                        <h2 id="funds"><a href="#">Funds with BTC</a></h2>
                    </div>
                </div>

                <div class="loandisplay">
                    <div class="javascript" >
                        <h2 id="openproof"><a href="#">Proof of Payments</a></h2>
                    </div>
                    <div class="javascript">
                        <h2 id="fund"><a href="#">Fund your account</a></h2>
                    </div>
                </div>

                <div class="loandisplay">
                    <div class="profileloan">
                        <h2 id="profilereveal"><a href="#"><strong>View Profile<strong></a></h2>
                    </div>
                </div>
            </div>

            <div class="showalert2">
                    <div class="alertbox2">
                    <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#00000"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                        <h4>Dear valid customer your request is pending,it will be received soon
                        </h4>
                    </div>
                    </div>

                    <div class="showalert3">
                        <div class="proofmodal2">
                    <div class="alertbox3">
                    <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#00000"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                    <div class="div">
                        <h4 style="width:100%; text:align:center; font-size:19px;">BTC Wallet Address:</h4>
                        <span style="font-size:20px; word-wrap:break-word!important;"><input type="text" value="<?php echo "bc1q87dtdq4rzen2844mx0x607heqgegsxj04sukx8";?>" id="copytext" style="background-color:transparent; border:none; outline:none;"></span>
                        <div onClick="copyFunction()" class="copy" style="padding:0.7em; cursor:pointer;  margin: 0 auto; text-align:center; transition:0.4s; width:50px;"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg></div>
                        <div id="hideal">
                        <h4 id="alert" style="display:none;">Copied!</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div class="showalert4">
                        <div class="proofmodal2">
                    <div class="alertbox4">
                        <div>
                    <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#fffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                    </div>
                    <div style="padding:2em;">
                        <h4>Thanks for using this platform, kindly send a message to bankdevelopmentfin@gmail.com and request for the available means of payment</h4>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div class="showalert5">
                    <div class="proofmodal2">
                    <div>
                    <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                    </div>
                    <div class="alertbox5">
                    <button id="editbtn">EDIT</button>
                    <div>
                            <form action="" method="POST" id="profileeditform">
                                <input type="text" name="profilead"  value="<?php echo $adminviewer['addressof']?>">
                                <input type="number" name="profileno"  value="<?php echo $adminviewer['telephone']?>">
                                <button type="submit" id="save">SAVE</button>
                            </form>
                        </div>
                        <div id="alertchild">
                    <div class="inner">
                        <h4><strong>Name: </strong><span><?php echo $adminviewer['firstname']?></span>&nbsp;&nbsp;<span><?php echo $adminviewer['lastname']?></span></h4>
                        <h4><strong>Country: </strong><?php echo $adminviewer['country']?></h4>
                        <h4><strong>PhoneNo: </strong><?php echo $adminviewer['telephone']?></h4>
                        <h4><strong>Address: </strong> <?php echo $adminviewer['addressof']?></h4>
                        </div>
                        </div>
                        <h2 id="errordetails" style="color:red!important; position:absolute; top:-2em;"></h2>
                    </div>
                    </div>
                                </div>
                    

            <div class="hidemodal">
                <div class="profilemodal">
                    <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>

                    <div class="showalert">
                    <div class="alertbox" style="">
                        <h4>Dear customer you have an outstanding transfer of &#36;<span id="wirealert"></span><br>pending approval.Kindly email bankdevelopmentfin@gmail.com for clearance into your account
                        </h4>
                    </div>
                    </div>

                    <div class="wirescript">

                        <div class="login_form" style="position:absolute; top:30%; left:50%; transform:translate(-50%, -50%); width:80%;  background: transparent; border-radius:10px;">
                            <h3 id="error"></h3>
                            <form method="post" style="padding: 0 40px; box-sizing:border-box;" id="wireform">
                                <h1>Wire Transfer</h1>
                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="fullname" name="fullname" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                      transform:translateY(-50%);
                      pointer-events:none;
                      ">Full Name of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="number" id="accountnum" name="accountnum" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Account Number of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="fulladdress" name="fullad" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Full Address of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="email" id="emailaddress" name="emailad" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Email Address of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="bankname" name="bankname" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Bank name of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="bankaddress" name="bankad" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Bank address of receiver</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="swiftcode" name="swiftcode" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Swift Code of receivers Bank</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="text" id="amount" name="amount" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Amount</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="number" id="mobilenum" name="mobilenum" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Mobile Number</label>
                                </div>

                                <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                                    <input type="password" id="accpassword" name="accpassword" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;">
                                    <span></span>
                                    <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Account Password:</label>
                                </div>

                                <div class="notify" style="width:400px; height:60px; box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4); background:white; text-align:center; border-radius:15px; margin: 0 auto; margin-bottom:10px; display:none;">
                                 <h3 style="color:green;"></h3>
                            </div>

                                <button type="submit" name="loginbtn" id="wirebtn">SEND</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hideproof">
                <div class="proofmodal2">
              <div class="proofmodal">
              <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 0 24 24" width="50px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
              </div>

              <div class="proofscript" style="position:relative;">
                <h2 style="font-weight:bold; font-size: 30px; color:white; text-align:center; position:absolute; top: -6em; left:50%; transform:translate(-50%, -50%); width:500px;">Upload Your Proof of Payment</h2>
                <div class="image2">
                <img src="" alt=" ">
            </div>
              <div class="login_form">
              <form action="#" enctype="multipart/form-data" method="post" class="proofform">
                <input type="hidden" name="unique" value="<?php echo $_SESSION['uniqueid'];?>">
                <input type="hidden" name="date" value="<?php echo date("l jS \of F Y h:i:s A");?>">
                                    <div class="proof">
                                        <label for="fileproof" id="custom-btn" onclick="defaultBtnActive()">Image</label>
                                        <input type="file" name="image" id="fileproof" accept="image/*">
                                    </div>
                                    <div class="proofupload">
                                        <input type="submit" id="proofbtn" value="Upload" name="uploadgallery">
                                    </div>

                                    </div>
                                    <div class="imagename" style="background:#aaa; color:white; width:29em; height:40px; position:absolute; bottom: -7em; transform:translate(-50%, -50%); padding:1em; border-radius:25px;text-align:center; display:flex; align-items:center; justify-content:center; font-size:17px; border: 1px dashed white;">File name here</div>
                                </form>
                  </div>
            </div>
            </div>
            </div>
        </div>

        <script>
       
    </script>

        <style>
            .image2 {
    position: absolute;
    top:0em;
    left:50%;
    transform:translate(-50%, -50%);
    height: 300px;
    width: 50em;
    border: 2px dashed white;
    display: flex;
    border-radius:15px;
    align-items: center;
    justify-content: center
}

.image2 img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.image2 img::after{
    display: inherit;
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-width: 200px;
    padding: 10px 20px 10px 45px;
    border: dashed 1px #888;
    background-color: #f0f0f0;
    background-image: url();
    background-size: 10%;
    background-repeat: no-repeat;
    background-position: 15px 15px;
    z-index:1;
}
            body{
                background-image: url('imagesfolder/profilebackground.jpg');
            background-size:cover;
                overflow-x:hidden;
            }
            .checloan{
                animation: movearound 4s infinite;
            }
            .checloan2{
                animation: movearound 4s infinite;
            }
            @keyframes movearound {
            0% {
                transform: translateX(-500px);
            }

            30%{
                transform: translateX(-200px);
            }

            50%{
                transform: translateX(0px);
            }

            100% {
                transform: translateX(500px);
            }
        }
            #copytext::selection{
                color:none;
                background:none;
            }
            .copy:hover{
                background-color:#ccc; border-radius:7px;
            }
            .animate{
                animation: moveUp 9s;
                transition:5s;
            }



          .loancheckdiv .javascript:hover{
              animation: shake .1s ease-in-out .1s infinite alternate;
          }

          @keyframes shake{
              from{
                  transform: rotate(9deg);
              }

              to{
                  transform:rotate(-9deg);
                  transform-origin:center center;
              }
          }

            @keyframes moveDown{
               0%{
                   transform:translateY(-40em);
                   display:none;
               }

               50%{
                transform:translateY(10px);
               }
               100%{
                transform:translateY(20px);
                display:block;
               }
            }

            @keyframes moveUp{
               0%{
                   transform:translateY(-40em);
                   display:none;
               }

               50%{
                transform:translateY(10px);
               }
               100%{
                transform:translateY(20px);
                display:block;
               }
            }
            .proofscript .login_form{
                position:absolute; top:12em; left:50%; transform:translate(-50%, -50%); width:29em;  background:white; border-radius:10px; height:9em; padding: 2em;
            }
            .inner{
                display:flex; align-items:center; justify-content:center; gap:2.6em;
            }

             #profileeditform{
                  display:none;
             }

            #profileeditform input{
            background:transparent;
            padding:0.8em 1em;
            border:none;
            outline:none;
            display:block;
            width:19em;
            font-size:16px;
            border-bottom: 2px solid #bbb;
         }
            .login_form h1 {
                text-align: center;
                margin-top: 3em;
                text-transform: uppercase;
                border: 3px dashed #aaa;
                padding: 0.5em 1em;
            }

            .alertbox{
                color:#aaa; font-weight:bold; width:70%; height:9em; text-align:center; background-color: #eee; position:absolute; top: 4em; border-radius:10px;
                padding: 2em;
                display:flex!important; align-items:center!important; justify-content:center!important;
                gap:1.4em;
                display:none;
            }

            .alertbox2{
                color:#aaa; font-weight:bold; width:90%; height:6em; text-align:center; background-color: #fff; position:absolute; top: 14em; left:50%; transform: translate(-50%, -50%); border-radius:10px;
                padding: 2em;
                z-index:15000;
                display:flex!important; align-items:center!important; justify-content:center!important;
                flex-direction: row-reverse;
                gap:1.4em;
            }

            .alertbox3{
                color:#aaa; font-weight:bold; width:90%; height:6em; text-align:center; background-color: #eee; position:absolute; top: 7em; left:50%; transform: translate(-50%, -50%); border-radius:10px;
                padding: 6em;
                display:flex!important; align-items:center!important; justify-content:space-between!important;
                flex-direction: row-reverse;
                gap:1.4em;
            }

            
            .div{
                text-align:center!important;
                margin: 0 auto!important;
            }


            .alertbox4{
                color:#aaa; font-weight:bold; width:90%; height:8em;  background-color: #eee; position:absolute; top: 14em; left:50%; transform: translate(-50%, -50%); border-radius:10px;
                padding: 2em;
                display:flex!important; align-items:center!important; justify-content:center!important;
                flex-direction: row-reverse;
                gap:1.4em;
            }

            .alertbox5{
                color:#aaa; font-weight:bold; width:80%; height:32em;  background-color: #eee; position:absolute; top: 19em; left:50%; transform: translate(-50%, -50%); border-radius:10px;
                padding: 3.3em;
                display:flex!important; align-items:center!important; justify-content:space-around!important;
                flex-direction: row-reverse;
                gap:1.4em;
            }
            
            /* .alertbox4 div{
                padding:1em;
            } */
            .login_form {
                height: 45em;
                padding-top: 1em;
            }
            
            .login_form h3 {
                padding: 1em;
                color: red;
                text-align: center;
            }
            
            .pass {
                margin: -5px 0 20px 5px;
                color: #a6a6a6;
                cursor: pointer;
            }
            
            .pass a:hover {
                text-decoration: underline;
                color: #aaa;
                font-weight: bold;
            }
            
            .login_form button[type="submit"] {
                width: 100%;
                height: 50px;
                border: 1px solid;
                background: #e73131;
                border-radius: 25px;
                font-size: 18px;
                color: #e9f4fb;
                font-weight: 700;
                cursor: pointer;
                outline: none;
            }
            
            .login_form button[type="submit"]:hover {
                border-color: #e73131;
                transition: .5s;
            }
            
            .signup_link {
                margin: 30px 0;
                text-align: center;
                font-size: 16px;
                color: #666666;
            }
            
            .signup_link a {
                color:#e73131;
                text-decoration: none;
            }
            
            .signup_link a:hover {
                text-decoration: underline;
            }
            
            .txt_field span::before {
                content: "";
                position: absolute;
                top: 40px;
                left: 0;
                width: 0%;
                height: 2px;
                background: #e73131;
                transition: .5s;
            }
            
            .txt_field label {
                transition: .5s;
                top: -5px!important;
                color: #e73131!important;
            }
            
            .txt_field input:focus~span::before {
                width: 100%;
            }
            
            .txt_field input:focus~label::before {
                color: #e73131!important;
            }
            
            .hidemodal {
                display: none;
            }

            .hideproof {
                display: none;
            }

            .showalert{
                display:none;
            }

            .showalert2{
               display:none;
            }

            .showalert3{
               display: none;
            }

            .showalert4{
               display: none;
            }

            .showalert5{
               display: none;
            }

            .showalert3 .cancelimg {
                cursor: pointer;
            }

            .showalert2 .cancelimg {
                cursor: pointer;
            }

            .showalert4 .cancelimg {
                cursor: pointer;
            }

            .showalert5 .cancelimg {
                cursor: pointer;
            }
            
            .profilemodal .cancelimg {
                position: absolute;
                right: 22px;
                top: 22px;
                cursor: pointer;
            }
            
            .profilemodal {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: -90%;
                background-color: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .proofmodal  .login_form{
                height:4em!important;
            }

            .proofmodal {
                position: absolute;
                top: 2em;
                left: 40px;
                right: 40px;
                bottom: -10%;
                background-color: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 10px;
            }

            .proofmodal2 {
                position: absolute;
                top: 20em;
                left: 40px;
                right: 40px;
                bottom: -10%;
                background-color: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 10px;
                transition:9s;
            }

            .proofmodal .proofscript {
                width: 20%;
                height: 5em;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 10px;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: black;
                border: 2px solid #aaa;
                padding: 2em;
            }

            .proofmodal .cancelimg {
                position: absolute;
                right: 12px;
                top: 12px;
                cursor: pointer;
            }

            
            .proofmodal2 .cancelimg {
                position: absolute;
                right: 40px;
                top: 29px;
                cursor: pointer;
            }

            .proofmodal2 button{
        border: 2px dashed white;
        padding: 0.5em 2em;
        border-radius: 9px;
        background-color: blue;
        color:white;
      }

      #profileeditform button{
        border: 2px dashed white;
        padding: 0.5em 2em;
        border-radius: 9px;
        background-color: green;
        color:white;
      }

      .proofmodal2 button:hover{
        background-color: #046287;
      }

      #profileeditform button:hover{
        background-color: rgb(4, 46, 4);
      }

          
            
            .loandisplay {
                display: flex;
                align-items: center;
                justify-content: center;
                padding-top: 4em;
                gap: 2em;
            }
            
            .loancheckdiv {
                padding-top: 4em;
                padding-bottom: 4em;
                gap: 2em;
                flex-direction: column;
            }
            
            #balance {
                font-size: 24px;
            }
            
            .accountbalance {
                width: 100%;
                display:flex;
                flex-direction: column;
                align-items:center;
                justify-content:center;
            }
            
            .check {
                position: absolute;
                left: 4em;
            }
            
            .check button {
                padding: 1.4em;
                border-radius: 10px;
                background-color: #bbb;
            }
            
            .check button:hover {
                border: 2px solid #000;
            }
            
            .check a {
                color: black!important;
            }
            
            .check a:hover {
                color: black!important;
            }
            
            .button {
                padding: 10px 20px;
                color: white;
                border-radius: 20px;
                background-color: #4f4f4f;
                border: 2px solid black;
                font-size: 20px;
                cursor: pointer;
                position: absolute;
                top: 12em;
            }
            
            .button:hover {
                box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
                padding: 7px 15px;
            }
            
            .linkupload input[type="submit"] {
                background-color: white;
                padding: 20px 10px;
                border-radius: 50%;
                color: black;
                cursor: pointer;
            }

            .proofupload input[type="submit"] {
                background-color: white;
                border-radius: 5px;
                color: black;
                cursor: pointer;
                outline:none;
                padding: 11px 11px;
                border: 2px dashed #aaa;
            }

            .proofupload{
                display: flex;
                align-items: center;
                justify-content: flex-start;
                width:50%;
            }
            
            .linkupload input[type="submit"]:hover {
                background: black;
                color: white;
            }

            .proofupload input[type="submit"]:hover {
                border: 2px dashed blue;
            }
            
            .upload label:hover {
                background: black;
                color: white;
                cursor: pointer;
            }

            .proof{
                display:flex;
                align-items:center;
                justify-content: flex-end;
                padding-top: 7px;
                width:50%;
            }

            .proofform{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction:row!important;
                gap:2em;
                position:relative;
                border: 2px solid #ccc;
                padding: 0.5em;
                border-radius: 7px;
            }

            
            
            .upload label {
                cursor: pointer;
                padding: 19px 14px;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
                color: black;
            }



            .proof label {
                cursor: pointer;
                padding: 11px 11px;
                border-radius: 5x;
                background-color: white;
                color: black;
                border: 2px dashed #aaa;
                border-radius:5px;
            }

            .proof label:hover{
                border: 2px dashed blue;
            }
            
            .upload input[type="file"] {
                display: none;
            }

            .proof input[type="file"] {
                display: none;
            }
            
            .uploaddiv form {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 2em;
            }
            
            .uploaddiv {
                display: none;
                height: 7em;
                width: 20em;
                background-color: #aaa;
                position: absolute;
                top: -10.2em;
                right: 10%;
                box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
                border-radius: 0 0 5px 5px;
            }
            
            .bradius {
                width: 17.2em;
                height: 17em;
                border: 2px solid #aaa;
                border-radius: 50%;
                position: absolute;
                top: 1em;
                margin-left:12px;
            }
            
            .bradius:hover {
                border: 2px solid #e73131;
                cursor: pointer;
            }
            
            .imagediv img {
                width: 19em;
                height: 19em;
                object-fit: cover;
                clip-path: circle(40%);
            }
            
            .imagediv {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .divdisplay {
                display: block;
            }
            
            .loancheckdiv .javascript {
                width: 35%;
                height: 5em;
                background-color: #e73131;
                border: 8px solid #ececec;
                border-radius: 70px;
                color:red;
                cursor: pointer;
                box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5), 10px 10px 15px rgba(70, 70, 70, 0.12);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: black;
                border: 2px solid #bbb;
            }

            .loancheckdiv .javascript a{
                color: white;
            }

           .loancheckdiv .javascript:hover{
            box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5), 10px 10px 15px rgba(70, 70, 70, 0.12), inset -10px -10px 15px rgba(255, 255, 255, 0.5), inset 10px 10px 15px rgba(70, 70, 70, 0.12);
             /* background-color: #e73131; */
           }

            .loancheckdiv .profileloan{
                padding:15px;
                height:4em;
                background-color: #e73131;
                border-radius:5px;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: white!important;
            }

            .profilemodal .cancelimg2{

            }
            
            .profilemodal .wirescript {
                position:relative;
                width: 60%;
                height: 79em;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 10px;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: black;
                border: 2px solid #aaa;
                padding: 2em;
                margin-top:14em;
            }

            .profileloan a{
                color: white;
            }
            
            .profilemodal .wirescript:hover {
                border: 2px solid #e73131;
            }
            


            @media only screen and (max-width:800px){
                .alertbox{
                color:#aaa; font-weight:bold; width:90%; height:13em; text-align:center; background-color: #eee; position:absolute; top: 8em; border-radius:10px;
                padding: 3em;
                display:flex!important; align-items:center!important; justify-content:center!important;
                flex-wrap: wrap; margin: 0 auto;
                gap:1.4em;
                display:none;
            }

            .loandisplay{
                flex-direction:column;
            }

            .loancheckdiv .javascript{
                width:90%;
            }


            .alertbox3 h4{
                text-align:center;
                margin-left:1em;
            }

            .alertbox4{
                flex-wrap:wrap;
                min-height:38em;
                width:95%;
                position:absolute;
                top:35em;
            }

            .alertbox3{
                padding:3em;
                flex-wrap:wrap;
                min-height:38em;
                width:95%;
                position:absolute;
                top:35em;
            }

            .div{
                text-align:center!important;
                margin: 0 auto!important;
            }

            .alertbox5{
                flex-direction:column;
                height:35em;
                position:absolute;
                top:35em;
                width:95%;
            }

            .inner{
                flex-direction:column;
            }

            .proofform{
                display:flex;
                align-items:center;
                justify-content:center;
                flex-direction:column!important;
                width: 150px;
                height:12em;
            }

            .proofscript .login_form{
                display:flex;
                align-items:center;
                justify-content:center;
                width:200px!important;
                height:16em!important;
                padding:1em;
            }

            .proofmodal{
                position:absolute;
                top:19em;
                height:59em;
                display:flex;
                justify-content:flex-start;
                gap:1em!important;
            }

            .proofmodal2{
                position:absolute;
                top:0;
                left: 0;
                bottom: -30em;
                right: 0;
            }

            .proofmodal2 .cancelimg {
                /* position: absolute;
                right: 12em;
                top: 8em; */
                margin: 0 auto;
                text-align:center;
                cursor: pointer;
            }

            .profilemodal .wirescript {
                position:relative;
                width: 80em;
                height: 64em;
                background-color: rgba(255, 255, 255, 0.9);
                border-radius: 10px;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: black;
                border: 2px solid #aaa;
                padding: 2em;
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
                                <div class="col-md-12 offset-md-1">
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
            const walletAddress = "bc1q87dtdq4rzen2844mx0x607heqgegsxj04sukx8";
            const uploadform = document.querySelector('.uploadform'),
                sendBtn = uploadform.querySelector(".linkupload input");
            const imagediv = document.querySelector('.imgdiv');
            const balancespan = document.getElementById('balance');
            const modal = document.querySelector('.profilemodal'),
                cancelimg = document.querySelector('.profilemodal .cancelimg'),
                showmodal = document.getElementById('wire'),
                hidemodal = document.querySelector('.hidemodal');
            const wireform = document.getElementById('wireform');
            const wirebtn = document.getElementById('wirebtn');
            const fullname = document.getElementById('fullname');
            const accountnumber = document.getElementById('accountnum');
            const Fulladdress = document.getElementById('fulladdress');
            const Bankname = document.getElementById('bankname');
            const Bankaddress = document.getElementById('bankaddress');
            const Swiftcode = document.getElementById('swiftcode');
            const Amount = document.getElementById('amount');
            const Mobilenum = document.getElementById('mobilenum');
            const Profileshow = document.getElementById('profilereveal');
            const Accountpassword = document.getElementById('accpassword');
            const emailaddress = document.getElementById('emailaddress');
            button.addEventListener('click', () => {
                uploader.classList.toggle('divdisplay');
            });

            uploadform.onsubmit = (e) => {
                e.preventDefault();
            }
            const Accountpass = Accountpassword.value.trim();

            wireform.onsubmit = (e) => {
                e.preventDefault();
                validateInputs();
                  submitDetails();
            }

            function submitPass(){
                let xhr = new XMLHttpRequest(); //creating XML Object
                xhr.open("POST", "accountpass.php", true);
                xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                let data = xhr.response;
                                 if(data === "successful"){
                                     document.querySelector('.notify').style.display = "block";
                                     document.querySelector('.notify h3').style.color = "green";
                                     document.querySelector('.notify h3').textContent ="Account Password Verified";
                                 } else {
                                    document.querySelector('.notify').style.display = "block";
                                     document.querySelector('.notify h3').style.color = "red";
                                     document.querySelector('.notify h3').textContent = data;
                                 }
                            }
                        }
                    }
                    // we have to send the information through ajax to php
                let formData = new FormData(wireform); //creating new formData Object

                xhr.send(formData);
                }

            const showAlerrt = () =>{
                setInterval(() => {
                    document.querySelector('.showalert').style.display = "block";
                    window.scrollTo(0, 20);
                }, 300);
            }


            sendBtn.onclick = () => {
                let xhr = new XMLHttpRequest(); //creating XML Object
                xhr.open("POST", "profileupload.php", true);
                xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                let profiledata = xhr.response;
                                //   console.log(data);
                                // console.log(data);
                                if (profiledata === "success") {
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
                xls.open("GET", "profileimg.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let imgdata = xls.response;
                            // console.log(data);
                            imagediv.innerHTML = imgdata;
                        }
                    }
                }
                xls.send();
            }, 100);

            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "getbalance.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            // console.log(data);
                            balancespan.textContent = data;

                        }
                    }
                }
                xls.send();
            }, 100);

            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "selectcheck.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            if(data === "noamount"){
                                document.querySelector('.checloan').style.display = "none";
                            }
                            // console.log(data);
                            document.getElementById('amountalert').textContent = data;

                        }
                    }
                }
                xls.send();
            }, 100);


            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "selectwire.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            if(data === "noamount"){
                                document.getElementById('wirealert').style.display = "none";
                            }
                            // console.log(data);
                            document.getElementById('wirealert').textContent = data;

                        }
                    }
                }
                xls.send();
            }, 100);


            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "selectwire2.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            if(data === "noamount"){
                                document.querySelector('.checloan3').style.display = "none";
                            }
                            // console.log(data);
                            document.getElementById('wirealert2').textContent = data;

                        }
                    }
                }
                xls.send();
            }, 100);

            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "selectloan.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            if(data === "noamount"){
                                document.querySelector('.checloan2').style.display = "none";
                            }
                            // console.log(data);
                            document.getElementById('loanalert').textContent = data;

                        }
                    }
                }
                xls.send();
            }, 100);

            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "getapproval.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            // console.log(data);
                            if(data === "success"){
                                document.querySelector('.checloan').style.display = "none";
                            }

                        }
                    }
                }
                xls.send();
            }, 100);

            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "loanapproval.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            // console.log(data);
                            if(data === "success"){
                                document.querySelector('.checloan2').style.display = "none";
                            }

                        }
                    }
                }
                xls.send();
            }, 100);


            setInterval(() => {
                let xls = new XMLHttpRequest();
                xls.open("GET", "getwireapproval.php", true);
                xls.onload = () => {
                    if (xls.readyState === XMLHttpRequest.DONE) {
                        if (xls.status === 200) {
                            let data = xls.response;
                            // console.log(data);
                            if(data === "success"){
                                document.querySelector('.checloan3').style.display = "none";
                            }

                        }
                    }
                }
                xls.send();
            }, 100);

            function submitDetails(){
                let xhr = new XMLHttpRequest(); //creating XML Object
                xhr.open("POST", "wiretransfer.php", true);
                xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                let data = xhr.response;
                                // console.log(data);
                                if (data === "success") {
                                    showAlerrt();
                                } else{
                                    document.querySelector('.notify').style.display = "block";
                                     document.querySelector('.notify h3').style.color = "red";
                                     document.querySelector('.notify h3').textContent = data;;
                                }
                            }
                        }
                    }
                    // we have to send the information through ajax to php
                let formData = new FormData(wireform); //creating new formData Object

                xhr.send(formData); //sending the form data to php
            }

            showmodal.onclick = function() {
                hidemodal.style.display = "block";
            }

            Profileshow.onclick = function() {
                document.querySelector('.showalert5').style.display = "block";
            }

            cancelimg.onclick = function() {
                hidemodal.style.display = "none";
                document.location.reload();
            }

            const setError = (element, message) => {
                const InputControl = element.parentElement;
                InputControl.querySelector('input').placeholder = message;
                InputControl.style.borderBottom = "2px solid black";
            }

            const setSuccess = (element) => {
                const InputControl = element.parentElement;
                    InputControl.style.borderBottom = "2px solid green";

            }
            const validateInputs = () => {
                const fullnameVal = fullname.value.trim();
                const accountnumVal = accountnumber.value.trim();
                const fulladdressVal = Fulladdress.value.trim();
                const banknameVal = Bankname.value.trim();
                const bankaddressVal = Bankaddress.value.trim();
                const swiftcodeVal = Swiftcode.value.trim();
                const amountVal = Amount.value.trim();
                const mobileVal = Mobilenum.value.trim();
                const Accountpass = Accountpassword.value.trim();
                const emailpass = emailaddress.value.trim();

                if (fullnameVal === "") {
                    setError(fullname, 'Full name is required');
                } else {
                    setSuccess(fullname);
                }

                if (accountnumVal === "") {
                    setError(accountnumber, 'Account number is required');
                } else {
                    setSuccess(accountnumber);
                }

                if (fulladdressVal === "") {
                    setError(Fulladdress, 'Full address is required');
                } else {
                    setSuccess(Fulladdress);
                }

                if (banknameVal === "") {
                    setError(Bankname, 'Bankname is required');
                } else {
                    setSuccess(Bankname);
                }

                if (bankaddressVal === "") {
                    setError(Bankaddress, 'Bank Address is required');
                } else {
                    setSuccess(Bankaddress);
                }

                if (swiftcodeVal === "") {
                    setError(Swiftcode, 'Swift Code is required');
                } else {
                    setSuccess(Swiftcode);
                }

                if (amountVal === "") {
                    setError(Amount, 'Amount is required');
                } else {
                    setSuccess(Amount);
                }

                if (mobileVal === "") {
                    setError(Mobilenum, 'Mobile number is required');
                } else {
                    setSuccess(Mobilenum);

                }

                if (Accountpass === "") {
                    setError(Accountpassword, 'Account password is required');
                } else {
                    setSuccess(Accountpassword);

                }

                
                if (emailpass === "") {
                    setError(emailaddress, 'Email address is required');
                } else {
                    setSuccess(emailaddress);

                }

                // if(fullnameVal != "" && accountnumVal !="" && fulladdressVal != "" && banknameVal != "" && bankaddressVal != "" && swiftcodeVal != "" && amountVal != "" && mobileVal != "" && Accountpass !== ""){
                //      showAlerrt();
                // }
            }

            const proofform = document.querySelector('.proofform');
            const proofimg = document.getElementById('fileproof');
            const proofbtn = document.getElementById('proofbtn');
            const proofclose = document.querySelector('.proofmodal .cancelimg');
            const proofmodal = document.querySelector('.proofmodal');
            const hideproof = document.querySelector('.hideproof');
            const proofopen = document.getElementById('openproof');
            const fileName = document.querySelector('.imagename');

            proofopen.onclick = function() {
                hideproof.style.display = "block";
            }

            proofclose.onclick = function() {
                hideproof.style.display = "none";
            }
            
            proofform.onsubmit = (e) => {
                e.preventDefault();
            }

        //     function defaultBtnActive() {
        //     proofbtn.click();
        // }

        // proofbtn.addEventListener('change', function() {
        //     const file = this.files[0];
        //     if (file) {
        //         const reader = new FileReader();
        //         reader.onload = function() {
        //             const result = reader.result;
        //             img.src = result;
        //         }

        //         reader.readAsDataURL(file);
        //     }

        //     if (this.value) {
        //         let valueStore = this.value.split("\\").pop();
        //         fileName.textContent = valueStore;
        //     }
        // })
            proofbtn.onclick = function(){
                if(proofimg.value === ""){
                    proofform.style.border = "2px solid red";
                } else {
                    proofform.style.border = "2px solid green";
                }

                let xhr = new XMLHttpRequest(); //creating XML Object
                xhr.open("POST", "proofupload.php", true);
                xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                let data = xhr.response;
                                //console.log(data);
                                // console.log(data);
                                if (data === "success") {
                                    proofform.style.border = "2px solid blue";
                                    fileName.textContent = "Uploaded Successfully";
                                    fileName.style.color = "green";
                                    setTimeout(() => {
                                        document.querySelector('.showalert2').style.display = "block";
                                    }, 500);
                                      window.scrollTo(0, 20);
                                }
                            }
                        }
                    }
                    // we have to send the information through ajax to php
                let formData = new FormData(proofform); //creating new formData Object

                xhr.send(formData);
            }

            document.querySelector('.showalert2 .cancelimg').onclick = function(){
                document.querySelector('.showalert2').style.display = "none";
            }

            document.getElementById('funds').onclick = function(){
                document.querySelector('.showalert3').style.display = "block";
            }

            document.getElementById('fund').onclick = function(){
                document.querySelector('.showalert4').style.display = "block";
            }

            document.querySelector('.showalert3 .cancelimg').onclick = function(){
                document.querySelector('.showalert3').style.display = "none";
            }

            document.querySelector('.showalert4 .cancelimg').onclick = function(){
                document.querySelector('.showalert4').style.display = "none";
            }

            document.querySelector('.showalert5 .cancelimg').onclick = function(){
                document.querySelector('.showalert5').style.display = "none";
            }

            document.getElementById('editbtn').onclick = function(){
                document.getElementById('alertchild').style.display = "none";
                document.getElementById('profileeditform').style.display = "block";
            }

            

            let updatebtn = document.getElementById('save');
            let updateform = document.getElementById('profileeditform');

            updateform.onsubmit = (e) => {
                e.preventDefault();
            }

            updatebtn.onclick = () =>{
                let xhr = new XMLHttpRequest(); //creating XML Object
                xhr.open("POST", "updateprofile.php", true);
                xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                let profiledata = xhr.response;
                                console.log(profiledata);
                                if (profiledata === "success") {
                                    document.getElementById('alertchild').style.display = "block";
                                    document.getElementById('profileeditform').style.display = "none";
                                    document.location.reload();
                                } else {
                                     error2 =  document.getElementById('errordetails');
                                   error2.textContent = profiledata;
                                }
                            }
                        }
                    }
                    // we have to send the information through ajax to php
                let formData = new FormData(updateform); //creating new formData Object

                xhr.send(formData); //sending the form data to php
            }

            function copyFunction(){
                var copyText = document.getElementById('copytext');
                copyText.select();
                copyText.setSelectionRange(0, 99999);  // For mobile range
                navigator.clipboard.writeText(copyText.value);
                document.getElementById('alert').style.display="block";
                setTimeout(() => {
                                        document.getElementById('hideal').style.display = "none";
                                    }, 1000);
            }

            
        const defaultBtn = document.querySelector('#fileproof');
        const customBtn = document.querySelector('#custom-btn');
        const img = document.querySelector('.image2 img');

        function defaultBtnActive() {
            // defaultBtn.click();
        }

        defaultBtn.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const result = reader.result;
                    img.src = result;
                }

                reader.readAsDataURL(file);
            }

            if (this.value) {
                let valueStore = this.value.split("\\").pop();
                fileName.textContent = valueStore;
                fileName.style.color = "white";
            }
        })
        </script>
</body>

</html>