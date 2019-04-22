<?PHP
//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	

	$errflag = false;
	
	include('connect.php');
function His($diff) {
	if($hours=floor($diff/3600)) {
		$diff -= ($hours*3600);
	}
	if($minutes=floor($diff/60)) {
		$diff -= ($minutes*60);
	}
	return "{$hours}:{$minutes}:{$diff}";
}
function question($cmt) {
	return " <a href='javascript:alert(\"{$cmt}\")'>?</a> ";
}
function format($date) {
	return date('M jS g:i:sA', strtotime($date));
}
function timediff($start,$end) {
	$start = strtotime($start);
	$end = strtotime($end);
	if($start!==-1 && $end!==-1) {
		if($end >= $start) {
			echo "<br /><br />Start: $end - $start = ".($end-$start)."<br /><br />";
			return $end - $start;
		}
	}
    return false;
}
if($_POST) {
	$now = date('Y-m-d H:i:s');
	$userID = preg_replace('/[^a-zA-Z0-9 ]+/', '', ($_POST['userID']=="0")?$_POST['userIDz']:$_POST['userID']);
	$cmt = base64_encode($_POST['comment']);
	mysqli_query($bd, "INSERT INTO `login` SET `userID`='$userID', `punch`='$now'");
}
if($_GET) {
	$start = date('Y-m-d H:i:s', strtotime($_GET['s']));
	$end = date('Y-m-d H:i:s', strtotime($_GET['e']));
	$userID = preg_replace('/[^a-zA-Z0-9 ]+/', '', $_GET['userID']);
	$query = mysqli_query($bd, "SELECT * FROM `login` WHERE `userID`='$userID' && `punch` BETWEEN '$start' AND '$end' ORDER BY `punch`");
	while($row=mysqli_fetch_assoc($query)) {
		$q = question(base64_decode($row['comment']));
		if($t===null) {
			$t = $row['punch'];
			$result .= "<br />".format($row['punch']).$q;
		} else {
			$j = timediff($t, $row['punch']);
			$result .= "to ".format($row['punch']).$q." = ".His($j);
			$total += $j;
			$t = null;
		}
	
	if($t !== null) {
		$result .= " STILL CLOCKED IN";
	}
	$result .= "<br /><br /><strong>Total:</strong> ".His($total);
	}
}
$query = mysqli_query($bd, "SELECT userID FROM `login` GROUP BY `userID`");
while($row=mysqli_fetch_assoc($query)) {
	$cc .= '<option value="'.$row['userID'].'">'.$row['userID'].'</option>';
}
?>
<div style="width:400px;float:left">
	<h3>Search</h3>
	<form method="get">
	<pre>
	student: <select name="userID"><?=$cc?></select>
	 Start: <input type="text" name="s" value="Last Week">
	   End: <input type="text" name="e" value="Now">
			<input type="submit" value="Search Now!">
	</pre>
	</form>
	<?=$result?>
</div><div style="width:400px;float:left;">
	<h3>Add Punch</h3>
	<form method="post">
<pre>
	 Current student: <select name="userID"><?=$cc?><option value="0">New</option></select>
	     New student: <input type="text" name="userIDzz">
		Comment: <textarea name="comment"></textarea>
		         <input type="submit" value="Punch Card">
</pre>
	 </form>
</div>