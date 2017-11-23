<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','alchemist');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');


    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";

    $res = mysqli_query($con,$sql);

    if(mysqli_num_rows($res)>0){
        echo "1";
    }else{
        echo "0";
    }


?>
