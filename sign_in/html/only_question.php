<?php
$get_id = $_GET['id'];
session_start();

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "codeml";
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      }
      $userid = $_SESSION['username'];
      if (isset($_POST['submit'])){
      $text = $_POST['answer'];
      $code = $_POST['comment'];
      $i_query = "INSERT INTO d_question( ";
      $i_query .= "user_id, question_id, full_text, scfq ";
      $i_query .= ") VALUES (";
      $i_query .= "{$userid}, {$get_id}, '{$text}', '{$code}')";
      ;
      $conn->query($i_query);

      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/display.js"></script>
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
  <link href="../../lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/animate.css">

  <!-- Favicon -->
  <link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  </head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="../js/display.js"></script>
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
          <li><a href="../../index.html">Home</a></li>
          <li><a href="">Questions</a></li>
          <li><a href="../../editor.html">Editor</a></li>
          <li><a href="../../quiz">Quiz</a></li>
        </ul>
      </nav>
    </div>
  </div>
<?php
$query = "SELECT q.user_id, q.g_question, q.keywords, ";
$query .= "q.top_val, q.uploaded_date, q.c_user, u.user_name ";
$query .= "FROM question q ";
$query .=" JOIN user_info u ON u.id = q.user_id ";
$query .= "WHERE q.top_val = {$get_id} ";

// echo $query;
$main = $conn->query($query);
if (!$main)
{
 echo "empty set";
}
?>
<?php $row = $main->fetch_assoc();?>
<form id="formID" method="post" action = "only_question.php?id=<?= $get_id;?>" style=" ">
    <div class="scrolBarOfForm check" >
      <div class="">
        <!-- <?php// print_r($row);?> -->
        
        <div class="main">
          <div class="sub user"><?= $row['user_name'];?></div>
          <div class="sub time"><?= $row['uploaded_date'];?></div>
          <div class="sub "><?= $row['g_question'];?></div>
          <div class="sub">Related to:  <?= $row['keywords'];?></div>
          <label for="code" class="sub">Code of user</label>
          <div class="sub code"><pre><?= htmlentities($row["c_user"]);?></pre></div><br>
        </div>

          
        <?php
        $test_query = "SELECT * FROM d_question d ";
        //$test_query = "JOIN user_info u "
        $test_query .= "WHERE d.question_id = {$get_id}";
        $test = $conn->query($test_query);
        if ($test->num_rows!= 0)
        {

       ?>
        <div class="main">
        <label for="main" class="sub answer">Answers are below</label>
          <?php
           while ($row1 = $test->fetch_assoc()){
             $user_id = $row1['user_id'];
             $query1 = "SELECT user_name ";
             $query1 .= "FROM user_info u WHERE u.id = {$user_id}";
             $send = $conn->query($query1);
             $send_res = $send->fetch_assoc();
             ?>
          <div class="sub user"><?= $send_res['user_name'];?></div><br>
          <div class="sub"><?= $row1['full_text'];?></div><br>
          <div class="sub code"><pre><?= 
          
          htmlentities($row1["scfq"]);?></pre></div><br>
          <?php } ?>
        </div>

<?php } ?>

        <div class="main">
          <div class="sub">
            <textarea name="answer" id="new_answer" cols="20" rows="5" placeholder="Your answer goes here"  class="inputTypeText "></textarea><br>
            <input type="checkbox" name = "condition" class="value" id="validation" value = "1">
            <label for="answer" >Submit code.</label><br>
            <textarea name="comment" id="answer" cols="20" rows="5" class="inputTypeText" placeholder="Your code goes here"></textarea><br>
            <input type="submit" id="addbtn" name = "submit" value="Add answer" class="inputTypeText odsbtn">
        </div>
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
<script src="../../lib/superfish/superfish.min.js"></script>
<script src="../../lib/morphext/morphext.min.js"></script>
<script src="../../lib/wow/wow.min.js"></script>
<script src="../../lib/stickyjs/sticky.js"></script>
<script src="../../lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="../../js/custom.js"></script>
</body>
</html>
