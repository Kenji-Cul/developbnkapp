<?php 
session_start();
include_once "projectfile.php";
?>
<!DOCTYPE html>
<!--
	Cosmix by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DBOA</title>
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="updatecss/bootstrap.css">
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="updatecss/style.css">
    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="updatecss/responsive.css">
    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="updatecss/animate.css">
    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="updatecss/prettyPhoto.css">
    <!--Font-Awesome-->
    <link rel="stylesheet" type="text/css" href="updatecss/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="icons/css/all.css">
    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="updatecss/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="updatecss/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="updatecss/owl.transitions.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->

  <!-- <style>
      body{
          overflow-y:auto!important;
      }
  </style> -->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
    <!--Preloader-->
    <div id="preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
    <!--Navigation-->
    <header id="menu">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="#menu">
                            <h2 style="color:whitesmoke">DB <small style="font-size: 15px; color:white;">Development Bank</small></h2>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="scroll" href="#menu">Home</a></li>
                            <li><a class="scroll" href="#about">About</a></li>
                            <li><a class="scroll" href="#service">Service</a></li>
                            <li><a class="scroll" id="show" href="#features">Features</a></li>
                            <li><a class="scroll" href="#portfolio">Portfolio</a></li>
                            <li><a class="scroll" href="contact.php">Contact Us</a></li>
                            <li><a class="scroll" href="#team">Team</a></li>
                            <?php if(isset($_SESSION['firstname'])){?>
                                        <li class="nav-item">
                                            <a class="scroll" href="profile.php">Profile</a>
                                        </li>
                                        <?php }?>
                            <li><a class="scroll" href="#blog">Blog</a></li>
                            <?php if(!isset($_SESSION['firstname'])){?>
                            <li><a class="scroll" href="#contact">Sign Up</a></li>
                            <?php }?>
                            <li>
                            <?php if(isset($_SESSION['firstname'])){?>
                            <a class="scroll"  href="logout.php">Log Out</a>
                                            <?php }else{?>
                            <a class="scroll show_btn" href="#">Log In</a>
                                            <?php }?>
                        </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!--Slider-Start-->
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(updateimages/Slider/01.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>Welcome to </h1>
                                <h2>Development Bank</h2>
                                <p>Here – We serve you better with Finance. Get all the Supports you need for a better life,we offer Loans,Checks and Global assets. We can help you invest.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(updateimages/Slider/02.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>We Are Finance</h1>
                                <h2>Save a Peny today</h2>
                                <p>Here – We serve you better with Finance. Get all the Supports you need for a better life,we offer Loans,Checks and Global assets. We can help you invest.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(updateimages/Slider/03.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>We Are Development Bank</h1>
                                <h2>Creative Savings</h2>
                                <p>Here – We serve you better with Finance. Get all the Supports you need for a better life,we offer Loans,Checks and Global assets. We can help you invest.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
        </div>
        <!--/#home-carousel-->
    </section>
    <!--About-Section-Start-->
    <section id="about">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>ABOUT <span>US</span></h2>
                    <div class="line"></div>
                    <p><span><strong>L</strong></span> The Development Bank (DB) is committed to achieving a prosperous, inclusive, resilient, and sustainable Asia, the Pacific, Europe and Part Of Middle East, while sustaining its efforts to eradicate extreme
                        poverty. It assists its members and partners by providing loans, technical assistance, grants, and equity investments to promote social and economic development.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ab-sec">
                    <div class="col-md-6">
                        <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><span>S</span>ave a Peny today Earn tomorrow</h3>
                        <p><span><strong>D</strong></span>id you know that if you double a penny every day, by the end of the month it will be $10 million?<br> Education is super expensive, but it’s one of those things that can’t be ignored in order to make
                            money. And the study of infinite banking concept will get you there faster than anything else that I came across during my 30-year long career in banking and insurance.<br>Do you want to know how you can make money just by
                            paying attention to the power of compounding interest? We are going to bring out that paert of you. </p>
                    </div>
                    <div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img style="height: 400px;" src="updateimages/Aboutus/01.jpg" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <!--About-Sec-2-Start-->
    <div class="bg-sec">
        <div class="container">
            <div class="col-md-10 col-sm-10 col-xs-8">
                <h3>Premium quality Services </h3>
                <p>You can upgrade your account at anytime and any where,We Serve to fufil</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4"> <a class="btn-down" href="#">Like</a> </div>
        </div>
    </div>
    <!--Service-Section-Start-->
    <section id="service">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>DIGITAL SERVI<span>CE</span></h2>
                    <div class="line"></div>
                    <p><span><strong>L</strong></span>With our digital banking services, we offer you the choice to access your account anytime, anywhere from your laptop or smartphone. Banking made easier through innovation</p>
                </div>
            </div>
            <div class="row">
                <div class="features-sec">
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
                            <div class="media-body">
                                <h5 class="media-heading">World Supplies</h5>
                                <p>Backed by some of the biggest Financial Organisation in the industry, Development Bank (WS) is an open platform.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-cubes"></i> </div>
                            <div class="media-body">
                                <h5 class="media-heading">global businesses</h5>
                                <p> company that operates facilities (such as Business managemt) in many countries around the world.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-pie-chart"></i> </div>
                            <div class="media-body">
                                <h5 class="media-heading">Marketing</h5>
                                <p>Start your own global marketing for Financial business plans.The financial picture is quite encouraging.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left"> <a href="adminlogin.php" style="color:#e73131;"><i class="fa fa-bar-chart"></i></a></div>
                            <div class="media-body">
                                <h5 class="media-heading">OTF Services</h5>
                                <p>OTF Service Retirement Savings Accounts GMTR Pension from Fund Administrators only our long time customers. </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-language"></i> </div>
                            <div class="media-body">
                                <h5 class="media-heading">Global Assets Under Management</h5>
                                <p>This consists of assets held by asset management firms, pension funds, sovereign wealth funds, and private equity funds.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left"> <i class="fa fa-bullseye"></i> </div>
                            <div class="media-body">
                                <h5 class="media-heading">DB internet banking service</h5>
                                <p>Electronic banking service which enables customers to perform several financial and non-financial transactions via the internet.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <div class="experience">
                <div class="col-sm-6 col-xs-12">
                    <div class="our-skills wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p class="lead">Cyber Security</p>
                            <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="90" style="width: 95%;"> 95% </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <p class="lead">Upgrades</p>
                            <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"> 80% </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <p class="lead">User Experience</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="60" style="width: 60%;"> 60% </div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <p class="lead">Marketing</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="70" style="width: 70%;"> 70% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms"> <img src="updateimages/Service/01.png" class="img-responsive" alt=""> </div>
            </div>
        </div>
    </section>
    <!--Features-Section-Start-->
    <section id="features">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>AWESOME FEATUR<span>ES</span></h2>
                    <div class="line"></div>
                    <p><span><strong>W</strong></span>ith our digital bank, all of your bank account information and features can be accessed... Check Deposits. No more driving across town to deposit a check at your bank — DB Check deposits allow you to...</p>
                </div>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i></a></li>
                <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
                <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-code"></i></a></li>
                <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                <li role="presentation"><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"></i></a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
                    <div class="col-md-6 tab">
                        <h5>Corporate Solutions</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">We are committed to the development of the real sectors of the economy. We offer a portfolio of corporate & commercial banking services.At Development Bank,We are Positioned to be the Energy Bank of choice by offering our stakeholders
                            value added customized financial solutions.<br>
                        </p>
                        <p class="feat-sec-1">With longer-tenure credit, flexible payment plan and lower equity, banking with us is a rewarding relationship that enables you to enjoy life. Enjoy banking with us as we are spread across continents. Our Wide footprint across
                            Asia,London, Paris and New York opens up opportunities for new and existing customers to enjoy our excellent services globally.</p>
                    </div>
                    <div class="col-md-6 tab-img"><img style="height: 300px;" src="updateimages/Features/01.jpg" class="img-responsive" alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
                    <div class="col-md-6 tab">
                        <h5>Graphic Design</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
                        </p>
                        <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account of the system, and expound </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="updateimages/Features/02.jpg" class="img-responsive" alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
                    <div class="col-md-6 tab">
                        <h5>Web Development</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
                        </p>
                        <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account of the system, and expound </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="updateimages/Features/03.jpg" class="img-responsive" alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-4">
                    <div class="col-md-6 tab">
                        <h5>Responsive Design</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
                        </p>
                        <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account of the system, and expound </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="updateimages/Features/04.jpg" class="img-responsive" alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-5">
                    <div class="col-md-6 tab">
                        <h5>Creative Gallery</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
                        </p>
                        <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account of the system, and expound </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="updateimages/Features/05.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    
    <!--Team-Section-Start-->
    <section id="team">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>OUR TE<span>AM</span></h2>
                    <div class="line"></div>
                    <p><span><strong>L</strong></span>At Our Finance Team, our mission is to provide timely and affordable services to support your companies finance needs for the main objective of your company – grow your company’s profits.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="team-sec">
                        <div class="team-img"> <img src="updateimages/Team/01.jpg" class="img-responsive" alt="">
                            <div class="team-desc">
                                <h5>Julia Wendy</h5>
                                <p>Head of the printing and typesetting industry</p>
                                <ul class="team-social-icon">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="team-sec">
                        <div class="team-img"> <img src="updateimages/Team/02.jpg" class="img-responsive" alt="">
                            <div class="team-desc">
                                <h5>Merry Alex</h5>
                                <p>Head of Accountants</p>
                                <ul class="team-social-icon">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="team-sec">
                        <div class="team-img"> <img src="images/Team/03.jpg" class="img-responsive" alt="">
                            <div class="team-desc">
                                <h5>Poll Astin</h5>
                                <p>Head of Customer care service</p>
                                <ul class="team-social-icon">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="team-sec">
                        <div class="team-img"> <img src="updateimages/Team/04.jpg" class="img-responsive" alt="">
                            <div class="team-desc">
                                <h5>Brown Modoh</h5>
                                <p>Head of Cyber Securities</p>
                                <ul class="team-social-icon">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title=""><i class=""></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials-Section-Start-->
    <section id="testimonials" class="parallex">
        <div class="container">
            <div class="quote"> <i class="fa fa-quote-left"></i> </div>
            <div class="clearfix"></div>
            <div class="slider-text">
                <div id="owl-testi" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="col-md-10 col-md-offset-1"> <img src="updateimages/Testimonials/02.jpg" class="img-circle" alt="">
                            <h5>We will always do our possible best to make sure that the upgrade of this web is infinity.</h5>
                            <h6>EMA CHIN</h6>
                            <p>Web Developer</p>
                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1"> <img src="updateimages/Testimonials/03.jpg" class="img-circle" alt="">
                        <h5> Is there anyone who loves or pursues or desires to obtain pain of itself,No all we do is to make your dreams come throgh</h5>
                        <h6>SAM DEENY</h6>
                        <p>Web Designer</p>
                    </div>
                    <div class="col-md-10 col-md-offset-1"> <img src="updateimages/Testimonials/04.jpg" class="img-circle" alt="">
                        <h5>This is our dream and our life depends on it </h5>
                        <h6>ALINA DOE</h6>
                        <p> Trading Expert</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fun-Facts-Section-Start-->
    <section id="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <h3><i class="fa fa-thumbs-o-up"></i> <span class="timer">365</span></h3>
                        <h6>Happy Clients</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <h3><i class="fa fa-briefcase fa-6"></i> <span class="timer">73987</span></h3>
                        <h6>Completed Projects</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <h3><i class="fa fa-coffee"></i> <span class="timer">297345</span></h3>
                        <h6>Cups of Coffee</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <h3><i class="fa fa-code"></i> <span class="timer">9823686</span></h3>
                        <h6>Lines of Code</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog-Section-Start-->
    <section id="blog">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>LATEST BL<span>OG</span></h2>
                    <div class="line"></div>
                    <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 blog-sec">
                        <div class="blog-info"> <img src="updateimages/Blog/1.jpg" class="img-responsive" alt="">
                            <div class="data-meta">
                                <h4>Jan</h4>
                                <strong>10</strong><br> 2016 </div>
                            <a href="#">
                                <h5>Our Board Confrence</h5>
                            </a>
                            <ul class="blog-icon">
                                <li><i class="fa fa-pencil"></i>
                                    <a href="#">
                                        <h6>John</h6>
                                    </a>
                                </li>
                                <li class="comment"><i class="fa fa-comment"></i>
                                    <a href="#">
                                        <h6>13</h6>
                                    </a>
                                </li>
                            </ul>
                            <p>FMG Annual Meeting Awards typically include "Best Paper" awards in specific disciplines such as Corporate Finance, Fintech, Investments, International Finance, Risk Management, and Market Microstructure.</p>
                            <a href="#" class="btn-blg">Like</a> </div>
                    </div>
                    <div class="col-md-4 blog-sec">
                        <div class="blog-info"> <img src="updateimages/Blog/2.jpg" class="img-responsive" alt="">
                            <div class="data-meta">
                                <h4>Jan</h4>
                                <strong>20</strong><br> 2019 </div>
                            <a href="#">
                                <h5>Sed ut perspiciatis unde omnis</h5>
                            </a>
                            <ul class="blog-icon">
                                <li><i class="fa fa-pencil"></i>
                                    <a href="#">
                                        <h6>Maria</h6>
                                    </a>
                                </li>
                                <li class="comment"><i class="fa fa-comment"></i>
                                    <a href="#">
                                        <h6>04</h6>
                                    </a>
                                </li>
                            </ul>
                            <p>The FINDOT Financial Europe Conference & Awards brings together leading experts across Europe to deliver key, actionable insights into the very latest regulatory requirements, technological innovations, strategic developments,
                                .
                            </p>
                            <a href="#" class="btn-blg">Like</a> </div>
                    </div>
                    <div class="col-md-4 blog-sec">
                        <div class="blog-info"> <img src="updateimages/Blog/3.jpg" class="img-responsive" alt="">
                            <div class="data-meta">
                                <h4>Jan</h4>
                                <strong>31</strong><br> 2021 </div>
                            <a href="#">
                                <h5>Sed ut perspiciatis unde omnis</h5>
                            </a>
                            <ul class="blog-icon">
                                <li><i class="fa fa-pencil"></i>
                                    <a href="#">
                                        <h6>Bear</h6>
                                    </a>
                                </li>
                                <li class="comment"><i class="fa fa-comment"></i>
                                    <a href="#">
                                        <h6>05</h6>
                                    </a>
                                </li>
                            </ul>
                            <p>In a post-pandemic and uncertain global economy, few industries have demonstrated the same level of agility and resilience as the Asset Finance industry.MR ADMIND VAWA Hosted the best Award Nigh</p>
                            <a href="#" class="btn-blg">Like</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Client-Section-Start-->
    <div id="client">
        <div class="container">
            <div id="client-slider" class="owl-carousel">
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/1.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/2.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/3.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/4.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/5.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/6.png" class="img-responsive" alt="" /></a>
                </div>
                <div class="item client-logo">
                    <a href="#"><img src="updateimages/clients/7.png" class="img-responsive" alt="" /></a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @media only screen and (max-width:800px){
            #contactdiv{
                display:none;
            }
        }

        .main_form i {
    position: absolute;
    right: 27px;
    font-size: 20px;
    color: #333;
    top: 31%;
    transform: translateY(-50%);
    cursor: pointer;
}

.main_form #eyeslash {
    position: absolute!important;
    right: 27px!important;
    font-size: 20px!important;
    color: #333!important;
    top: 212px!important;
    transform: translateY(-50%)!important;
    cursor: pointer!important;
}

.login_form i {
    position: absolute;
    right: 27px;
    font-size: 20px;
    color: #333;
    top: 52%;
    transform: translateY(-50%);
    cursor: pointer;
}

.main_form i.active::before {
    color: #333;
    content: "\f070";
}

.login_form i.active::before {
    color: #333;
    content: "\f070";
}
    </style>
    <!--Contact-Section-Start-->
    <section id="contact">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>SIGN <span>UP</span></h2>
                    <div class="line"></div>
                    <p></p>
                </div>
            </div>
            <div class="text-center">
                <div class="col-md-6 col-sm-6 contact-sec-1" id="contactdiv">
                    <h4>CONTACT IN<span>FO</span></h4>
                    <ul class="contact-form">
                        <li><i class="fa fa-map-marker"></i>
                        <h6><strong>Address:</strong> No 123 , Wallstreet, Los Angeles <br><br> No.22 Zhongshan Dong Yia road,Shangai. Fax: 86-21-63230036<br><br> No 6 ADB Avenue,Mandaluyong City 15550,Metro Manila Philippines.  </h6>
                        </li>
                        <li><i class="fa fa-envelope"></i>
                            <h6><strong>Mail Us:</strong> <a href="#">bankdevelopmentfin@gmail.com</a></h6>
                        </li>
                        <li><i class="fa fa-phone"></i>
                            <h6><strong>Phone:</strong> +63 950-253-5895 +1 435-574-9534 </h6>
                        </li>
                        <li><i class="fa fa-wechat"></i>
                            <h6><strong>Website:</strong> <a href="#">developmentbnk.org</a> </h6>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form id="main-contact-form" name="contact-form" method="POST" action="#" class="main_form">
                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text"  class="form-control" placeholder="First Name" name="firstname" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text"  class="form-control" placeholder="Middle Name" name="middlename" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="telephone" class="form-control" placeholder="Phone Number" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email"  class="form-control" placeholder="Your Email" name="email" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="">
                                    <i class="fas fa-eye-slash"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <input type="password" name="secondpassword" id="secondpassword" class="form-control" placeholder="Confirm Password" value="">
                        <i class="fas fa-eye-slash" id="eyeslash"></i>
                        </div>
                     <style>
                         input[type="radio"]:hover{
                             box-shadow:none!important;
                         }

                         input[type="radio"]:active{
                            box-shadow:none!important;
                         }
                         
                         input[type="radio"]{
                            box-shadow:none!important;
                            accent-color: black;
                         }
                         
                     </style>
                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-6">
                                <div class="form-group" style="display:flex;">
                                <input type="hidden" name="gender" value="">
                                <label for="male" style="margin-top:1em; font-size:17px;">Male:</label>
                                    <input type="radio" name="gender" id="male" class="form-control"  value="Male">
                                    <label for="female" style="margin-top:1em; font-size:17px;">Female:</label>
                                    <input type="radio" name="gender"  id="female" class="form-control" value="Female">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <select name="maritalstats"  class="form-control">
                                    <option value="">--Your Marital Status--</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                                </div>
                            </div>
                        </div>
                          
                        <div class="hideal">
                        <div class="downbutton"  style="width:5em; height:5em; background-color:red; position:absolute; right:-6.5em; margin-top:3em; cursor:pointer; display:flex; align-items:center; justify-content:center; border-radius:6px; box-shadow: 0 0 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon points="18,6.41 16.59,5 12,9.58 7.41,5 6,6.41 12,12.41"/><polygon points="18,13 16.59,11.59 12,16.17 7.41,11.59 6,13 12,19"/></g></g></svg>
                        </div>
                        </div>

                        <div class="hidebtn" style="display:none;">
                        <div class="upbutton"  style="width:5em; height:5em; background-color:red; position:absolute; right:-6.5em; margin-top:3em; cursor:pointer; display:flex; align-items:center; justify-content:center; border-radius:6px; box-shadow: 0 0 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon points="6,17.59 7.41,19 12,14.42 16.59,19 18,17.59 12,11.59"/><polygon points="6,11 7.41,12.41 12,7.83 16.59,12.41 18,11 12,5"/></g></g></svg>
                        </div>
                        </div>
                        


                        <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-sm-3">
                                <div class="form-group">
                                <label for="#" style="color:#000000; font-size: 17px;">Date Of Birth:</label>
                                <?php 
                                  $days = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");

                                  $months = array("January","February","March","April","May","June","July","August","September","October","November","December");

                                  $years = array("2011","2010","2009","2008","2007","2006","2005","2004","2003","2002","2001","2000","1999","1998","1997","1996","1995","1994","1993","1992","1991","1990","1989","1988","1987","1986","1985","1984","1983","1982","1981","1980","1979","1978","1977","1976","1975","1974","1973","1972","1971","1970","1969","1968","1967","1966","1965","1964","1963","1962","1961","1960","1959","1958","1957","1956","1955","1954","1953","1952","1951","1950","1949","1948","1947","1946","1945","1944","1943","1942","1941","1940","1939","1938","1937","1936","1935","1934","1933","1932","1931","1930","1929","1928","1927","1926","1925","1924","1923","1922","1921","1920","1919","1918","1917","1916","1915","1914","1913","1912","1911","1910","1909","1908","1907","1906","1905","1904","1903","1902","1901","1900");
                                ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group" >
                                <select name="dob" id="dob"  class="form-control">
                                    <option value="Day">Day</option>
                                <?php 
                                      foreach ($days as  $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                <select name="mob" id="mob"  class="form-control">
                                <option value="Month">Month</option>
                                <?php 
                                      foreach ($months as  $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                <select name="yob" id="yob"  class="form-control">
                                <option value="Year">Year</option>
                                <?php 
                                      foreach ($years as  $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="addressof" id="message" class="form-control" rows="2" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                        <?php 
                                 $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                            <select name="country"  placeholder="Country" class="form-control">
                            <option value="select">--Select Country--</option>
                                    <?php 
                                      foreach ($countries as  $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="errortxt" style="width:80%;  background-color: black; text-align: center;height:3em; margin: 0 auto; border-radius:10px; color:white!important; display:flex;
                    justify-content: center; align-items: center;  display:none; margin-bottom:3em;">
                 <p style="font-size:1.3em; padding-top:5px; color:white!important"></p>
                    </div>
                        <button class="btn-send col-md-12 col-sm-12 col-xs-12" id="sendbtn">CREATE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
            .login_form{
                height:30em;
            }
            .footer .cancelimg{
                position:absolute;
                right:7em;
                top:8em;
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
                background: #e73131;
                transition:.5s;
            }


            .txt_field label{
                transition: .5s;
            }

            .txt_field input:focus ~ label,
            .txt_field input:valid ~ label{
                top:-5px!important;
                color: #e73131!important;
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

            .pass a{
                color: #e73131;
                text-decoration:none;
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
                background: #e73131;
                border-radius:25px;
                font-size:18px;
                color: #e9f4fb;
                font-weight:700;
                cursor:pointer;
                outline:none;
            }

            .login_form button[type="submit"]:hover{
                border-color: #e73131;
                transition:.5s;
            }

            .signup_link{
                margin: 30px 0;
                text-align:center;
                font-size:16px;
                color: #666666;
            }

            .signup_link a{
                color:#e73131;
                text-decoration:none;
            }

            .signup_link a:hover{
                text-decoration:underline;
            }

            @media only screen and (max-width:800px){
             .hidebtn,.hideal{
                 display:none;
             }
             #show{
                 display:none!important;
             }
             .footer .cancelimg{
                position:absolute;
                right:11em;
                top:5em;
                cursor:pointer;
            }
            }
        </style>


    <div class="footer" style="
        background-color: rgba(0,0,0,0.9);
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;display:flex; justify-content: center; align-items: center; display:none; color:white;">

         
        <svg class="cancelimg" xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.3 14.3c-.39.39-1.02.39-1.41 0L12 13.41 9.11 16.3c-.39.39-1.02.39-1.41 0-.39-.39-.39-1.02 0-1.41L10.59 12 7.7 9.11c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L12 10.59l2.89-2.89c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41L13.41 12l2.89 2.89c.38.38.38 1.02 0 1.41z"/></svg>

            <div class="login_form" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width:29em;  background:white; border-radius:10px;">
              <h3 id="error" style="color:black;"></h3>
              <form  method="post" style="padding: 0 40px; box-sizing:border-box;" id="loginform">
                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="email" name="seenemail" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none; color:black;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                      transform:translateY(-50%);
                      pointer-events:none;
                      ">Email</label>
                  </div>

                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="password" name="seenpassword" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none; color:black;" required>
                      <span></span>
                      <i class="fas fa-eye-slash"></i>
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

    <footer id="footer">
        <div class="bg-sec">
            <div class="container">
                <h2>LOOKING FORWARD TO <strong>HEARING </strong>FROM YOU!</h2>
            </div>
        </div>
    </footer>
    <footer id="footer-down">

        <p> &copy; Copyright 2022 development bank<a href="http://templatestock.co" target="_blank">DB</a> </p>
    </footer>
    <!--Jquery-->
    <script type="text/javascript" src="updatejs/jquery.min.js"></script>
    <!--Boostrap-Jquery-->
    <script type="text/javascript" src="updatejs/bootstrap.js"></script>
    <!--Preetyphoto-Jquery-->
    <script type="text/javascript" src="updatejs/jquery.prettyPhoto.js"></script>
    <!--NiceScroll-Jquery-->
    <script type="text/javascript" src="updatejs/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="updatejs/waypoints.min.js"></script>
    <!--Isotopes-->
    <script type="text/javascript" src="updatejs/jquery.isotope.js"></script>
    <!--Wow-Jquery-->
    <script type="text/javascript" src="updatejs/wow.js"></script>
    <!--Count-Jquey-->
    <script type="text/javascript" src="updatejs/jquery.countTo.js"></script>
    <script type="text/javascript" src="updatejs/jquery.inview.min.js"></script>
    <!--Owl-Crousels-Jqury-->
    <script type="text/javascript" src="updatejs/owl.carousel.js"></script>
    <!--Main-Scripts-->
    <script type="text/javascript" src="updatejs/script.js"></script>
    <script>
       let signupbutton = document.getElementById('sendbtn');

const signupform = document.querySelector('.main_form'),
      errorTxt = document.querySelector('.errortxt'),
      text = document.querySelector('.errortxt p');
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
            //console.log(data);
            if(data === "success"){
            let allinput = signupform.querySelectorAll('input');
            let textarea = signupform.querySelector('textarea');
            let select = signupform.querySelector('select');
            select.value = "select";
            textarea.value = "";
            for(i = 0; i < allinput.length; i++){
                allinput[i].value = "";
            }
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
                let loginput = loginform.querySelectorAll('input');
                for(i = 0; i < loginput.length; i++){
                loginput[i].value = "";
            }
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

const pswrdfield = document.querySelector(".main_form input[type='password']")
const pswrdfield3 = document.getElementById("secondpassword")
const pswrdfield2 = document.querySelector(".login_form input[type='password']")

toggleBtn = document.querySelector(".main_form i");
toggleBtn3 = document.getElementById("eyeslash");
toggleBtn2 = document.querySelector(".login_form i");

        toggleBtn.onclick = () => {
    if (pswrdfield.type == "password") {
        pswrdfield.type = "text";
        toggleBtn.classList="fas fa-eye";
    } else {
        pswrdfield.type = "password";
        toggleBtn.classList="fas fa-eye-slash";
    }
}


toggleBtn3.onclick = () => {
    if (pswrdfield3.type == "password") {
        pswrdfield3.type = "text";
        toggleBtn3.classList="fas fa-eye";
    } else {
        pswrdfield3.type = "password";
        toggleBtn3.classList="fas fa-eye-slash";
    }
}

toggleBtn2.onclick = () => {
    if (pswrdfield2.type == "password") {
        pswrdfield2.type = "text";
        toggleBtn2.classList="fas fa-eye";
    } else {
        pswrdfield2.type = "password";
        toggleBtn2.classList="fas fa-eye-slash";
    }
}


let loginbutton = document.querySelector('.show_btn');
//let loginbutton2 = document.querySelector('.show_btn2');
let cancelimg = document.querySelector('.footer .cancelimg');

cancelimg.addEventListener('click',()=>{
   document.querySelector('.footer').style.display = "none";
});

loginbutton.addEventListener('click',()=>{
   document.querySelector('.footer').style.display = "block";
});

document.querySelector('.downbutton').addEventListener('click',()=>{
window.scrollTo(0,20000);
document.querySelector('.downbutton').style.display = "none";
document.querySelector('.hidebtn').style.display = "block";
})

document.querySelector('.upbutton').addEventListener('click',()=>{
    window.scrollTo(0,20);
    document.querySelector('.downbutton').style.display = "block";
    document.querySelector('.hidebtn').style.display = "none";
})



// loginbutton2.addEventListener('click',()=>{
//    document.querySelector('.myfooter .footer').style.display = "block";
// });

// function googleTranslateElementInit() { 
//               new google.translate.TranslateElement(
//                   {pageLanguage: 'en'}, 
//                   'google_translate_element'
//               ); 
//           } 
// googleTranslateElementInit();
    </script>
</body>

</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->