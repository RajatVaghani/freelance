<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','alchemist');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$username = $_POST['username'];

$radius = 10;

$q = "SELECT * FROM `complains_fire` WHERE `user_id` = '$username' AND `type` <> 'PHONE' ORDER BY id DESC";
$q2 = "SELECT * FROM `complains_accident` WHERE `user_id` = '$username' AND `type` <> 'PHONE' ORDER BY id DESC";
$q3 = "SELECT * FROM `complains_robbery` WHERE `user_id` = '$username' AND `type` <> 'PHONE' ORDER BY id DESC";

$res = mysqli_query($con, $q);
$res2 = mysqli_query($con, $q2);
$res3 = mysqli_query($con, $q3);


$image = array();
$userid = array();
$type = array();
$condition = array();
$lat = array();
$long = array();
$status = array();
$dates = array();
$comment = array();

$count=0;

while($ro = mysqli_fetch_array($res)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Fire';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = $ro['date'];
    $comment[$count] = $ro['comment'];
    $count++;
}


while($ro = mysqli_fetch_array($res2)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Accident';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = $ro['date'];
    $comment[$count] = $ro['comment'];
    $count++;
}


while($ro = mysqli_fetch_array($res3)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Robbery';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = $ro['date'];
    $comment[$count] = $ro['comment'];
    $count++;
}

$obj = new stdClass();
$obj->userid = $userid;
$obj->type = $type;
$obj->image = $image;
$obj->condition = $condition;
$obj->lat = $lat;
$obj->long = $long;
$obj->status = $status;
$obj->dates = $dates;
$obj->comment = $comment;

$json = json_encode($obj);
print($json);




?>
