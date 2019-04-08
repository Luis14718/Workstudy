<?php 
session_start();

$username= $_SESSION['SESS_FIRST_NAME'];

include("connect.php");
        $view_users_query="select * from login";//select query for viewing users.
        $run=mysqli_query($bd,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
           
            $deparment=$row[7];

		}
	echo"$deparment";
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
					<a href="index.php" class="site-btn header-btn">Log Out</a>
					<nav class="main-menu">
						<ul>
							<li><a href="stopwatch.html">Stop-Watch</a></li>
							<li><a href="newsletter.html">Newsletter</a></li>
							<li><a href="contact.html">Contact</a></li>
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
					<h2 class="section-title">Newsletter</h2>
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
		<div class="col-md-3">
				<h3>Upload your file</h3>
				</div>
				<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      
      $extensions= array("jpeg","jpg","png");
      
      if($deparment=='marketing'){

       $filenum='3.jpg';
	  }
      
      if($file_size > 536870912){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"img/portfolio/".$filenum);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

      <form action="" method="POST" enctype="multipart/form-data">
         <input class=""type="file" name="image" />
         <input class="site-btn" type="submit"/>
      </form>
      

		
				
				
		</div> 
	</div>
	</section>
	
	
	<footer class="footer-section text-center">
			
			<div class="credits">
				<h3><span>Keiser University Latin American Campus</span></h3>
				<p>Daniel Rodriguez, Juan Bosco, Gandy Domínguez</p>

		</div>
	</footer>
		



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>