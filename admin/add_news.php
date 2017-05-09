<?php
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {

include "../lib/config.php";
include "../lib/database.php";
 // Creating Database 
$db = new database();

$id=$_GET['id'];
$query="SELECT * FROM news WHERE id='$id'"; 
$news=$db->select($query);
$single=$news->fetch_array();

// Inserting Posts 
if(isset($_POST['update']))
{

// Creating variables for post

$title=$_POST['title'];
$content=$_POST['content'];
$place=$_POST['place'];
$tags=$_POST['tags'];

// creating variables for image 
$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp, "../img/$image");
$query="UPDATE news  SET tag='$tags', title='$title', content='$content', media='$image', place='$place' WHERE id='$id';";
$run=$db->update($query);

unlink("../img/".$single['media']);

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="admin.php">Dashboard</a>
          <a class="blog-nav-item" href="users.php">Users</a>
          <a class="blog-nav-item" href="tutorials.php">Tutorials</a>
          <a class="blog-nav-item active" href="add_news.php">Update News</a>

          <a class="blog-nav-item" href="add_tutorial.php">Add New Tutorials  </a>
          <a class="blog-nav-item pull-right" href="logout.php">Log Out</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
        <h1 align="center">Update To Latest News </h1><hr>
         <form action="add_news.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
             <div class="form-group">
                       <label >News Title: </label>
                       <input type="text" name="title" class="form-control" required="required" value="<?php echo $single['title']; ?>"/>
             </div>
                
                 <div class="form-group">
                    <label >News Content:</label>
                        
                    <textarea class="form-control" name="content" rows="10" required="required"><?php echo $single['content'];?> </textarea>
                </div>
                
                <div class="form-group">
                          <label >News Place:</label>
                         
                          <select name="place" class="form-control" required="required">
                          <option ><?php echo $single['place'];?></option>
                          </select>

              </div>

              <div class="form-group">
                <label >News Image:</label>
                <input type="file" name="image">
              </div>
              <div class="form-group">
                <label >Tags</label>
                <input type="text" name="tags" class="form-control" value="<?php echo $single['tag']; ?>" required="required">
              </div>

              <button type="submit" name="update" class="btn btn-default">Update</button>
              <a href="admin.php" class="btn btn-success">Cancel</a>
            <a href="delete_news.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
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