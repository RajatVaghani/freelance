<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$tablename = "admin";


$sql = "UPDATE `".$tablename."` set username='$username', password='$password' WHERE email='$email'";
$res = mysqli_query($con, $sql);

header('Location: dashboard.php');


?>
