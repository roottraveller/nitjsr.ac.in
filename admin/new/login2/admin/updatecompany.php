<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$name=$_POST['name'];
$nostudent=$_POST['nostudent'];
$no=$_POST['id'];
$objResult = sprintf("UPDATE placement SET `name` = '%s',`no_student`= '".$nostudent."' WHERE `slno` = '".$no."'",
    		mysql_real_escape_string($name));
			
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
