<?php
include "lib/config.php";
include "lib/database.php";

$db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CodeML</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <!-- Favicon -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
<!--==========================
  Header Section
============================-->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="images/dark.png" alt="logo"/></img></a>

      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#tutorial">Menu-1</a></li>
          <li><a href="#about">Menu-2</a></li>
          <li><a href="#subscribe">Menu-3</a></li>          
          <li><a href="#coding">Menu-4</a></li>
          <li><a href="#contact">Menu-5</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
<!--==========================
  Subscrbe Section
============================-->  
  <section id="subscribe">
        <?php 
          $id=$_GET['id'];
           $query="SELECT * FROM news WHERE id=$id";
           $news=$db->select($query);
           while($row=$news->fetch_array()):?>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title"><?php echo $row['title']; ?></h3>
          <p class="subscribe-text"><?php echo $row['content'];?></p>
          <img src="img/<?php echo $row['media'];?>" width="700" height="300">  
        </div>
        <div class="col-md-4 subscribe-btn-container">
         <!--  <a class="subscribe-btn" href="#">Read More</a>
                  --> </div>
      </div>
    </div>
    <?php endwhile ?>
  </section>   
    




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
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Custom Javascript File -->
<script src="js/custom.js"></script>
  
    
</body>
</html>