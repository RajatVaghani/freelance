<?php

    include '../db.php';


    $qq = "SELECT COUNT(*) AS cou FROM captures";
    $rr = mysqli_query($con,$qq);
    $arr = mysqli_fetch_array($rr);

    $count = $arr['cou'];


 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tennis World Tour - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/full-slider.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

</head>

<body>


    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>DATE</th>
            <th>IP</th>
        </tr>
        <?php

            $q = "SELECT * FROM captures ORDER BY id DESC";
            $r = mysqli_query($con, $q);

            while($arr = mysqli_fetch_assoc($r)){
        ?>

            <tr>
                <td><?=$arr['id'];?></td>
                <td><?=$arr['email'];?></td>
                <td><?=$arr['date'];?></td>
                <td><?=$arr['ip'];?></td>
            </tr>

        <?php


            }
         ?>
    </table>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    </script>

</body>

</html>
