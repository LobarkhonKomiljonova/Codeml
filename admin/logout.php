<?php 
session_start();
if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==1)) {
	session_destroy();
	header("Location: ../copied/signin.php");	
}
else if(!isset($_SESSION["admin"]) || ($_SESSION["admin"]!=1)) 
{
	header("Location: ../copied/signin.php");
}
?>