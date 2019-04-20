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
							<li><a rel="facebox" href=qr.php?>Stop-Watch</a></li>
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
	</section>
	<!-- intro section end -->


	<!-- page section start -->
	<section class="page-section">
		<div class="container"> 
		<div class="services"> 
			<h1></h1>
		</div>
		
		<div class= "row">
				<div class="col-md-3 text-center">
				
				<div class="icon"> 
				<i class="fas fa-user-graduate"></i>
				</div>
				<h3> Student Stats </h3>
				<p>This is an example, of the student stats. Here is the profile of the student. Where is working, schedule, and others </p>
				<p><a href= "studentstats.php" class= "read-more-btn"> View </a> 
				</div>
		
		
				<div class="col-md-3 text-center">
				
				<div class="icon"> 
				<i class="far fa-address-book"></i>
				</div>
				<h3> Student report </h3>
				<p>This is an example, of the student report. Here is the report of the student. Hours montly... </p>
				<p><a href= "" class= "read-more-btn"> View </a>
				</div>
				
				
				<div class="col-md-3 text-center">
				
				<div class="icon"> 
				<i class="fas fa-qrcode"></i>
				</div>
				<h3> Send report </h3>
				<p>Send report to the office
				If you have any issue please feel free to contact us</p>
				<p><a href= "contact.html" class= "read-more-btn"> View </a>
				</div>
				
				
				<div class="col-md-3 text-center">
				
				<div class="icon"> 
				<i class="fas fa-clock"></i>
				</div>
				<h3> Clock </h3>
				<p>It is time to start working. 
				Come here and start!</p>
				<p><a  class= "read-more-btn"> View </a>
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