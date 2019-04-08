<?php

/*

NEW.PHP

Allows user to create a new entry in the database

*/



// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($username, $userID, $name, $lastname, $Department, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>New Record</title>

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

<div>


<strong>Username: *</strong> <input type="text" name="username" value="<?php echo $username; ?>" /><br/>
<strong>Student_ID: *</strong> <input type="int" name="userID" value="<?php echo $userID; ?>" /><br/>
<strong>Name: *</strong> <input type="text" name="Name" value="<?php echo $name; ?>" /><br/>
<strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>" /><br/>
<strong>Department: *</strong> <input type="text" name="department" value="<?php echo $Department; ?>" /><br/>

<p>* required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}









// connect to the database

include('connect.php');



// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));

$userID = mysql_real_escape_string(htmlspecialchars($_POST['userID']));
$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
$Department = mysql_real_escape_string(htmlspecialchars($_POST['Deparment']));



// check to make sure both fields are entered

if ($username == '' || $userID == '' || $name == '' || $lastname == '' || $Department == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again

renderForm($username, $userID, $name, $lastname, $Department, $error);

}

else

{

// save the data to the database

mysql_query("INSERT login SET username='$username', userID='$userID', name='$name', lastname='$lastname',Department='$Department'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: StudentReports.php");

}

}

else

// if the form hasn't been submitted, display the form

{

renderForm('','','','','','');

}

?>