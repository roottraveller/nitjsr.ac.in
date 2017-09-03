<?php 
include 'head.php';?>
<?php include 'auth.inc.php'; ?>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">
<?php

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! get_magic_quotes_gpc() )
{
   $FNAME = addslashes ($_POST['FNAME']);
   $LNAME = addslashes ($_POST['LNAME']);
   $OFFICIAL_ADDRESS = addslashes ($_POST['OFFICIAL_ADDRESS']);
}
else
{
   $FNAME = $_POST['FNAME'];
   $LNAME = $_POST['LNAME'];
   $OFFICIAL_ADDRESS = $_POST['OFFICIAL_ADDRESS'];

}
$id=$_GET['id'] ;

$DEPT = $_POST['DEPT_ID'];
$PRENAME = $_POST['PRENAME'];
$DESIG = $_POST['DESIG'];
$PHONE = $_POST['PHONE'];
$E_MAIL = $_POST['E_MAIL'];
$LAND_PH = $_POST['LAND_PH'];
$OFFICIAL_ADDRESS = $_POST['OFFICIAL_ADDRESS'];
global $seed; // global because $seed is declared in the auth.inc.php file

	
	$pass = $_POST['PASSWORD'];
	$encryptpass = sha1($pass.$seed);

mysql_query("UPDATE contact SET  DEPT_ID ='$DEPT',
		 FNAME ='$FNAME',LNAME ='$LNAME',PRENAME ='$PRENAME',DESIG ='$DESIG',PHONE='$PHONE',LAND_PH='$LAND_PH',E_MAIL ='$E_MAIL',OFFICIAL_ADDRESS='$OFFICIAL_ADDRESS' WHERE USER_ID = '$id'")
				or die(mysql_error()); 
				if($encryptpass!="292e2be0bfbd2774db81f4b4268e1428e58b0b64")
				{
				mysql_query("UPDATE user SET  pass ='$encryptpass' WHERE uid = '$id'")
				or die(mysql_error()); 
				}
echo  "<script type=text/javascript>alert('Your contact has been saved successfully !! click to go back');
	  </script>";

?><script type="text/javascript">
	   document.location.href="searchcontact.php";
	   </script>";