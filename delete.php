<?php

include("connect.php");
include("StudentsReports.php");
$delete_id=$_GET['del'];
$delete_query="delete  from users WHERE id='$delete_id'";
$run=mysqli_query($bd,$delete_query);
if($run)
{

// get id value

$ID = $_GET['ID'];



// delete the entry

$result = mysql_query("DELETE FROM players WHERE ID=$ID")

or die(mysql_error());



// redirect back to the view page

header("Location: StudentsReports.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: StudentsReports.php");

}



?>