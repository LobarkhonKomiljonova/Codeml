<?php 
session_start();
if ($_SESSION["admin"]==1) {
	header("location: admin.php");
}
elseif ($_SESSION["user"]==1) {
	header("location: ../sign_in/html/index.php");
}

?>