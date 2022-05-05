<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <?php 
    $dbcon = mysqli_connect("localhost","root","","practice");
    //check if the connection is okay
    if($dbcon){
       // echo "Connected Successfully";
    }else{
        die("connection failed");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phoneno'];
        $country = $_POST['country'];
    $sql = "INSERT INTO user(username,email,phonenumber,country) VALUES('{$username}','{$email}','{$phone}','{$country}')";
    $conn = mysqli_stmt_init($dbcon);

    if(mysqli_stmt_prepare($conn,$sql)){
         mysqli_stmt_execute($conn);
    }else{
        echo "There was an error";
        exit();
    }

}

    ?>

    <form action="" method="post">
        <input type="text" name="username" id="">
        <input type="text" name="email" id="">
        <input type="number" name="phoneno" id="">
        <input type="text" name="country" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>