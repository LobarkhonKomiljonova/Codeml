<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	switch ($_POST['data']) {
		case 'sign':
		{
			echo json_encode($_POST);
			$connection = mysqli_connect("localhost","root","","codeml");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$firstName =  $_POST['jsfname'];
			$lastName =  $_POST['jslname'];
			$genderSelectionName =  $_POST['jsgender'];
			$PhoneNumber =  $_POST['jsphone'];
			$email =  $_POST['jsemail'];
			$userName =  $_POST['jsusername'];
			$password =  $_POST['jspassword'];

			$query = "INSERT INTO user_info";
			$query .= "(first_name,last,gender_selection,phone_number,email,user_name, password)";
			$query .= "VALUES('{$firstName}','{$lastName}','{$genderSelectionName}','{$PhoneNumber}','{$email}','{$userName}','{$password}')";
			mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		break;

		default:
			break;
	}
}
?>