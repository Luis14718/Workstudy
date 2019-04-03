<?php
include('config.php');
include('connect.php');

$sql="INSERT INTO login (username,password,userID,permiso,name,lastname)
VALUES('$_POST[username]','$_POST[password]','$_POST[userid]','student','$_POST[name]','$_POST[lastname]')";

if (!mysqli_query($bd,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header("location: index.php");

mysqli_close($bd)
?>