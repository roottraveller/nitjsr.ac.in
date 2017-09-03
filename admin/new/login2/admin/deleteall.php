<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$table=$_POST['table'];
$status=$_POST['status'];
$objResult = sprintf("UPDATE `%s` SET `status` = '%s'",
			mysql_real_escape_string($table),mysql_real_escape_string($status));
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
