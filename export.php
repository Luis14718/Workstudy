<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "workstudy");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM login";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>username</th>  
                         <th>userID</th>  
       <th>name</th>
       <th>lastname</th>
	    <th>Department</th>
		 <th>Hours</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ID"].'</td>  
                         <td>'.$row["username"].'</td>  
                         <td>'.$row["userID"].'</td>  
       <td>'.$row["name"].'</td>  
       <td>'.$row["lastname"].'</td>
	    <td>'.$row["Department"].'</td>
		 <td>'.$row["Hours"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=MonthlyStudentsReport.xls');
  echo $output;
 }
}
?>