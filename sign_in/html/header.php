<?php

if (isset($_SESSION["user"]) && ($_SESSION["user"]==1)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/question.js"></script>
  <title>Questions list</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/animate.css">

  <!-- Favicon -->
  <link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  </head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<body class="bodyOfForm">

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
          <li><a href="question.php">ADD</a></li>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="">Questions</a></li>
          <li><a href="../../editor.html">Editor</a></li>
          <li><a href="../../quiz">Quiz</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><i class="fa fa-user fa" style="font-size: 20px; color: blue;" aria-hidden="true"><a href="#"><?php echo $_SESSION["user_name"];?></a> </i></li>
        </ul>
      </nav>
    </div>
  </div>

<?php
}
elseif (!isset($_SESSION["user"]) || $_SESSION["user"]!=1) {
header("Location: ../../copied/signin.php");
}
?>