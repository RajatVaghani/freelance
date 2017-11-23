<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','alchemist');

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$image = $_POST['image'];
$userid = $_POST['username'];
$type = $_POST['type'];
$condition = $_POST['condition'];
$lat = $_POST['lat'];
$long = $_POST['longi'];
$status = "NEW";
$comment = $_POST['comment'];


date_default_timezone_set('Asia/Brunei');
$date = date('m/d/Y h:i:s a', time());
$m = date('m', time());
$d = date('d', time());

$tablename = "complains_". strtolower($type);



$sql ="SELECT id FROM `".$tablename."` ORDER BY id ASC";

$res = mysqli_query($con,$sql);

$id = 0;

while($row = mysqli_fetch_array($res)){
    $id = $row['id'];
}

if($image!="none"){
    $path = "uploads/$id.png";
}else{
    $path = "uploads/default.png";
}

if($condition=="PHONE"){
    $type = "PHONE";
    $condition="NA";
}else{
    $type="APP";
}


$actualpath = "http://192.168.2.7/freelancer/alchemist/$path";

$sql = "INSERT INTO `".$tablename."` VALUES ('','$userid', '$type', '$condition', '$lat', '$long', '$path', '$status', '$comment', '$date', $m, $d)";

if(mysqli_query($con,$sql)){
    if($image!="none"){
        file_put_contents($path,base64_decode($image));
    }
    echo "1";
}else{
    echo "0";
}

?>
