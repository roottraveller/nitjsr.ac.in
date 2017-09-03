<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$no=$_POST['id'];
$table=$_POST['table'];
$obj="select * FROM ".$table;
$result=mysql_query($obj);
$no=mysql_num_rows($result)+1;
$notification=$_POST['value'];
$link=$_POST['link'];
$new=$_POST['new'];
$objResult = sprintf("INSERT INTO %s (no,notification,link,new) values('%s','%s','%s','%s')",
			mysql_real_escape_string($table),
			mysql_real_escape_string($no),
			mysql_real_escape_string($notification),
			mysql_real_escape_string($link),
			mysql_real_escape_string($new));
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
