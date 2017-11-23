<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION['type']==0){
    header('Location: index.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Dashboard </title>
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

                                <li>
                                    <a href="charts.php"> <i class="fa fa-bar-chart"></i> View Charts </a>

                                </li>
                                <?php

                                    if($_SESSION['type']==1)
                                    {
                                 ?>
                                <li class="active">
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

                            <h2 class="page-header">Add Admin</h2>
                            <hr>

                            <div class="col-md-8">
                                <div class="card card-block sameheight-item" style="">
                                    <div class="title-block">
                                        <h3 class="title"> Enter details </h3>
                                    </div>
                                    <form role="form" action="create_admin.php" method="POST">
                                        <div class="form-group"> <label class="control-label">Username</label> <input type="text" class="form-control underlined" name="username" > </div>
                                        <div class="form-group"> <label class="control-label">Password</label> <input type="password" class="form-control underlined" name="password" > </div>
                                        <div class="form-group"> <label class="control-label">Email</label> <input readonly type="text" class="form-control underlined" name="email"   </div>
                                        <div class="form-group">
                                            <input type="submit" name="" value="Submit" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>

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
        <script src="js/vendor.js"></script>
    </body>

</html>
