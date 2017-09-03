<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$name=$_POST['date'];
$nostudent=(int)$_POST['double'];
$batch=(int)$_POST['triple'];
$objResult = sprintf("UPDATE placement SET `name` = '%s',`no_student`= ".$nostudent.",`batch`='".$batch."' WHERE `slno` = '0'",
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
