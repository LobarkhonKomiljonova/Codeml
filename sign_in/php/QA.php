<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	switch ($_POST['data']) {
		case 'upload':{
			echo json_encode($_POST);
			
		$connection = mysqli_connect("localhost","root","","codeml");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

			$qQuestion =  $_POST['jquestion'];
			$users_code =  $_POST['jcode'];			
			$keyword =  $_POST['jkword'];
			$use_id = ($_SESSION["user_id"]);
			$up_date =  date("Y-m-d h:i:sa", $d);
			echo $use_id;
			$query = "INSERT INTO question";
			$query .= "(user_id, g_question, c_user, keywords, uploaded_date)";
			$query .= "VALUES('{$use_id}','{$qQuestion}','{$users_code}','{$keyword}','{$up_date}')";
			mysqli_query($connection, $query);
			mysqli_close($connection);
			}
		break;

		default:
			break;
	}
}
?>

