<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','alchemist');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$lat = $_POST['lat'];
$lng = $_POST['long'];

$radius = 10;

$q = "SELECT *, ( 6371 * acos( cos( radians({$lat}) ) * cos( radians( `lat` ) ) * cos( radians( `long` ) - radians({$lng}) ) + sin( radians({$lat}) ) * sin( radians( `lat` ) ) ) ) AS distance
FROM `complains_robbery` WHERE `type` <> 'PHONE'
HAVING distance <= {$radius}
ORDER BY distance ASC";

$q2 = "SELECT *, ( 6371 * acos( cos( radians({$lat}) ) * cos( radians( `lat` ) ) * cos( radians( `long` ) - radians({$lng}) ) + sin( radians({$lat}) ) * sin( radians( `lat` ) ) ) ) AS distance
FROM `complains_fire` WHERE `type` <> 'PHONE'
HAVING distance <= {$radius}
ORDER BY distance ASC";

$q3 = "SELECT *, ( 6371 * acos( cos( radians({$lat}) ) * cos( radians( `lat` ) ) * cos( radians( `long` ) - radians({$lng}) ) + sin( radians({$lat}) ) * sin( radians( `lat` ) ) ) ) AS distance
FROM `complains_accident` WHERE `type` <> 'PHONE'
HAVING distance <= {$radius}
ORDER BY distance ASC";



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

$count=0;

while($ro = mysqli_fetch_array($res)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Robbery';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = time_elapsed_string($ro['date']);
    $count++;
}

while($ro = mysqli_fetch_array($res2)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Fire';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = time_elapsed_string($ro['date']);
    $count++;
}

while($ro = mysqli_fetch_array($res3)){
    $image[$count] = $ro['photo'];
    $userid[$count] = $ro['user_id'];
    $type[$count] = 'Accident';
    $condition[$count] = $ro['condition'];
    $lat[$count] = $ro['lat'];
    $long[$count] = $ro['long'];
    $status[$count] = $ro['status'];
    $dates[$count] = time_elapsed_string($ro['date']);
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

$json = json_encode($obj);
print($json);


function time_elapsed_string($datetime, $full = false) {

    date_default_timezone_set('Asia/Brunei');

    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';

}


?>
