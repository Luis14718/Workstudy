<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	

	$errflag = false;
	
	include('connect.php');
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($bd,$str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		// alert <?php  mysqli_real_escape_string($bd, $str); 
		$myvar= mysqli_real_escape_string($bd,$str); 
		echo $myvar;
		?>  alert <?php
		return mysqli_real_escape_string($bd,$str);
	}
		?>  alert hola <?php $_POST['username'];  ?> <?php
	//Sanitize the POST values
	$login = clean($bd,$_POST['username']);
	$password = clean($bd,$_POST['password']);
	
	
	
	//Create query
	$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
	$qry2="SELECT * FROM login WHERE username='$login' AND permiso='admin'";
	$qry3="SELECT * FROM login WHERE username='$login' AND permiso='student'";
		$result=mysqli_query($bd,$qry);
		$result1=mysqli_query($bd,$qry2);
        $result2=mysqli_query($bd,$qry3);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['Department'] = $member['Department'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_PRO_PIC'] = $member['name'] .' '. $member['lastname'];
			session_write_close();
			if (mysqli_num_rows($result1) > 0){
				header("location: adminview.php");
				exit();
			}
		     if(mysqli_num_rows($result2) > 0) {

				header("location: studentview.php");
				exit();
			}
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>