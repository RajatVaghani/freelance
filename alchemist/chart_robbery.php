<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header('Location: index.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Charts | Robbery </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="css/app.css">



    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>

                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">

                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://image.flaticon.com/icons/svg/149/149071.svg')"> </div> <span class="name">
    			      <?php echo $_SESSION['username']; ?>
    			    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="edit_profile.php?id=<?php echo $_SESSION['username'];?>"> <i class="fa fa-user icon"></i> Edit Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                 Welcome! </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                <li>
                                    <a href="dashboard.php"> <i class="fa fa-home"></i> Dashboard </a>
                                </li>

                                <li class="active">
                                    <a href="charts.php"> <i class="fa fa-bar-chart"></i> View Charts </a>

                                </li>
                                <?php

                                    if($_SESSION['type']==1)
                                    {
                                 ?>
                                <li>
                                    <a href="add.php"> <i class="fa fa-table"></i> Add Admin  </a>
                                </li>
                                <?php

                            }

                                 ?>
                            </ul>
                        </nav>
                    </div>

                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        <div class="row sameheight-container">

                            <h3>Robbery</h3>
                            <hr>

                            <div class="col-md-8 col-xs-12">
                                <div class="col-md-7 col-xs-12">
                                    <h4>Please select the month:</h4>
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <select class="form-control" name="" id="monthselected" onchange="drawChart()">
                                        <option value="Jan">January</option>
                                        <option value="Feb">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>



                            <section class="col-md-12" style="margin-top:30px;">
                                <div id="curve_chart" style="width: 900px; height: 500px"></div>
                            </section>

                        </div>
                    </section>

                </article>
                <footer class="footer">
                    <div class="footer-block author">
                        <ul>
                            <li> Copyright Rajat Vaghani </li>
                        </ul>
                    </div>
                </footer>

            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function updateChart(){
              alert('reached')
              var x = this.value;
              console.log(x);
          }


          function drawChart() {

              var x= document.getElementById('monthselected').value;
              var table = [];
              $.ajax({
                   url: 'fetch_for_month.php?month='+x+'&type=robbery',
                   success: function (response) {//response is value returned from php (for your example it's "bye bye"
                     table = JSON.parse(response);

                     for(i=1;i<table.length;i++){
                         table[i][0] = parseInt(table[i][0]);
                         table[i][1] = parseInt(table[i][1]);
                         table[i][2] = parseInt(table[i][2]);
                     }

                     console.log(table);
                     if(table.length==-11){
                         alert('No data for this month');
                     }else{
                         var data = google.visualization.arrayToDataTable(table);

                         var options = {
                           title: 'Reports for '+x,
                           curveType: 'function',
                           legend: { position: 'right' }
                         };

                         var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                         chart.draw(data, options);
                     }
                   }
                });


          }
        </script>

        <script src="js/vendor.js"></script>

    </body>

</html>
