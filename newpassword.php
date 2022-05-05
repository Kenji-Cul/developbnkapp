<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgot.css">
</head>
<body>
    <div class="wrapper">
        <div class="forgot_form">
            <h2>Password</h2>
            <form action="login.php" method="POST">
                <?php 
                 if($errors > 0){
                     foreach($errors as $displayErrors){
                ?>

                <div class="alert"><?php echo $displayErrors; ?></div>

                <?php 
                     }
                    }
                ?>
            <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="password" name="password" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Password</label>
                  </div>

                  <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="password" name="confirm" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Confirm Password</label>
                  </div>
            <button type="submit" name="changepassword">Save</button>
            </form>
        </div>
    </div>
</body>
</html>