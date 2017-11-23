<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$tablename = "admin";


$sql = "INSERT INTO `".$tablename."` VALUES ('','$username', '$email', '$password', 0)";
$res = mysqli_query($con, $sql);

header('Location: dashboard.php');


?>
