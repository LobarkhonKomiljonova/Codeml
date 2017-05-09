<?php
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {

include "../lib/config.php";
include "../lib/database.php";
 // Creating Database 
$db = new database();


// deleting news
if(isset($_GET['id']))

$id=$_GET['id'];
$query="DELETE FROM news WHERE id='$id'";
$run=$db->delete($query);

}

else if(!isset($_SESSION["admin"]) || ($_SESSION["admin"]!=1)) 
{
  header("Location: ../copied/signin.php");
}
?> 