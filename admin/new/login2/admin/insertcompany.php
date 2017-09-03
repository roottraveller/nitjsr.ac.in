<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';

$name=$_POST['name'];
$nostudent=$_POST['nostudent'];

$objResult = sprintf("INSERT INTO placement (name,no_student,batch) values('%s','".$nostudent."','2013')",
			mysql_real_escape_string($name));
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
