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
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.css">
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="loans.php">Loans</a>
                                        </li>
                                    </ul>
                                    <div class="sign_btn" style="display:flex; flex-direction:column;">
                                        <h3><span><?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?></span> <span><?php if(isset($_SESSION['lastname'])){echo$_SESSION['lastname'];}?></span></h3>
                                    </div>
                                    <div class="sign_btn" style="display:flex; flex-direction:column;">
                                        <h3>
                                            <?php if(isset($_SESSION['country'])){echo $_SESSION['country'];}?>
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


    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Looking for a Loan?</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="successdiv">
                        <h1>Loan submitted successfully</h1>
                        <h3>We'll get back to you in the next 24 hours</h3>
                        <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 0 24 24" width="60px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                        <svg class="successimg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="70px" fill="#00FF00" height="70px"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z"/></svg>
                    </div>

                    <form id="request" class="main_form loanform">
                        <div class="row">
                            <div class="col-md-12 ">
                                <label for="">First Name:</label>
                                <input class="contactus" placeholder="First Name" type="text" name="firstname" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>">
                            </div>

                            <div class="col-md-12 ">
                                <label for="">Last Name:</label>
                                <input class="contactus" placeholder="Last Name" type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>">
                            </div>

                            <div class="col-md-12 ">
                                <label for="">Middle Name:</label>
                                <input class="contactus" placeholder="Middle Name" type="text" name="middlename" value="<?php if(isset($_SESSION['middlename'])){echo $_SESSION['middlename'];}?>">
                            </div>

                            <div class="col-md-12">
                                <label for="">Amount:</label>
                                <input id="amou" class="contactus loan" placeholder="Amount" type="text" name="amount" style="color:#000!important;">
                            </div>
                            <div class="col-md-12">
                                <label for="">Marital Status:</label>
                                <select name="marital" id="marital" class="contactus">
                                    <option value="">--Your Marital Status--</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="">Occupation:</label>
                                <input id="occu" class="contactus loan" placeholder="Occupation" type="text" name="occupation" style="color:#000!important;">
                            </div>
                            <div class="col-md-12">
                                <label for="">SSN/1D Number:</label>
                                <input id="loan" class="contactus" placeholder="SSN/ID Number" type="text" name="ssnnumber" style="color:#000!important;">
                            </div>
                            <div class="col-md-12 checkout">
                                <label for="">Type Of Loan:</label>
                                <select name="loan" id="type" class="contactus">
                                    <option value="">--Type Of Loan--</option>
                                    <option value="Long term loan">Long term loan(2yrs payment plan)</option>
                                    <option value="Short term loan">Short term loan (6 months payment plan)</option>
                                    <option value="Home equity loan">Home equity loan</option>
                                </select>
                            </div>

                            <div class="col-md-12 checkpass" style="position:absolute; top:450px; z-index:10000;
                              box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4); background:white; display:none;">
                                <label for="">Your Account Password:</label>
                                <input type="password" name="checkout" id="" class="contactus">
                                <i class="fas fa-eye-slash" id="eyeslash"></i>
                            </div>
                            <div class="errortxt" style="width:70%;  background-color: red; text-align: center;height:4em; margin: 0 auto; border-radius:10px; color:white!important; display:flex;
                    justify-content: center; align-items: center; display:none; margin-bottom:3em;">
                                <p style="font-size:1.2em; padding-top:5px;"></p>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn" id="sendloan" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .main_form #eyeslash {
    position: absolute!important;
    right: 27px!important;
    font-size: 25px!important;
    color: #333!important;
    top: 50px!important;
    transform: translateY(-50%)!important;
    cursor: pointer!important;
}
        .main_form .contactus {
            border: none;
            border-bottom: 2px solid #adadad;
            margin-bottom: 20px;
            width: 100%;
            height: 30px;
            background: transparent;
            color: #000;
            font-size: 18px;
            font-weight: normal;
        }
        
        .loanform label {
            font-size: 20px;
            color: #e73131;
        }
        
        .flexdrop {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2em;
        }
        
        .successdiv {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4em;
            flex-direction: column;
            border-radius: 15px;
            background-color: white;
            width: 130%;
            height: 50em;
            padding: 2em;
            z-index: 20000;
             position:absolute;
             left:-5em;
            box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
            display: none;
            animation: bounce 1s infinite;
        }
        
        @keyframes bounce {
            from {
                transform: translateY(-17px);
            }
            to {
                transform: translateY(4px);
            }
        }
        
        .hiden {
            height: 50em;
            display: block;
        }
        
        .successdiv h2 {
            font-size: 20px;
        }
        
        .successdiv .cancelimg {
            padding-bottom: 1em;
            position: absolute;
            right: 10%;
            top: 7em;
            cursor: pointer;
        }
        
        select {
            color: #000!important;
        }
        
        select option {
            background-color: white;
            color: #000;
        }
        
        #loan::placeholder {
            color: #000!important;
        }
        
        #occu::placeholder {
            color: #000!important;
        }
        
        @media only screen and (max-width:900px) {
            .successdiv {
                position: absolute;
                top: 2%;
                right: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 4em;
                flex-direction: column;
                border-radius: 15px;
                background-color: white;
                height: 50em;
                width: 100%;
                padding: 1em;
                z-index: 20000;
                box-shadow: 0 6px 10px 1px rgba(0, 0, 0, 0.4);
                display: none;
                animation: bounce 1s infinite;
            }
            .successdiv h1 {
                font-size: 20px;
            }
            .successdiv h3 {
                font-size: 15px;
            }
        }
    </style>
    <!-- end contact -->
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
        const form = document.querySelector('.loanform');
        const loanBtn = document.querySelector('#sendloan');
        const text = document.querySelector('.errortxt p'),
            errorTxt = document.querySelector('.errortxt');
        const successdiv = document.querySelector('.successdiv');
        const closediv = document.querySelector('.successdiv .cancelimg');
        form.onsubmit = (e) => {
            e.preventDefault();
        }


        closediv.onclick = function() {
            document.querySelector('.hiden').style.display = "none";
            //closediv.style.fill = "green";
        }




        loanBtn.onclick = () => {
            let xls = new XMLHttpRequest();
            xls.open("POST", "createloan.php", true);
            xls.onload = () => {
                if (xls.readyState === XMLHttpRequest.DONE) {
                    if (xls.status === 200) {
                        let data = xls.response;
                        if (data === "success") {
                            document.getElementById('occu').value = "";
                            document.getElementById('loan').value = "";
                            document.getElementById('type').value = "";
                            document.getElementById('marital').value = "";
                            document.getElementById('amou').value = "";
                            successdiv.classList.add('hiden');
                            document.querySelector('.hiden').style = `
               display:flex;
               align-items:center;
               justify-content:center;
              `;
                            window.scrollTo(0, 390);
                            errorTxt.style.display = "none";
                            document.querySelector('.checkpass').style.display = "none";
                            document.querySelector('.checkout').style.display = "block";
                            // console.log(data);
                        } else if(data === "Password field is required"){
                            document.querySelector('.checkout').style.display = "none";
                             document.querySelector('.checkpass').style.display = "block";
                             text.textContent = data;
                            errorTxt.style.display = "block";
                        }
                        
                        else {
                            text.textContent = data;
                            errorTxt.style.display = "block";
                        }
                    }
                }
            }

            let formData = new FormData(form);
            xls.send(formData);
        }

        const pswrdfield = document.querySelector(".loanform input[type='password']");
        const toggleBtn = document.getElementById("eyeslash");
        toggleBtn.onclick = () => {
    if (pswrdfield.type == "password") {
        pswrdfield.type = "text";
        toggleBtn.classList="fas fa-eye";
    } else {
        pswrdfield.type = "password";
        toggleBtn.classList="fas fa-eye-slash";
    }
}
        // console.log(successdiv);
    </script>
</body>

</html>