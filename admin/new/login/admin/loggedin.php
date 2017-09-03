<?php 
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php'; 
include '../validate.inc.php';
if(!isLoggedIn())
{
	
	header('Location: ../index.php');
	exit();
}
?>
