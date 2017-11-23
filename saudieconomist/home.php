
<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1> <a class="navbar-brand" href="index.html">BC</a></h1>
		     </div>
			 <div class=" border-bottom">
             </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="permission.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Permissions</span> </a>
                    </li>

                    <li>
                        <a href="open_till.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Open Till</span> </a>
                    </li>
                    <li>
                        <a href="close_till.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Close Till</span> </a>
                    </li>
                    <li>
                        <a href="vault_sweep.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Vault Sweep</span> </a>
                    </li>
                    <li>
                        <a href="vault_close.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Vault Close</span> </a>
                    </li>
                    <li>
                        <a href="cash_out.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Cash Out Report</span> </a>
                    </li>
                    <li>
                        <a href="cash_in.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Cash In Report</span> </a>
                    </li>
                    <li>
                        <a href="vendors.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Vendors</span> </a>
                    </li>
                    <li>
                        <a href="branches.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Branches</span> </a>
                    </li>
                    <li>
                        <a href="cash_out_report.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Cash Out Report</span> </a>
                    </li>
                    <li>
                        <a href="cash_in_report.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Cash in report</span> </a>
                    </li>
                    <li>
                        <a href="till_report.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Till Report</span> </a>
                    </li>
                    <li>
                        <a href="vault_password.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Vault Password</span> </a>
                    </li>
                    <li>
                        <a href="reset_password.php" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i><span class="nav-label">Reset Password</span> </a>
                    </li>

                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--banner-->
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">

        <div class="blank-page">
            <p>Hello</p>
        </div>

   </div>

	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; 2016 All Rights Reserved | Design by <a href="http://cybersky.in/" target="_blank">Cyber Sky</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
