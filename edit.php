<?php
				include('connect.php');
				$get=$_GET['id'];
				$result = mysqli_query($bd,"SELECT * FROM login where ID='$get'");
				
				while($row = mysqli_fetch_array($result))
				  {
				  $ID=$row['ID'];
				  $username=$row['username'];
				  $userID=$row['userID'];
				  $name=$row['name'];
				  $lastname=$row['lastname'];
				  $Department=$row['Department'];
				
				  }
?> 
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<form action="editengine.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
 ID <br />
  <input name="ID" type="text" class="ed" id="ID" value="<?php echo $ID; ?>" /><input name="id" type="text" class="ed" id="ID" value="<?php echo $get; ?>" />
  <br />
 Username<br />
    <input name="username" type="text" id="username" class="ed" value="<?php echo $username; ?>" />
    <br />
  User ID <br />
    <input name="userID" type="text" id="userID" class="ed" onKeyPress="return isNumberKey(event)"  value="<?php echo $userID; ?>" />
    <br />
	Name <br />
    <input name="name" type="text" id="name" class="ed"  value="<?php echo $name; ?>" />
    <br />
 Lastname <br />
    <input name="lastname" type="text" id="lastname" class="ed" value="<?php echo $lastname; ?>" />
    <br />
 Department <br />
  	<input type="text" name="Department" class="tcal" value="<?php echo $Department; ?>" />  <br />
	
 
 






 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
