<?php
	error_reporting(0);
	define('isDOCTYPE',1375);
	$root='../../';
	include $root.'login/admin/auth.inc.php'; 
	if(!$_POST['id']){
		header("Location:../error.php");
		exit();
	}
	global $seed; // global because $seed is declared in the auth.inc.php file
	$uid = $_POST['id'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	$encryptpass = sha1($pass.$seed);
	$objResult=sprintf("INSERT INTO faculty (user_id, name, desig, qual, address, phone, mobile, email) VALUES ('%s', 'Name', 'Designation', 'Qualification', 'Address', 'Phone No.', 'Mobile No.', 'e-mail ID' )",
						mysql_real_escape_string($uid));
	$objResult1=sprintf("INSERT INTO user (uname, email, pass, activated, groupName, uid) VALUES ('%s', '%s', '%s', 1, 'faculty', '%s')",
						mysql_real_escape_string($mail),
						mysql_real_escape_string($mail),
						mysql_real_escape_string($encryptpass),
						mysql_real_escape_string($uid));
	$result=mysql_query($objResult);
	if(mysql_affected_rows()!=1)
	{
		if(strlen($mail) && strlen($pass)){
			$objResult1=sprintf("UPDATE user SET uname='%s', email='%s', pass='%s' WHERE uid='%s'",
							mysql_real_escape_string($mail),
							mysql_real_escape_string($mail),
							mysql_real_escape_string($encryptpass),
							mysql_real_escape_string($uid));
		}
	}
	$result1=mysql_query($objResult1);
	if(mysql_affected_rows())
	{
		header("Location:index.php?id=".$uid);
		exit();
	}
	else
	{
		echo "<script text='type/javascript'> alert('Problem adding new faculty.\nContact Webmaster.')</script>";
		echo "<script text='type/javascript'>window.location='../admin/index.php'; </script>";	
	}
?>
