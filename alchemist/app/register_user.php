<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','appberc');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO `users` VALUES ('','$email','$username','$password','$phone')";


    if(mysqli_query($con,$sql)){
        echo "1";
    }else{
        echo "0";
    }


?>
