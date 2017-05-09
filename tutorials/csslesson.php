
<?php
include "../lib/config.php";
include "../lib/database.php";
$id=$_GET['id2'];
$db = new database();  
 ?>
          <?php 
                 global $currentPage;
                 global $previous;
                $query="SELECT Count(id) AS NumberOfLessons FROM css;";
                $run=$db->select($query);
                while ($row=$run->fetch_array()):?> 
                  <?php  
                    $number=$row['NumberOfLessons']; 
                        $id=$_GET['id2'];
                        $currentPage=(int)$id;
                        $previous=$currentPage;
                        if($previous==0){ header("location: ../index.php");}else{      
                        if($currentPage>$number)
                        {                          
                          header("location: ../index.php");
                        }
                        else
                        {
                                 ++$currentPage;
                        }
                    }
                    ?> 
                   <?php endwhile;?>


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/tutor.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <!-- Favicon -->
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>

  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="../images/dark.png" alt="logo"/></img></a>

      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="#hero">Home</a></li>
          <li class="menu-active"><a href="#tutorial">Tutorials</a></li>
          <li><a href="#about">Menu-2</a></li>
          <li><a href="#subscribe">Menu-3</a></li>          
          <li><a href="#coding">Menu-4</a></li>
          <li><a href="#contact">Menu-5</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
   
<?php
include "css.php";
?>

 <div class="container">

 <div class="row">
   
   <div class="col-sm-9">
   <div class="jumbotron">
   <?php     
   
    $query="SELECT lesson_tag FROM css WHERE id=$id";  
       $lesson=$db->select($query);
while($row=$lesson->fetch_array()):?> 
<h2><?php echo $row['lesson_tag'];?> </h2>
    <?php endwhile;?>


   <?php 
     $query="SELECT lesson_image FROM css WHERE id=$id";  
       $lesson=$db->select($query);
while($row=$lesson->fetch_array()):?> 
     <img src="../images/<?php echo $row['lesson_image'];?>"  width="750px" height="220px" >
      <?php endwhile;?>

   </div>
   


  <div class="jumbotron">
    <?php     
    $query="SELECT lesson_title FROM css WHERE id=$id";  
       $lesson=$db->select($query);
while($row=$lesson->fetch_array()):?> 
<h2><?php echo $row['lesson_title'];?> </h2>
    <?php endwhile;?>




<?php 
     $query="SELECT lesson_content FROM css WHERE id=$id";  
       $lesson=$db->select($query);
while($row=$lesson->fetch_array()):?> 
    <p><?php echo $row['lesson_content'];?> </p> 
    <?php endwhile;?>
  </div>
  <p>This is some text.</p> 
  <p>This is another text.</p> 
 
     <ul class="pager" >
         
         <li class="previous" ><a href="csslesson.php?id2=<?php echo --$GLOBALS['previous'];?>">Previous</a></li>
         <li class="next"><a href="csslesson.php?id2=<?php echo $GLOBALS['currentPage'];?>">Next Chapter</a></li>
     </ul>
     </div>
   

 </div>
<!--==========================
  Contact Section
============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Ziyolilar Street<br>Tashkent, Uzbekistan</p>
            </div>            
            <div>
              <i class="fa fa-envelope"></i>
              <p>mail.inha.uz</p>
            </div>            
            <div>
              <i class="fa fa-phone"></i>
              <p>+998 90 555 55 55</p>
            </div>            
          </div>
        </div>        
        <div class="col-md-5">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div> 
        <div class="col-md-4">>
          <img src="../img/masonry_02-750x534.jpg" alt="Inha">
        </div>
      </div>
    </div>
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
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/superfish/hoverIntent.js"></script>
<script src="../lib/superfish/superfish.min.js"></script>
<script src="../lib/morphext/morphext.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/stickyjs/sticky.js"></script>
<script src="../lib/easing/easing.js"></script>

<!-- Custom Javascript File -->
<script src="../js/custom.js"></script>
  
    
</body>
</html>