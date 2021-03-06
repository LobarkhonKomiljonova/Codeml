<?php
session_start();
if (isset($_SESSION["user"]) && ($_SESSION["user"]==1)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <title>Sign in</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/animate.css">

  <!-- Favicon -->
  <link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body class="bodyOfForm header">
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
          <li><a href="../../index.html">Home</a></li>
          <li><a href="../../../project_2/sign_in/html">Questions</a></li>
          <li><a href="../../editor.html">Editor</a></li>
          <li><a href="../../quiz">Quiz</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav>
    </div>
  </div>  

    <h1 class="notava">404 
    <br>Page temporarily not available!!!</h1>
 
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
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<!--  <script src="../../lib/superfish/hoverIntent.js"></script>
<script src="../../lib/superfish/superfish.min.js"></script> -->
  <script src="../../lib/morphext/morphext.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/stickyjs/sticky.js"></script>
<!--  <script src="../../lib/easing/easing.js"></script> -->

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