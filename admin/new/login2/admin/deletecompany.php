<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$slno=$_POST['id'];
$objResult = sprintf("DELETE FROM `placement` WHERE slno = '".$slno."'");
$result=mysql_query($objResult);
if(!$result)
{
	echo 'error';
}
else
{
	echo 'success';
}


?>
