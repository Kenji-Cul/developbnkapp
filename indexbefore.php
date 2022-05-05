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
    <title>DBOA</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
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
                                    <a href="index.php"><img style="height:70px; width: 85%; object-fit:cover;" src="images/logo3.jpg" alt="#" /></a>
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
                                    <li class="nav-item" style="background-color:transparent;" id="showlogin">
                                        <?php if(isset($_SESSION['firstname'])){?>
                                            <a class="nav-link" href="logout.php" style="color:#00aeef;">Log Out</a>
                                            <?php }else{?>
                                            <a class="nav-link show_btn" href="#" style="color:#00aeef;">Log In</a>
                                            <?php }?>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item active">
                                        <div id="google_translate_element"></div> 
      
      <script> 
         
      </script> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us</a>
                                        </li>
                                        
                                        <?php if(isset($_SESSION['firstname'])){?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.php">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="loans.php">Loans</a>
                                        </li>
                                        <?php }?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                    <?php if(isset($_SESSION['firstname'])){?>
                                    <div class="sign_btn"><a href="logout.php">Log Out</a></div>
                                    <?php }else{?>
                                        <div class="sign_btn show_btn2"><a href="#">Log In</a></div>
                                    <?php }?>
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
    <!-- banner -->
    <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Capital Services</h1>
                        <a href="#contact">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Investment Services</h1>
                        <a href="#contact">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Loan Services</h1>
                        <a href="#contact">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="four slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Financial Services</h1>
                        <a href="#contact">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="five slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Wire Services</h1>
                        <a href="#contact">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end banner -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Development Bank</h2>
                        <span></span>
                        <p>An organisation where you can be offered the services that you need.Examples are banking finance and loans services.We are commited and focused on giving you the best satisfaction we can offer.Bank with us and enjoy our services.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="images/devbank.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- mobile -->
    <div id="mobile" class="mobile">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="mobile_img">
                        <figure><img src="images/devbank3.jpg" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Banking and Finance</h2>
                        <span></span>
                        <p>Development Bank provides a safe place where you can save,borrow and invest money.We handle cash,credits and other financial transactions for individual consumers and businesses alike.We can also post cost savings onto our consumers</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="titlepage">
                        <h2>What our Client says</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_box">
                        <p>I have a great experience with development bank and their services.Of which they offer loans services and others to choose from. Well am having a nice time with them and i know you will also.Thanks Development Bank</p>
                    </div>
                    <div class="jonu">
                        <img src="images/devbank5.jpg" alt="#" style="clip-path:circle(40%); object-fit:cover; width: 14em; height: 14em;"/>
                        <h3>John Vincent</h3>
                        <strong>(Thanks development Bank)</strong>
                        <a class="read_more" href="#">Move Forward</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end clients -->
    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Create  Account</h2>
                    </div>
                    
                      <?php 
                      if(isset($_GET['newpwd'])){
                          if($_GET['newpwd'] == "passwordupdated") {
                              echo '<p>Your password has been reset!</p>';
                          }
                      }
                      ?>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form id="request"  class="main_form" method="POST">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="First Name" type="text" name="firstname" value="">
                            </div>

                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Last Name" type="text" name="lastname" value="">
                            </div>

                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Middle Name" type="text" name="middlename" value="">
                            </div>

                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="number" name="telephone" value="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="contactus" placeholder="Address" type="text" Message="Name" name="addressof"></textarea>
                            </div>

                            <div class="col-md-12">
                                <?php 
                                 $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                                <label for="country" style="color:#ddd; font-size:20px;"> Select Country:</label>
                                <select name="country" id="country" class="contactus" placeholder="Country">
                                    <option value="select">--Select Country--</option>
                                    <?php 
                                      foreach ($countries as  $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <style>
                                select{
            color:#ddd!important;
        }
        select option{
            background-color: rgba(0,0,0,0.8)!important;
            color: #ddd;
        }

        @media only screen and (max-width:800px){
            .nav-item a{
                color: white!important;
            }

            .login_form{
                position:absolute;
                top: 70%!important;
                z-index: 10000;
            }
        }

    
                            </style>

                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email" value="" required>
                            </div>

                            <div class="col-md-12">
                                <input class="contactus" placeholder="Password" type="password" name="password" value="" required>
                            </div>
                            <div class="errortxt" style="width:70%;  background-color: red; text-align: center;height:4em; margin: 0 auto; border-radius:10px; color:white!important; display:flex;
                    justify-content: center; align-items: center; display:none; margin-bottom:3em;">
                 <p style="font-size:1.2em; padding-top:5px;"></p>
                    </div>
                            <div class="col-sm-12">
                                <input name="sendbtn" value="Create" id="sendbtn" type="submit" class="send_btn">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            <p>© 2022 All Rights Reserved. <a href="index.php">From Development Bank</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <footer class="myfooter" style="
    background:white;
    ">
        <div class="footer" style="
        background-color: rgba(0,0,0,0.9);
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;display:flex; justify-content: center; align-items: center; display: none; color:white;">


        <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>

            <div class="login_form" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width:29em;  background:white; border-radius:10px;">
              <h3 id="error"></h3>
              <form  method="post" style="padding: 0 40px; box-sizing:border-box;" id="loginform">
                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="email" name="seenemail" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                      transform:translateY(-50%);
                      pointer-events:none;
                      ">Email</label>
                  </div>

                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="password" name="seenpassword" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Password</label>
                  </div>
                  <div class="pass"><a href="forgetpass.php">Forgot Password?</a></div>
                  <button type="submit" name="loginbtn" id="loginbtn">Login</button>
                  <div class="signup_link">
                      Not a member? <a href="#contact">Signup</a>
                  </div>
              </form>
            </div>
        </div>

        <style>
            .login_form{
                height:30em;
            }
            .cancelimg{
                position:absolute;
                right:3em;
                top:2em;
                cursor:pointer;
            }
            .login_form h3{
                padding:1em;
                color:red;
                text-align:center;
            }
            .txt_field span::before{
                content: "";
                position:absolute;
                top:40px;
                left: 0;
                width:0%;
                height:2px;
                background: #2691d9;
                transition:.5s;
            }


            .txt_field label{
                transition: .5s;
            }

            .txt_field input:focus ~ label,
            .txt_field input:valid ~ label{
                top:-5px!important;
                color: #2691d9!important;
            }

            .txt_field input:focus ~ span::before,
            .txt_field input:valid ~ span::before{
                width:100%;
            }

            .pass{
                margin: -5px 0 20px 5px;
                color: #a6a6a6;
                cursor:pointer;
            }
            .pass a:hover{
                text-decoration:underline;
                color: #aaa;
                font-weight:bold;
            }
            .login_form button[type="submit"]{
                width:100%;
                height:50px;
                border: 1px solid;
                background: #2691d9;
                border-radius:25px;
                font-size:18px;
                color: #e9f4fb;
                font-weight:700;
                cursor:pointer;
                outline:none;
            }

            .login_form button[type="submit"]:hover{
                border-color: #2691d9;
                transition:.5s;
            }

            .signup_link{
                margin: 30px 0;
                text-align:center;
                font-size:16px;
                color: #666666;
            }

            .signup_link a{
                color: #2691d9;
                text-decoration:none;
            }

            .signup_link a:hover{
                text-decoration:underline;
            }
        </style>
    </footer>


    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src=
  "https://translate.google.com/translate_a/element.js?
          cb=googleTranslateElementInit">
      </script> 

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- Login js -->
    
    <script>
       let signupbutton = document.getElementById('sendbtn');

const signupform = document.querySelector('.main_form'),
      errorTxt = document.querySelector('.errortxt'),
      text = document.querySelector('.errortxt p'),
      loginform = document.getElementById('loginform'),
      loginbtn = document.getElementById('loginbtn'),
      loginerror = document.getElementById('error');

signupform.onsubmit = (e) =>{
   e.preventDefault();
}

loginform.onsubmit = (e) =>{
   e.preventDefault();
}



signupbutton.onclick = () =>{
   let xls = new XMLHttpRequest();
   xls.open("POST","signup.php", true);
   xls.onload = () =>{
      if(xls.readyState === XMLHttpRequest.DONE){
         if(xls.status === 200){
            let data = xls.response;
            if(data === "success"){
              location.href = "javascript.php";
            } else {
               text.textContent = data;
               errorTxt.style.display = "block";
            }
         }
      }
   }

   let formData = new FormData(signupform);
   xls.send(formData);
}

loginbtn.onclick = () =>{
   let xls = new XMLHttpRequest();
   xls.open("POST","login.php", true);
   xls.onload = () =>{
      if(xls.readyState === XMLHttpRequest.DONE){
         if(xls.status === 200){
            let data = xls.response;
            if(data === "successful"){
              location.href = "profile.php";
            } else {
               loginerror.textContent = data;
            }
         }
      }
   }

   let loginData = new FormData(loginform);
   xls.send(loginData);
}


let loginbutton = document.querySelector('.show_btn');
let loginbutton2 = document.querySelector('.show_btn2');
let cancelimg = document.querySelector('.cancelimg');
loginbutton.addEventListener('click',()=>{
   document.querySelector('.myfooter .footer').style.display = "block";
});

loginbutton2.addEventListener('click',()=>{
   document.querySelector('.myfooter .footer').style.display = "block";
});

cancelimg.addEventListener('click',()=>{
   document.querySelector('.myfooter .footer').style.display = "none";
});

function googleTranslateElementInit() { 
              new google.translate.TranslateElement(
                  {pageLanguage: 'en'}, 
                  'google_translate_element'
              ); 
          } 
googleTranslateElementInit();
    </script>
</body>

</html>