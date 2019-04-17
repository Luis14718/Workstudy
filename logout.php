
<?php
//logout.php
include('connect.php');
session_start();


$id=$_SESSION['ID'];
            mysqli_query($bd,"UPDATE `login` SET `status` = '0' WHERE `login`.`ID` = $id");
            session_destroy();
            header("location:index.php");
?>
