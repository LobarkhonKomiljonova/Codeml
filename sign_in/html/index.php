<?php 
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]==1) {
include "header.php";
include "QDisplay.php";
include "footer.php";
}
elseif (!isset($_SESSION["user"]) || $_SESSION["user"]!=1) {
header("Location: ../../copied/signin.php");
}
?>