<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$notification=$_POST['value'];
$table=$_POST['table'];
$link=$_POST['link'];
$new=$_POST['new'];
$no=$_POST['id'];
$objResult = sprintf("UPDATE `%s` SET `notification` = '%s',`link`= '%s',`new`= '%s' WHERE `no` = '%s'",
    		mysql_real_escape_string($table),
			mysql_real_escape_string($notification),
			mysql_real_escape_string($link),
			mysql_real_escape_string($new),
			mysql_real_escape_string($no));
			
$result=mysql_query($objResult);
if(!$result)
{
	echo 'ERROR';
}
else
{
	echo 'success';
}




?>
