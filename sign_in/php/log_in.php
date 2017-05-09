<?php
if (isset($_POST['password'])) {
	echo json_encode($_POST);
$connection = mysqli_connect("localhost","root","","codeml");
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
$firstName =  $_POST['jsfname'];
$lastName =  $_POST['jslname'];
$genderSelectionName =  $_POST["jsgender"];
$DateOfBirth =  $_POST["jsDOB"];
$PhoneNumber =  $_POST["jsphone"];
$email =  $_POST["jsemail"];
$userName =  $_POST["jsusername"];
$password =  $_POST["jspassword"];

$query = "INSERT INTO user_info";
$query .= "(first_name,last,gender_selection,date_of_birth,phone_number,email,user_name, password)";
 $query .= "VALUES('{$firstName}','{$lastName}','{$genderSelectionName}','{$DateOfBirth}','{$PhoneNumber}','{$email}','{$userName}','{$password}')";
mysqli_query($connection, $query);
mysqli_close($connection);
}
?>




