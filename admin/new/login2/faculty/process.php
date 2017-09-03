<?php
	error_reporting(0);
	$root='../../';
	include $root.'department/auth.php'; 
	$id=$_GET['id'];
	$name=$_POST['name'];
	$desig=$_POST['desig'];
	$dept=$_POST['dept'];
	$qual=$_POST['qual'];
	$add=$_POST['add'];
	$pnum=$_POST['phone'];
	$mnum=$_POST['mob'];
	$email=$_POST['email'];
	$path=$_POST['photo'];		
	$data = $_POST['elm1'];
	$data=str_replace("<strong>", "<b>", $data);
	$data=str_replace("</strong>", "</b>", $data);
	/*echo $data;*/
	if($path=='../faculty/images/')
	{
		$objResult = sprintf("select * from faculty where user_id='%s'",
    	mysql_real_escape_string($id));
		$result=mysql_query($objResult);
		while($row = mysql_fetch_array($result))
		{
			$path=$row['path'];				
		}
	}
	if($dept=='Select')
	{
		$objResult = sprintf("select * from faculty where user_id='%s'",
    	mysql_real_escape_string($id));
		$result=mysql_query($objResult);
		while($row = mysql_fetch_array($result))
		{
			$dept=$row['dept'];				
		}
	}
	$objResult=sprintf("UPDATE faculty set name='%s', path='%s', desig='%s', dept='%s', 
						   qual='%s', address='%s', phone='%s', mobile='%s', email='%s', details='%s' where user_id='%s'",
						   mysql_escape_string($name),mysql_escape_string($path), mysql_escape_string($desig), mysql_escape_string($dept),
							mysql_escape_string($qual), mysql_escape_string($add), mysql_escape_string($pnum),
							 mysql_escape_string($mnum), mysql_escape_string($email), mysql_escape_string($data), mysql_escape_string($id));
	$result=mysql_query($objResult);
	if(mysql_affected_rows())
	{
		echo "Update Successful";
	}
	else
	{
		echo "Update Failed";	
	}
?>
