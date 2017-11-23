<?php

    include 'db.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        date_default_timezone_set("Europe/London");
        $date = date("Y/m/d");

        $ip = $_SERVER['REMOTE_ADDR'];


        $q = "INSERT INTO captures VALUES('','".$email."','".$date."','".$ip."')";
        $res = mysqli_query($con,$q);
    }

    $qq = "SELECT COUNT(*) AS cou FROM captures";
    $rr = mysqli_query($con,$qq);
    $arr = mysqli_fetch_array($rr);

    $count = $arr['cou'];

    $count = $count+139;

 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="Rating" content="General">
    <meta name="Robots" content="INDEX,FOLLOW">
    <meta itemprop="name" content="Tennis World Tour">
    <meta name="keywords" content="new tennis game,tennis world tour forum,tennis world tour game,tennis world tour,xbox tennis tour,ps4 tennis tour,breakpoint studios,bigben interactive,online tennis gaming community,online tennis forum">
    <meta itemprop="description" content="Website for Tennis World Tour, upcoming new Console Game.">
    <link rel="author" href="https://plus.google.com/+RajatVaghani" />
    <meta name="language" content="ES">
    <meta name="robots" content="index,follow" />
    <meta name="revised" content="Friday, July 7th, 2016, 5:15 pm" />
    <meta name="Classification" content="Game">
    <meta name="author" content="Rajat Vaghani, rajat.vaghani@gmail.com">
    <meta name="designer" content="Rajat Vaghani">
    <meta name="reply-to" content="rajat.vaghani@gmail.com">
    <meta name="owner" content="Rajat Vaghani">
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="Everyone">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">

    <title>Tennis World Tour</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">TWT.net</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> -->


        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg1.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg2.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 2</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg3.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg4.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg5.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg6.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg7.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg8.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg9.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg10.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg11.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg13.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/bg14.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
        </div>

        <!-- Controls -->


    </header>




    <div class="blackbox">
        <?php
            if(isset($_POST['submit'])){
        ?>
        <div class="alert alert-success">
            You have been successfully registered!
        </div>
        <?php
            }
         ?>

        <h1 style="color:#fff;margin-top:90px;font-size: 65px;text-shadow: 0px -3px 5px #000;">Tennis World Tour</h1>
        <form class="form mainf" action="index.php" method="post">
            <div class="input-group">
              <input type="email"  placeholder="Enter e-mail to be notified when this site goes live!" name="email" class="form-control input-lg" aria-label="..." required="required">
              <div class="input-group-btn">
                <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success"/>
              </div>
            </div>
        </form>
        <h3 style="color: #fff;">An unofficial online competitive tennis community for <a href="https://www.psu.com/news/32998/new-tennis-game-ps4-2017">Tennis World Tour</a>, the upcoming console game and many more online tennis games!</h3>

        <p class="users"><?=$count;?> USERS REGISTERED</p>

        <p style="color:red">This website is a fan-site dedicated to online tennis and in no way is associated with the creators of Tennis World Tour, the console game</p>


        <table style="position: absolute;left: 0px;bottom: 0px;width:100%">
            <tr>
                <td style="vertical-align:middle;text-align:right;"><img src="img/ps4.png" alt="" style="padding:15px;width:120px;margin-right:30px;"></td>
                <td style="vertical-align:middle;text-align:left;"><img src="img/xbox-logo-vector.png" alt="" style="padding:15px;width:155px;"></td>
            </tr>
        </table>

    </div>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
