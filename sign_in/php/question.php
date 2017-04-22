<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href=".../css/style.css">
	<script type="text/javascript" src=".../js/submission.js"></script>
	<title>Question</title>
</head>
<body class="bodyOfForm">

<form action="QA.php" id="formID" method="post">
		<div class="scrolBarOfForm" >

			<div class="forMargining" id="forMarginingID">

				<label for="Question"  class="labellabelMargin ">Question</label><br>
				<textarea required name="question" id="Question" class="inputTypeText" placeholder="your question goes here" cols="30" rows="10"></textarea><br>

				<label for="type">What is the keywords of your question?</label><br>
				<input required type="text" name="keyword" id="type" class="labelMargin inputTypeText" placeholder="html5, css5"><br>
				<!-- Submit button --> 
				<input type="submit" name = "submit" class="submissionOfFormClass" value="Submit">
			</div>
		</div>
	</form>
</body>
</html>