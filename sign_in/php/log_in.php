<?php
/*if(isset($_POST["submit"])){
	$connection = mysqli_connect("localhost","root","","codeml");
	if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	  
	$firstName =  $_POST["firstName"];
	$lastName =  $_POST["lastName"];
	$middleName =  $_POST["middleName"];
	$genderSelectionName =  $_POST["genderSelectionName"];
	$DateOfBirth =  $_POST["DateOfBirth"];
	$PhoneNumber =  $_POST["PhoneNumber"];
	$email =  $_POST["email"];
	$userName =  $_POST["userName"];
	$password =  $_POST["password"];
	
	$query = "INSERT INTO user_info";
	$query .= "(first_name,last,middle_name,gender_selection,date_of_birth,phone_number,email,user_name, password)";
	 $query .= "VALUES('{$firstName}','{$lastName}','{$middleName}','{$genderSelectionName}','{$DateOfBirth}','{$PhoneNumber}','{$email}','{$userName}','{$password}')";
	mysqli_query($connection, $query);
	mysqli_close($connection);
	?>
	
	<?php
}
*/

print_r($_POST['']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="submission.js"></script>
</head>
<body class="bodyOfForm">
	<form action="#" id="formID" method="post">
		<div class="scrolBarOfForm" >

				<div class="forMargining" id="forMarginingID" >
					<?php 
					if(isset($_POST["submit"])){
						?>
						<div class="greenDiv">* you have successfully registered</div>
						<?php
					}
					?>
					<label for="usename" class="labelMargin" placeholder="your@email.com">Username</label><br>
					<input type="text" name="userName" class="inputTypeText"><br>

					<label for="password" class="labellabelMargin">Password</label><br>
					<input type="password" name="password" class="password inputTypePass"><br>
					<!-- Submit button --> 
					<input type="submit" class="submissionOfFormClass" value="Log in">	
				</div>
			
		</div>
	</form>
</body>
</html>