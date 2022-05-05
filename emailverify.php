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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="contactus.php">Contact Us</a>
                                        </li>
                                    </ul>
                                    <div class="sign_btn" style="display:flex; flex-direction:column;"><h3><span><?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?></span> <span><?php if(isset($_SESSION['lastname'])){echo$_SESSION['lastname'];}?></span></h3></div>
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
        <h2>Verify Your email</h2>
        <div class="javascript">
            <?php 
            $random = $_GET['random'];
            ?>
            <div class="em">
             <input type="hidden" name="" class="randum" value="<?php if(isset($random)){ echo $random;}?>">
             </div>
            <div class="txt_field"  style="
            position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
           ">
                <input type="text" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                <span></span>
                <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
               transform:translateY(-50%);
               pointer-events:none;
               ">Enter the number sent to you</label>
            </div>


           
            <button>Verify</button>


            <div class="verify">
                <svg version="1.1" class="success" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
<circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
<polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
	38,15 22,33 12,25 "/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                <h4>Email Verified</h4>
            </div>

            <div class="failed">
                <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="red"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>
                <h4>Try Again!!</h4>
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

        main h2{
            text-align:center; position:absolute; top:8em;
        }
        
        main button {
            background-color: green;
            color: white;
            padding: 0.5em 1em;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 20px;
        }
        
        button:hover {
            border: 2px solid black;
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
        
        .verify h4 {
            position: absolute;
            top: 24em;
        }
        
        .failed h4 {
            position: absolute;
            top: 23.5em;
            left: 10em;
        }
        
        .failed {
            margin-right: 4em;
            display: none;
        }
        
        .verify {
            position: absolute;
            left: 12em!important;
            top: 0em;
            display: none;
        }
        
        .verified {
            animation: verified 5s;
        }
        
        @keyframes verified {
            from {
                display: block;
            }
            to {
                display: none;
            }
        }
        
        main .success {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 23em;
        }
        
        main .cancelimg {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 23em;
        }
        
        .random {
            width: 20em;
            height: 4em;
            background: #5ba5fa;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 5em;
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

        @media only screen and (max-width:870px){
            .javascript{
                width:30em;
                position:absolute;
                top:25em;
            }

            main h2{
                position:absolute;
                top:13em;
            }
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
        let random = document.querySelector('.em input');
        let verifyInput = document.querySelector('.txt_field input');
        let button = document.querySelector('.javascript button');
        let verified = document.querySelector('.verify');
        let failed = document.querySelector('.failed');

        button.onclick = function() {
            if (verifyInput.value === random.value) {
                verified.style.display = "block";
                failed.style.display = "none";
                location.href = "sendwelcome.php";
            } else {
                failed.style.display = "block";
            }
        }
    </script>
</body>

</html>