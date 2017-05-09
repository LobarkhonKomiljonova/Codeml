<?php 
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {
	header("location: ../admin/admin.php");
}
elseif(isset($_SESSION["user"]) && ($_SESSION["user"]==1)) {
	header("location: ../sign_in/html/index.php");
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<title>Sign in</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<!-- Google Fonts -->
	<link href="" rel="stylesheet"> 
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<!-- Bootstrap CSS File -->
	<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="../sign_in/js/jquery.min.js"></script> -->
	<!-- Libraries CSS Files -->
	<link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../lib/animate-css/animate.min.css" rel="stylesheet">
	<!-- Main Stylesheet File -->
	<link href="../css/style.css" rel="stylesheet">
	<!-- <link href="../sign_in/css/style.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Favicon -->
	<link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<script type="text/javascript" src="../lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="../sign_in/css/registration.css">

</head>
<body>
<!--==========================
  Header Section
============================-->
  <div id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../index.html"><img src="../images/wlogo.png" alt="logo"/></img></a>
      </div>
      <!-- #nav-menu-container -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../sign_in/html/index.php">Questions</a></li>
          <li><a href="../editor/editor.html">Editor</a></li>
          <li><a href="../quiz.html">Quiz</a></li>
        </ul>
      </nav>
    </div>
  </div>	
		<div class="container logtop" >
			<div class="row main">
				<div class="main-login main-center">
				<center><h3 class="margin">Login page </h3></center>
					
						
						
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									<div id="jsonM"></div>
								</div>
							</div>
						</div>
						

						
						<div class="form-group ">
					<!-- Submit button --> 
					<button type="submit" name = "submit" id="btn" class="btn btn-primary btn-block" value="Submit">
					<span class="fa fa-send iconSizing">Submit</span></button>
						</div>
						<center>
							
						<a href="../sign_in/html/forget.php" class="forget">Forget password?</a>
						<a href="../sign_in/html/sign_up.php" class="allready">Not member?</a>
						</center>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="../../libjs/bootstrap.min.js"></script> -->

<!--==========================
  Footer
============================--> 
  <footer id="footer" class="logfoot">
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
	<!-- <script src="../lib/jquery/jquery.min.js"></script> -->
	<!-- <script src="../lib/jquery/jquery-migrate.min.js"></script> -->
	<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<!-- 	<script src="../../lib/superfish/hoverIntent.js"></script>
<script src="../../lib/superfish/superfish.min.js"></script> -->
	<script src="../lib/morphext/morphext.min.js"></script>
	<script src="../lib/wow/wow.min.js"></script>
	<script src="../lib/stickyjs/sticky.js"></script>
<!-- 	<script src="../lib/easing/easing.js"></script> -->

	<!-- Template Specisifc Custom Javascript File -->
	<script src="../js/custom.js"></script>
</body>
</html>
<?php
}?>