<?php

include("connect.php");
include("StudentsReports.php");
$delete_id=$_GET['del'];
$delete_query="delete  from users WHERE id='$delete_id'";
$run=mysqli_query($bd,$delete_query);
if($run)
{
    echo "<script>window.open('StudentReports.php?deleted=user has been deleted','_self')</script>";
}

?>