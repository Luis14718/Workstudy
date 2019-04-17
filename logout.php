
<?php
//logout.php
session_start();
session_destroy();
header("location:logout.php");
$id=$_SESSION['ID'];
			mysqli_query($bd,"UPDATE `login` SET `status` = '0' WHERE `login`.`ID` = $id");
?>
