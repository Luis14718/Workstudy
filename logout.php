
<?php
//logout.php
include('connect.php');
session_start();
$time= $_SESSION['Start'];
$time= date("h:i:s");  
$hour= date("h");
$minutes=date("i");
$seconds=date("s");
$totalh=$hour+($minutes/60)+($seconds/3600);
$result=$totalh-$time;


$id=$_SESSION['ID'];
            mysqli_query($bd,"UPDATE `login` SET `status` = '0' WHERE `login`.`ID` = $id");
            mysqli_query($bd,"UPDATE `login` SET `Hours` = '$result' WHERE `login`.`ID` = $id");
            session_destroy();
            header("location:index.php");
?>
