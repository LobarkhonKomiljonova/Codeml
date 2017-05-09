<?php
session_start();
if (isset($_SESSION["user"]) && ($_SESSION["user"]==1)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Question</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 

	<!-- Bootstrap CSS File -->
	<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="../../lib/jquery/jquery.js"></script>
	<link href="../../lib/animate-css/animate.min.css" rel="stylesheet">
	<script type="text/javascript" src="../js/question.js"></script>

	<!-- Main Stylesheet File -->
	<link href="../../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="../../css/animate.css">

	<!-- Favicon -->
	<link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
	</head>
<body >

<!--==========================
  Header Section
============================-->
  <div id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../../index.html"><img src="../../images/dark.png" alt="logo"/></img></a>
      </div>
      <!-- #nav-menu-container -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="question.php"></a></li>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="index.php">Questions</a></li>
          <li><a href="../../editor.html">Editor</a></li>
          <li><a href="../../quiz">Quiz</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><i class="fa fa-user fa" style="font-size: 20px; color: blue;" aria-hidden="true"><a href="#"><?php echo $_SESSION["user_name"];?></a> </i></li>
        </ul>
      </nav>
    </div>
  </div>



<form id="formID" method="post">
		<div class="scrolBarOfForm" >

			<div class="forMargining" id="forMarginingID">

				<label for="Question"  class="labelMargin ">Question</label><br>
				<textarea required name="question" id="Question" class="inputTypeText" placeholder="Your question goes here" cols="20" rows="5"></textarea><br>

				<input type="checkbox" class="code" id="code">
				<label for="code">Submitting code? </label>
				<textarea name="coqust" id="coqust" class="labelMargin inputTypeText" cols="20" rows="5" placeholder="Your code goes here" value="x"></textarea>
				<!-- Submit button --> 
				<br><label for="type" class="labelMargin">Keywords </label><br>
				<input required type="text" name="keyword" id="type" class="labelMargin inputTypeText" placeholder="html5"><br>
				<div>
					<input type="button" id="send_question" name = "submit" class="submissionOfFormClass" value="Send question">
					<!-- <a href=""><input type="submit" value=""></a> -->
					<button type="button" id="b2disp" name = "b2disp" class="submissionOfFormClass" ><a href="../html/index.php">Questions </a></button>
				</div>
			</div>
		</div>
	</form>

<!--==========================
  Footer
============================--> 
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>CodeML Web Design</strong>. All Rights Reserved
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
<!-- Required JavaScript Libraries -->
<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jquery/jquery-migrate.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../../lib/superfish/hoverIntent.js"></script>
<!-- <script src="../../lib/superfish/superfish.min.js"></script> -->
<script src="../../lib/morphext/morphext.min.js"></script>
<script src="../../lib/wow/wow.min.js"></script>
<script src="../../lib/stickyjs/sticky.js"></script>
<!-- <script src="../../lib/easing/easing.js"></script> -->

<!-- Template Specisifc Custom Javascript File -->
<script src="../../js/custom.js"></script>
  

</body>
</html>
<?php
}
elseif (!isset($_SESSION["user"]) || $_SESSION["user"]!=1) {
header("Location: ../../copied/signin.php");
}
?>