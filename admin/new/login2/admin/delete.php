<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$no=$_POST['id'];
$table=$_POST['table'];
$status=$_POST['status'];
$objResult = sprintf("UPDATE `%s` SET `status` = '%s' WHERE no = '%s'",
			mysql_real_escape_string($table),
			mysql_real_escape_string($status),
			mysql_real_escape_string($no));
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
