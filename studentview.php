<?php

session_start();
$time= $_SESSION['Start'];
echo"$time";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student View</title>
	<meta charset="UTF-8">
	<meta name="description" content="Riddle - Portfolio Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css"/>
 <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- header section start -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
						<h2 class="site-logo">Keiser University</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<a href="logout.php" class="site-btn header-btn">Log Out</a>
					<nav class="main-menu">
						<ul>
							<li><a  href="stopwatch.html">Stop-Watch</a></li>
							<li><a href="newsletter.html">Newsletter</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>
	<!-- header section end -->

	<!-- intro section start -->
	<section class="intro-section">
		<div class="container text-center">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<h2 class="section-title">Student <span>Section</span></h2>
				</div>
			</div>
		</div>
		
		<div class="container">
		<div class="row" align="center">
				<div class="col-lg-12">
            <div class="milestone">
             <h1><time>00:00:00</time></h1>
            </div>
			<div class="row" align="center">
				<div class="col-lg-12">
					<p> <div class="stopwatch">
            <div class="controls">
                <button id="start" STYLE="font-size: 14px;  min-width: 140px; text-align: center; padding: 15px 10px; position: relative; color: #fff; border: none;background-color: #000;margin-right: 15px;z-index: 1;">Start</button>
                <button id="stop"STYLE="font-size: 14px; min-width: 140px;text-align: center;padding: 15px 10px;position: relative;color: #fff;border: none;background-color: #000;margin-right: 15px;z-index: 1;">Stop</button>
				</div>
			
        </div>

        <script src="stopwatch2.js"></script>
					</p>
					
					
			</div>
	</section>
	<!-- intro section end -->
	<section class="page-section">
<div class="services"> 
			<h1></h1>
		</div>
		
		<div class="container">
		<div class="row" align="center">
				<div class="col-lg-12">
            <div class="milestone">
				
				<div class="icon"> 
				<i class="fas fa-user-graduate"></i>
				</div>
				<h3> Student Stats </h3>
				<p>This is an example, of the student stats.</p>
				<p>Here is the profile of the student.<p>
				<p>Where is working, schedule, and others <p>
				<p><a href= "studentsst.php" class= "read-more-btn"> View </a> 
				</div>
				</div>
				</div>

	</div>
	</section>




		
	
	<footer class="footer-section text-center">
		<div class="container">
			<a href="logout.php"class="site-btn">Log Out</a>
			<div class="credits">
				<h3><span>Keiser University Latin American Campus</span></h3>
				<p>Daniel Rodriguez, Juan Bosco, Gandy Dominguez</p>
			</div>

		</div>
	</footer>




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>