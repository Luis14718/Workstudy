<?php
include('connect.php');




	
		
			
			
			
		
			$ID=$_POST['ID'];
			$username=$_POST['username'];
			$userID=$_POST['userID'];
			$name=$_POST['name'];
			$lastname=$_POST['lastname'];
			$Department=$_POST['Department'];
			$id=$_POST['ID'];
			

			
			$update=mysqli_query($bd,"UPDATE `login` SET `username` = '$username', `userID` = '$userID',`name` = '$name', `lastname` = '$lastname', `Department` = '$Department' WHERE `login`.`ID` = $ID");
			
			
			header("location: StudentsReports.php");
			exit();
		
			
	

?>
