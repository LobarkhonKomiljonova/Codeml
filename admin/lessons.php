<?php
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {

include "../lib/config.php";
include "../lib/database.php";
// Creating Database 
$db = new database();
$id=$_GET['id'];
$table="";
switch ($id) {
  case '1':
    $table="lessons";
    break;
  case '2':
     $table="css";
    break;
  case '3':
     $table="javascript";
    break;
  case '4':
     $table="php";
    break;
  case '5':
     $table="msql";
    break;
  case '6':
     $table="bootstrap";
    break;
  case '7':
     $table="angularjs";
    break;
  case '8':
     $table="jquery";
    break;
}

// Selecting News 
$query="SELECT * FROM $table";
$news=$db->select($query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.png">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="styles/custom.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="admin.php">Dashboard</a>
          <a class="blog-nav-item" href="users.php">Users</a>
          <a class="blog-nav-item" href="tutorials.php">Tutorials</a>
           <a class="blog-nav-item" href="insert_news.php">Insert News</a>
        
          <a class="blog-nav-item" href="add_tutorial.php">Add New Tutorials </a>
          <a class="blog-nav-item pull-right" href="logout.php">Log Out</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
                 <table class="table table-striped">
                    <tr align="center">  
                        <td colspan="4"><h1>Manage Your Home Page </h1></td>
                             </tr>
                             <tr>
                                <th>Lesson ID </th>                   
                                <th>Category ID </th>  
                                <th>Lesson Title </th> 
                                <th>Lesson Tags</th>
                             </tr>
                          <?php while($row=$news->fetch_array()) :?>
                             <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['category_id'];?> </a></td>
                                <td><?php echo $row['lesson_title'];?></td>
                                <td><?php echo $row['lesson_tag'];?></td>
                             </tr>
                           <?php endwhile;?>                                                            
                         </table>
        </div>  <!--//.blog-main -->
      
      </div><!-- /.row -->

    </div><!-- /.container -->

   <footer class="blog-footer">
    <p> &copy; Copyright CodeML Web Design All Rights Reserved</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php 

}

else if(!isset($_SESSION["admin"]) || ($_SESSION["admin"]!=1)) 
{
  header("Location: ../copied/signin.php");
}
?> 