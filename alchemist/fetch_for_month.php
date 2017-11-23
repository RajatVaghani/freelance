<?php
include 'db.php';

$type = $_GET['type'];
$month = $_GET['month'];
$q = "";
$tablename = "";
if($type=="robbery"){
    $tablename = "complains_robbery";
}else if($type=="fire"){
    $tablename = "complains_fire";
}else{
    $tablename = "complains_accident";
}
$q = "SELECT * FROM ". $tablename. " ORDER BY date";

$res = mysqli_query($con, $q);
$arr = ["01"=>"Jan", "02"=>"Feb", "03"=>"March", "04"=>"Apr", "05"=>"May", "06"=>"June", "07"=>"July", "08"=>"August", "09"=>"September",
"10"=>"October", "11"=>"November", "12"=>"December"];
$arr2 = ["Jan"=>"01", "Feb"=>"02", "March"=>"03", "Apr"=>"04", "May"=>"05", "June"=>"06", "July"=>"07", "August"=>"08", "September"=>"09",
"October"=>"10", "November"=>"11", "December"=>"12"];
$noofdays = ["01"=>31, "02"=>28, "03"=>31, "04"=>30, "05"=>31, "06"=>30, "07"=>31, "08"=>31, "09"=>30, "10"=>31, "11"=>30, "12"=>31];

$dval = $arr2[$month];

$rs = array();
$rs[0] = ["Date", "App", "Mobile"];
$count =1;


// $query = "SELECT COUNT(*), day FROM $tablename WHERE month = $dval GROUP BY day";
// $res = mysqli_query($con, $query);
for ($i =1; $i<= $noofdays[$dval]; $i++){
    $query2 = "SELECT COUNT(*) FROM $tablename WHERE day=".$i." and month = $dval and type='APP'";
    $res2 = mysqli_query($con, $query2);
    $rows2 = mysqli_fetch_row($res2);
    $appcount = $rows2[0];

    $query2 = "SELECT COUNT(*) FROM $tablename WHERE day=".$i." and month = $dval and type='PHONE'";
    $res2 = mysqli_query($con, $query2);
    $rows2 = mysqli_fetch_row($res2);
    $phonecount = $rows2[0];

    $rs[$count] = [$i, $appcount, $phonecount];

    $count = $count+1;
}

$json = json_encode($rs);
echo $json;



 ?>
