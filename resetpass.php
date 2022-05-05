<?php 
session_start();
include_once "projectfile.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Bills Payment</title>
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


<div class="container-fluid">
<div class="row" style="margin-top: 50px">
  <div class="col-md-4"></div>
<div class="col-md-4">
<div class="card">
<div class="card-body">

<?php

// include_once("projectfile.php");


  //   $objpass= new User();
  // if(!empty($_POST['newpass']) && !empty($_GET['token'])){
    

  // $output=$objpass->passret($_GET['email'],$_GET['token'],$_POST['newpass'],$_POST['rtpass'],$_POST['reset']);


  




  // }

?>


  <?php 
  // if (!empty($output)) {
    

   ?>

   <div><?php //echo $output; ?></div>

  <?php //}else{?>    
     
<div class="card reset" style="border-radius: 10px">
  <div class="card-body">
  <?php 
      $selector = $_GET['selector'];
      $validator = $_GET['validator'];
      

      if(empty($selector) || empty($validator)) {
        echo "We could not validate your request";
      } else {
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
          
       ?>  
    <h4>Password Reset</h4>
        <form id="updatepasswordform">
        <div class="errortxt" style="width:100%;  background-color: #ddd; text-align: center;height:3em; margin: 0 auto; border-radius:10px; color:red!important; display:flex;
                    justify-content: center; align-items: center;  display:none; margin-bottom:3em;">
                 <p style="font-size:1.1em; padding-top:5px; color:red!important"></p>
                    </div>


      <input type="hidden" name="unique" value="<?php echo $selector;?>">
      <label for="np">New Password</label>
      <div class="form-group">
      <input type="password" name="newpass" id="newpass" placeholder="new password" required class="form-control" id='newpass'>
         </div>
      
      <label for="rp">Confirm Password</label>
      <div class="form-group">
      <input type="password" name="confirmpass" id="confirmpass" placeholder="re-type password" required class="form-control" id='rtpass'>
      <small id="myinfo"></small>
      </div>
      <button type="submit" name="reset"  id='reset' class="btn btn-secondary btn-block">Reset Password</button>

      </form>

      <?php
    }
  }
?>

<br>

</div>
</div>
<?php// } ?>



   
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
    <script>
      const updatepwd = document.getElementById('reset');
      const updatepassform = document.getElementById('updatepasswordform');
      const errorTxt = document.querySelector('.errortxt');
      const text = document.querySelector('.errortxt p');

      updatepassform.onsubmit = (e) =>{
        e.preventDefault();
     }

      updatepwd.onclick = () =>{
   let xhr = new XMLHttpRequest();
   xhr.open("POST","reset-password.php", true);
   xhr.onload = () =>{
      if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status === 200){
            let data = xhr.response;
            //console.log(data);
            if(data === "success"){
                location.href = "index.php?updatedpasswordsuccess";
            } else {
               text.textContent = data;
               errorTxt.style.display = "block";
            }
         }
      }
   }

   let formpwd = new FormData(updatepassform);
   xhr.send(formpwd);
}


    </script>
</body>
</html>