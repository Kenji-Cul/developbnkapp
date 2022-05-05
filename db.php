<?php 

$dbcon = mysqli_connect("localhost","root","","bank_db");
        //check if the connection is okay
        if($dbcon){
           // echo "Connected Successfully";
        }else{
            die("connection failed");
        }

?>