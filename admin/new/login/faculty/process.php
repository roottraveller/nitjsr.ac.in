<?php
	error_reporting(0);
	$root='../../';
	include $root.'department/auth.php'; 
	$id=$_GET['id'];

	$qual=$_POST['qual'];
echo $qual;
	$OFFICIAL_ADDRESS=$_POST['OFFICIAL_ADDRESS'];

	$LAND_PH=$_POST['LAND_PH'];
	$PHONE=$_POST['PHONE'];
	$E_MAIL=$_POST['E_MAIL'];
	$path=$_POST['photo'];		
	$Type =$_POST['Type'];
        $Details=$_POST['Details'];
	$data=str_replace("<strong>", "<b>", $data);
	$data=str_replace("</strong>", "</b>", $data);
	/*echo $data;*/
	if($path=='../faculty/images/')
	{
		$objResult = sprintf("select * from faculty where USER_ID='%s'",
    	mysql_real_escape_string($id));
		$result=mysql_query($objResult);
		while($row = mysql_fetch_array($result))
		{
			$path=$row['path'];				
		}
	}
	
	$objResult=sprintf("UPDATE contact set  address='$OFFICIAL_ADDRESS', phone='$LAND_PH', mobile='$PHONE', email='$E_MAIL' where user_id='$id'");
	$result=mysql_query($objResult);
$objResult=sprintf("UPDATE faculty set path='$path', qual='$qual',
						   Type='$Type', Details='$Details' where user_id='$id'");
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
