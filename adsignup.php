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
                                            <a class="nav-link" href="about.html"> About Us  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="clients.html">Our Clients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ourwork.html">Our Work</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#contact">Contact Us</a>
                                        </li>
                                    </ul>
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

    <!-- Javascript System -->
    <main>
        <h2 style="text-align:center; position:absolute; top:8em;">Admin</h2>
        <div class="javascript">
        <div class="login_form" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width:29em;  background:white; border-radius:10px;">
              <h3 id="error"></h3>
              <form  method="post" style="padding: 0 40px; box-sizing:border-box;" id="loginform">
              <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="text" name="adminname" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                      transform:translateY(-50%);
                      pointer-events:none;
                      ">Username</label>
                  </div>

                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="email" name="adminemail" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                      transform:translateY(-50%);
                      pointer-events:none;
                      ">Email</label>
                  </div>

                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="password" name="adminpassword" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Password</label>
                  </div>
                  <button type="submit" name="loginbtn" id="loginbtn">Signup</button>
              </form>
            </div>

        </div>
    </main>

    <style>
        main {
            width: 100%;
            height: 100vh;
            background-color: #d8dfee;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login_form{
                height:30em;
            }
            .login_form h3{
                padding:1em;
                color:red;
                text-align:center;
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
            
        
        .javascript {
            width: 30%;
            height: 30em;
            background-color: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: 16em;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: black;
        }

        main h2:hover{
            color: #2691d9;
        }
        
        
        .txt_field span::before {
            content: "";
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2691d9;
            transition: .5s;
        }
        
        .txt_field label {
            transition: .5s;
        }
        
        .txt_field input:focus~label,
        .txt_field input:valid~label {
            top: -5px!important;
            color: #2691d9!important;
        }
        
        .txt_field input:focus~span::before,
        .txt_field input:valid~span::before {
            width: 100%;
        }
    </style>

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
        const adminform = document.getElementById('loginform'),
              adminbtn = document.getElementById('loginbtn'),
              adminerror = document.getElementById('error');

              adminform.onsubmit = (e) =>{
   e.preventDefault();
}

adminbtn.onclick = () =>{
   let xls = new XMLHttpRequest();
   xls.open("POST","adlinkpage.php", true);
   xls.onload = () =>{
      if(xls.readyState === XMLHttpRequest.DONE){
         if(xls.status === 200){
            let data = xls.response;
            if(data === "success"){
              location.href = "adminprofile.php";
            // console.log(data);
            } else {
               adminerror.textContent = data;
            }
         }
      }
   }

   let adminData = new FormData(adminform);
   xls.send(adminData);
}

    </script>
</body>

</html>