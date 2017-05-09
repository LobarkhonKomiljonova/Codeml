<?php
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {


include "../lib/config.php";
include "../lib/database.php";
 // Creating Database 
$db = new database();

// Inserting Posts 
if(isset($_POST['insert']))
{
// Creating variables for post
$title=$_POST['title'];
$content=$_POST['content'];
$table=$_POST['table'];
$tags=$_POST['tags'];

$category_id="";
switch ($table) {
  case 'HTML':
    $table="lessons";
     $category_id="1";
    break;
  case 'CSS':
    $table="css";
     $category_id="2";
    break;
  case 'JavaScript':
    $table="javascript";
     $category_id="3";
    break;
  case 'PHP':
    $table="php";
     $category_id="4";
    break;
  case 'MSQL':
    $table="msql";
     $category_id="5";
    break;
  case 'BootStrap':
    $table="boostrap";
     $category_id="6";
    break;
  case 'AngularJS':
    $table="angularjs";
     $category_id="7";
    break;
  case 'JQuery':
    $table="jquery";
     $category_id="8";
    break;
  
  default:
    # code...
    break;
}




// creating variables for image 
$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, "../img/$image");
$query="INSERT INTO $table ( category_id, lesson_title, lesson_content, lesson_image, lesson_tag)  VALUES ( '$category_id', '$title', '$content', '$image', '$tags');";
$run=$db->insert($query);
}
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="admin.php">Dashboard</a>
          <a class="blog-nav-item" href="users.php">Users</a>
          <a class="blog-nav-item" href="tutorials.php">Tutorials</a>
           <a class="blog-nav-item" href="insert_news.php">Insert News</a>

          <!-- <a class="blog-nav-item active" href="add_news.php">Update News</a> -->

          <a class="blog-nav-item active " href="add_tutorial.php">Add New Tutorials  </a>
          <a class="blog-nav-item pull-right" href="logout.php">Log Out</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
        <h1 align="center"> Insert New Tutorial </h1><hr>
         <form action="add_tutorial.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
                       <label >Tutorial Title: </label>
                       <input type="text" name="title" class="form-control" required="required" value="Enter a title"/>
             </div>
                
                 <div class="form-group">
                    <label >Tutorial Content:</label>
                        
                    <textarea class="form-control" name="content" rows="10" required="required"> </textarea>
                </div>
                
                <div class="form-group">
                          <label >Tutorial Place:</label>
                          <select name="table" class="form-control" required="required">
                          <option >Select Category </option>
                          <option>HTML </option>
                          <option>CSS</option>
                          <option>JavaScript</option>
                          <option>PHP</option>
                          <option>MSQL</option>
                          <option>BootStrap</option>
                          <option>AngularJS</option>
                          <option>JQuery</option>
                          
                          </select>

              </div>

              <div class="form-group">
                <label >Lesson Image:</label>
                <input type="file" name="image">
              </div>
              <div class="form-group">
                <label >Lesson Tag</label>
                <input type="text" name="tags" class="form-control" value="Enter Tag" required="required">
              </div>

              <button type="submit" name="insert" class="btn btn-success">Insert</button>
              <a href="admin.php" class="btn btn-danger">Cancel</a>
            </form>

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