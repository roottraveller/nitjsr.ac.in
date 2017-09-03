<?php
error_reporting(0);
define('isDOCTYPE',1375);
include '../admin/auth.inc.php'; 
include '../validate.inc.php';
if(!isLoggedIn())
{
	header('Location: ../index.php');
	exit();
}
$root='../../';
$id=$_GET['id'];
$objResult = sprintf("select * from user where uid='%s' and groupName='faculty' LIMIT 1",
    		mysql_real_escape_string($id));
$result=mysql_query($objResult);
if(!mysql_num_rows($result))
{
	header('Location: ../error.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="Nishant Kumar" />
<meta http-equiv="contact" content="nishantkumar35@gmail.com" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title>  
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/innerpage.css" />
<style>

body
{
font-family:arial;
}
.preview
{
text-align:center;
width:350px;
height:50px;
padding:10px auto;
color:#cc0000;
font-size:12px;
margin:20px auto;

}

</style>
<script type="text/javascript" src="js/jquery.1.4.3.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('a.txttoplink').eq(2).attr('href','../logout.php').html('Logout');
			$('span.txttoplink').find('img').eq(2).attr('src','../../images/logout.png');
			val=<?php if(decrypt($_SESSION['user_group'])!="admin"){echo decrypt($_SESSION['user_uid']);}else echo $_GET['id']; ?>;
			$('a.txttoplink').eq(1).attr('href','index.php?id='+val).html('Profile').attr('target','_self');
			$('span.txttoplink').find('img').eq(1).attr('src','../../images/profile.png');
});
function validate(){
	oldpass = document.getElementById('oldpass').value;
	newpass = document.getElementById('newpass').value;
	repass = document.getElementById('repass').value;
	var passreg= /^[a-zA-Z0-9_\.\-\s]{6,20}$/;
	if(!passreg.test(oldpass)){
		alert("Please enter your current password currently.");
		return false;
	}
	if(!passreg.test(newpass)){
		alert("Your password must be\n   1. 6 - 20 characters long\n   2. permissible characters:\n        a-z or A-Z or 0-9 or . or _ or -");
		return false;
	}
	if(newpass != repass){
		alert("Passwords do not Match.");
		return false;
	}
	$(".preview").html('');
	$(".preview").html('<img src="images/ajax-loader.gif" alt="Uploading...."/>');
	$("#form").ajaxForm({
			target: '.preview'
		}).submit();
	return true;
}
</script>


</head>
<body>

<div id="wrapper_top" >
<?php include $root.'header.php' ?>
</div>
<div id="wrapper" >
<!--sidetab starts here-->
<?php include $root.'sidebar.php' ?>
<!--sidetab ends-->
<div class="main_content">
<div class="pageheading">
<span style="text-transform:capitalize;">Change Password</span>
</div>  
<div class="pagecontent">
<form  name="form" id="form" action="<?php echo $root;?>login/faculty/changepwd.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
<table width="350">
    <tr>
        <td>Enter Current Password</td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right"><input type="password" name="oldpass" id="oldpass" /></td>
    </tr>
    <tr>
        <td>Enter New Password</td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right"><input type="password" name="newpass" id="newpass" /></td>
    </tr>
    <tr>
        <td>Re-Enter New Password</td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right"><input type="password" id="repass" /></td>
    </tr>
    <tr>
    	<td colspan="3"><input type="button" value="Reset" onclick="validate();" /></td>
    </tr>
    <tr>
    	<td colspan="3"  class="preview"></td>
    </tr>
</table>

</form>
</div>
</div>
</div>
<?php include $root.'footer.php' ?>
</body>
</html>