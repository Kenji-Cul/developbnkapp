<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- animated.css link -->
 <link rel="stylesheet" type="text/css" href="animate.css-master/animate.css">
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->



<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- fontawsom CDN -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

<!-- favicon link -->

<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-32x32.png">

<!-- External styling -->

<style type="text/css" rel="stylesheet" media="screen" ><?php include_once('style.css'); ?></style>
<!-- internal css -->

<style type="text/css">

</style>


</head>
<!-- <body style="background-color: #0A043E"> -->

  <body style="background-image: url(images/lagos1.jpg); background-repeat:no-repeat; background-size: cover;">


<!-- //........................................................ -->

<?php



// include_once("projectfile.php");


//     $objpassr= new User();
  

//   if(isset($_POST['fgtpass'])){


// $outputr=$objpassr->forgetpass($_POST['email']);


    
      

// }


?>

<div class="container-fluid">
<div class="row" style="margin-top: 50px">
  <div class="col-md-4"></div>
<div class="col-md-4">
<div class="card">
<div class="card-body">

 <?php 
  // if (!empty($outputr)) {
    

   ?>

   <!-- <div class="alert alert-warning"><?php //echo $outputr; ?></div> -->

  <?php //}else{ ?>
<div class="card reset" style="border-radius: 10px">
  <div class="card-body">

        <form action="resetrequest.php" method="post">
        <div class="form-group">
          <input class="form-control" type="email" name="email" placeholder="enter email">
          <small id="emailHelp" class="form-text text-muted">Please Enter your registered Email linked to your account.</small>
        </div>
        <div>
          <button class="btn btn-primary btn-block" type="submit" name="fgtpass">Send</button>
        </div>
      </form>

      <?php 
          if(isset($_GET['reset'])){
            if($_GET["reset"] == "success") {
              echo '<h2 style="padding:2em;">Check your email</h2>';
            } elseif($_GET["reset"] == "failed") {
              echo '<h2 style="padding:2em;">Invalid User</h2>';
            }
          }
      ?>




<br>

</div>
</div>
<?php //} ?>

       
       
</div>
</div>
</div>
  <div class="col-md-4"></div>
</div>
</div>







<!-- //..................................................... -->


<footer style="margin-top: 100px; color: white">
  
<p>Powered by: Simpletech Technology.</p>

</footer>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script type="text/javascript">
      

    </script>
</body>
</html>