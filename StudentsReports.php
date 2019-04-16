<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Reports Page</title>
	<meta charset="UTF-8">
	<meta name="description" content="Student Reports">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="img/favicon.ico" rel="shortcut icon"/>


	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
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
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>  


</head>
<body>

       <div id="preloder">
		<div class="loader"></div>
	</div>

	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
					<h2 class="site-logo">Keiser University</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<p><a href="index.php" class="site-btn header-btn">Log Out</a></p>
					<nav class="main-menu">
						<ul>
							<li><a href="adminview.php">Home</a></li>
							<li><a href="home.html">Newsletter</a></li>
							
					  </ul>
				  </nav>
			  </div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>

	<section class="intro-section">
		<div class="container text-center">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<h2 class="section-title"><span>Seahawks</span></h2>
					<h2 class="section-title"> Students Reports </h2>
				</div>
			</div>
			</br>
		</div>
		<div class="container text-center">
		<div class="row">
				<div class="col-xl-10 offset-xl-1">
		 <h1 align="center">Work-Study Information</h1>
		 </br>
	<a  rel="facebox" href="add.php" class="site-btn" align="center">Add new student</a>
	</div>
	</div>
	</div>
		
	</section>

<section>
<div class="table-scrol">
   
	  
	 
   <div class="table-responsive">

    <table class="table table-bordered  table-hover table-striped" style="table-layout:auto">
        <thead>

        <tr>

            <th>ID</th>
            <th>Username</th>
			<th>Student ID</th>
			<th>Name</th>
			<th>Lastname</th>
			<th>Deparment</th>
			<th>Hours</th>
            <th>Manage Users</th>
        </tr>
        </thead>

        <?php
        include_once("connect.php");
        $view_users_query="select * from login";//select query for viewing users.
        $result=mysqli_query($bd,$view_users_query);//here run the sql query.
		
        while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.
        {
            echo '<tr>';
					  echo '<td>'.$row['ID'].'</td>';
					  echo '<td>'.$row['username'].'</td>';
					  echo '<td><div align="center">'.$row['userID'].'</div></td>';
					  echo '<td><div align="center">'.$row['name'].'</div></td>';
					  echo '<td><div align="center">'.$row['lastname'].'</div></td>';
					  echo '<td><div align="center">'.$row['Department'].'</div></td>';
					   echo '<td><div align="center">'.$row['Hours'].'</div></td>';
					 
					 
					  echo '<td><div align="center">'.' | '.'<a rel="facebox" href=edit.php?id=' . $row["ID"] .'>Edit</a>'.' | '.'<a href=delete.php?id=' . $row["ID"] .'>Delete</a>'.'
					  </div></td>';
					 
					echo '</tr>';
						
				
				
						



       } ?>

    </table>
        </div>
</div>
</section>

	<footer class="footer-section text-center">
		<div class="container">
			<a href="index.php"class="site-btn">Log Out</a>
			<div class="credits">
				<h3><span>Keiser University Latin American Campus</span></h3>
				<p>Daniel Rodriguez, Juan Bosco, Gandy Dominguez</p>
			</div>

		</div>
	</footer>





	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
