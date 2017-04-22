<?php 
/*if(isset($_POST['submit']))
{
	$connection = mysqli_connect("localhost","root","","codeml");
	if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$question=$_POST['question'];
	$keyword =$_POST['keyword'];

	$query = "INSERT INTO question";
	$query .= "(question,keywords)";
	$query .= "VALUES('{$question}','{$keyword}')";
	mysqli_query($connection, $query);
	mysqli_close($connection);
}*/



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
	<div class="scrolBarOfForm" >
		<div class="forMargining" id="forMarginingID">
			<h1>SPACE	</h1>
			<p>article((the question itself)</p>
			<a href="question.php">Add a question</a>
			<hr>
		</div>
	</div>
</body>
</html>