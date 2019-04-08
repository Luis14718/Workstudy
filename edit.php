<?php

function renderForm($ID, $name, $lastname, $username, $userID, $Department, $error)

{
?>

<!DOCTYPE HTML>

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="ID" value="<?php echo $ID; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $ID; ?></p>

<strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $name; ?>"/><br/>

<strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>

<strong>User Name: *</strong> <input type="text" name="username" value="<?php echo $username; ?>"/><br/>
<strong>Student ID *</strong> <input type="text" name="userID" value="<?php echo $userID; ?>"/><br/>
<strong>Deparment: *</strong> <input type="text" name="Department" value="<?php echo $Department; ?>"/><br/>


<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>  

</form>

</body>

</html>

<?php

}







// connect to the database

include("connect.php");



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['ID']))

{

// get form data, making sure it is valid

$ID = $_POST['ID'];

$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));

$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));

$userID= mysql_real_escape_string(htmlspecialchars($_POST['userID']));
$Department= mysql_real_escape_string(htmlspecialchars($_POST['Department']));


// check that firstname/lastname fields are both filled in

if ($name == '' ||$lastname == '' || $username == '' || $userID == ''|| $Department == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($ID, $name, $lastname,$username, $userID, $Department, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE login SET name='$firstname', lastname='$lastname', username='$username, userID='$userID, Department='$Department WHERE ID='$ID'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: StudentReports.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['ID']) && is_numeric($_GET['ID']) && $_GET['ID'] > 0)

{

// query db

$ID = $_GET['ID'];

$result = mysql_query("SELECT * FROM login WHERE ID=$ID")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$name = $row['firstname'];

$lastname = $row['lastname'];

$username = $row['username'];

$userID = $row['userID'];

$Department = $row['Department'];



// show form

renderForm($ID, $name, $lastname, $username, $userID, $Department, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>