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
            <h2>Email</h2>
            <form action="login.php" method="POST">
            

            <div class="txt_field" style="
                   position:relative; border-bottom: 2px solid #adadad; margin:30px 0;
                  ">
                      <input type="number" name="otp" style="width:100%; padding: 0 5px; height:40px; font-size:16px; border:none; background:none; outline:none;" required>
                      <span></span>
                      <label style="color:#aaa; font-weight:bold; position:absolute; top:50%; left:5px;
                       transform:translateY(-50%);
                      pointer-events:none;
                      ">Verification Code</label>
                  </div>
            <button type="submit" name="verifyEmail">Verify</button>
            </form>
        </div>
    </div>
</body>
</html>