<?php
include "lib/config.php";
include "lib/database.php";
$db = new database();
?>
<!--==========================
  Header Section
============================-->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="images/wlogo.png" alt="logo"/></img></a>

      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="tutorials/tutorial.php?id=1">Tutorial</a></li>
          <li><a href="editor/editor.html">Editor</a></li>
          <li><a href="quiz.html">Quiz</a></li>          
          <li><a href="sign_in/html/index.php">Question</a></li>
          <li><a href="#about">About Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
<!--==========================
  Tutorial Section
============================-->
  <section id="tutorial">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Tutorial</h3>
          <p class="section-description">This website provides a great opportunity to learn different languages of web development and help to reach your goals effective way </p>
        </div>
      </div>
      

       <?php 
           $query="SELECT home_reference FROM categories WHERE id=1;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
      <div class="row">
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/html.png);" href="tutorials/tutorial.php?id=<?php echo $row['home_reference'];?>">
           <?php endwhile; ?>
            <div class="details">
              <h4>HTML</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
        
        <?php 
           $query="SELECT home_reference FROM categories WHERE id=2;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/css.png);" href="tutorials/csslesson.php?id2=<?php echo $row['home_reference'];?>">
            
            <?php endwhile; ?>

            <div class="details">
              <h4>CSS</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
        

       <?php 
           $query="SELECT home_reference FROM categories WHERE id=3;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/js.png);" href="tutorials/jslesson.php?id3=<?php echo $row['home_reference'];?>">
            <div class="details">

                 <?php endwhile; ?>

              <h4>JavaScript</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
        

       <?php 
           $query="SELECT home_reference FROM categories WHERE id=4;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/php.png);" href="tutorials/phplesson.php?id4=<?php echo $row['home_reference'];?>">
             <?php endwhile; ?>

            <div class="details">
              <h4>PHP</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>

         <?php 
           $query="SELECT home_reference FROM categories WHERE id=5;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/mysql.jpg);" href="tutorials/sqllesson.php?id5=<?php echo $row['home_reference'];?>">
          
             <?php endwhile; ?>

            <div class="details">
              <h4>MYSQL</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
        
         <?php 
           $query="SELECT home_reference FROM categories WHERE id=6;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/bootstrap.png);" href="tutorials/bootlesson.php?id6=<?php echo $row['home_reference'];?>">
            
             <?php endwhile; ?>


            <div class="details">
              <h4>BootStrap</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
          <?php 
           $query="SELECT home_reference FROM categories WHERE id=7;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/angular.jpg);" href="tutorials/ajslesson.php?id7=<?php echo $row['home_reference'];?>">
               <?php endwhile; ?>

            <div class="details">
         
              <h4>Angular</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
         <?php 
           $query="SELECT home_reference FROM categories WHERE id=8;";
           $news=$db->select($query);
            while($row=$news->fetch_array()):?>
        <div class="col-md-3">
<a class="tutorial-item" style="background-image: url(images/jquery.jpg);" href="tutorials/jquerylesson.php?id8=<?php echo $row['home_reference'];?>">
            <?php endwhile; ?>

            <div class="details">
              <h4>Jquery</h4>
              <span>Get Started Now</span>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </section>  
<!--==========================
  About Section
============================-->
  <section id="about">
    


           <?php 
           $query="SELECT * FROM news WHERE place=1";
           $news=$db->select($query);

           while($row=$news->fetch_array()):?>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
      
          <h3 class="section-title">OUR MAIN GOAL</h3>
          <p class="section-description">This website provides a great opportunity to learn different languages of web development and help to reach your goals effective way</p>
        </div>
      </div>
    </div>

     
    <div class="container wow fadeInRight " style="animation-duration: 2s;">
      <div class="row">

      <div class="col-md-6 about-img wow fadeInUp">
        <div class="banner video_bg" ><div class=video_inner><video autoplay loop style="width: 550px; margin: 0; position: relative;"><source src="img/video/<?php echo $row['media'];?>" type=video/mp4></video></div><div class=overlay></div>
      </div>
      </div>

        <div class="col-md-6 about-content wow fadeInDown">
          <h2 id="herotext"> <?php echo $row['title']; ?></h2>
          <div class="about-text"><?php echo $row['content'];?></div>      
        </div>

      </div>      
    </div>   
    <?php endwhile; ?>
  </section>
  
<!--==========================
  Subscrbe Section
============================-->  
  <section id="subscribe">
        <?php 
           $query="SELECT * FROM news WHERE place=2 ORDER BY id DESC LIMIT 3;";
           $news=$db->select($query);
           while($row=$news->fetch_array()):?>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title"><?php echo $row['title']; ?></h3>
          <p class="subscribe-text"><?php echo substr($row['content'],0,40);?></p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="single_post.php?id=<?php echo $row['id'];?>">Read More</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </section>   
    
<!--==========================
  Coding Section
============================--> 
  <section id="coding">
   <?php 
           $query="SELECT * FROM news WHERE place=3";
           $news=$db->select($query);
           while($row=$news->fetch_array()):?>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Coding Ground</h3>
          <p class="section-description" style="font-size: 20px;">The importance of quiz and html editor. Why do we need?</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3">
          <div class="pictureBox">
            <div class="pic"><img src="images/<?php echo $row['media']; ?>" alt=""></div>
            <a href="#"><h4><?php echo $row['title']; ?></h4></a>
            <span><?php echo $row['tag']; ?></span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote wow fadeInRight">
            <b><img src="img/quote_sign_left.png" alt=""></b><div > <?php echo $row['content']; ?>
            </div><small><img src="img/quote_sign_right.png" alt=""></small>  
          </div>
        </div>
      </div>
      <?php endwhile; ?>


       <?php 
           $query="SELECT * FROM news WHERE place=4";
           $news=$db->select($query);
           while($row=$news->fetch_array()):?>
      <div class="row">
        <div class="col-md-9">
          <div class="quote wow fadeInLeft">
            <b><img src="img/quote_sign_left.png"></b><div class="animated headShake"><?php echo $row['content']; ?> </div> <small><img src="img/quote_sign_right.png"></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="pictureBox">
            <div class="pic"><img src="images/<?php echo $row['media']; ?>"></div>
            <a href="#"><h4><?php echo $row['title']; ?></h4></a>
            <span><?php echo $row['tag']; ?></span>
          </div>
        </div>
      </div>  
        <?php endwhile; ?>    
    </div>
 
  </section>
 
<!--==========================
  Contact Section
============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <p class="section-description">This website provides a great opportunity to learn different languages of web development and help to reach your goals effective way</p>
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
            <form action="contactus.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="first_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
        <div class="col-md-4">
          <img src="img/masonry_02-750x534.jpg" alt="Inha"/>
        </div>
      </div>
    </div>
  </section>