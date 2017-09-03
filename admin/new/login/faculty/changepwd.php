<?php
error_reporting(0);
define('isDOCTYPE',1375);
include '../admin/auth.inc.php';
include '../validate.inc.php';
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
global $seed;	// global because $seed is declared in the auth.inc.php file
$sessgroup=decrypt($_SESSION['user_group']);
$id=$_POST['id'];

$objResult = sprintf("select * from user where uid='%s' and groupName='faculty' LIMIT 1",
    		mysql_real_escape_string($id));
$result=mysql_query($objResult);
while($row = mysql_fetch_array($result))
{
	$pass=$row['pass'];
	
}
if($sessgroup!="admin"){
	$encryptoldpass = sha1($oldpass.$seed);
	if($pass!=$encryptoldpass){
		echo "Password not authenticated";
		exit();
	}
}
$encryptnewpass = sha1($newpass.$seed);
$objResult1 = "UPDATE user ".
      "SET pass = '$encryptnewpass' ".
       "WHERE uid = '$id'" ;
$result1=mysql_query($objResult1);
if(mysql_affected_rows())
	{
		echo "Password Successfully Changed";
	}
	else
	{
		echo "Password NOT Changed";	
	}
?>