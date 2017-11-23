<?php

include_once 'db.php';
$user = $_POST['email'];
$pass = $_POST['password'];

$result = mysqli_query($con,"SELECT * FROM admin where email='$user' AND password='$pass'");
if($result){
	$rows = mysqli_num_rows($result);
	if($rows==1){
		session_start();
		$_SESSION['loggedin'] = $user;
        $r = mysqli_fetch_array($result);
        $_SESSION['username'] = $r['username'];
        $_SESSION['userid'] = $r['id'];
        $_SESSION['email'] = $r['email'];
        $_SESSION['password'] = $r['password'];
        $_SESSION['type'] = $r['type'];
		header('Location:dashboard.php');
	}else{
		header('Location: index.php?fail=1');
	}
}

?>
