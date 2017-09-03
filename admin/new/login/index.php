<?php 
error_reporting(0);
define('isDOCTYPE',1375);
include 'admin/auth.inc.php';
include 'validate.inc.php';
if(isset($_POST['submit']))
{
	$user=htmlentities($_POST['username']);
	$p=htmlentities($_POST['password']);
	
	if(checkLogin($user, $p))
	{
		echo 'login successful';
	}
	else
	{
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo '<script type="text/javascript">alert("Incorrect Login Information");</script>';
	}
}
?>
<title>Faculty-Login</title>
<style type="text/css">

html, body {height: 100%; text-align:center; }
div#distance { margin-bottom: -10em; width: 1px;height: 50%; float: left;}
div#container {color:#fff; font-size:14px;	position: relative;   text-align: left; height: 150px;	width: 675px; margin-left:auto; margin-right:auto; padding-top: 75px; clear: left;}
table{color:#FFF}
input.txt-field{ background:url(admin/css/images/bg-loginboxes.gif) no-repeat; border:0px; width:186px; height:21px; padding-left:8px;margin-top:0px;}
input.submit{margin-top:0px; border:0px; background:url(admin/css/images/bt-login.gif); width:56px; height:21px;cursor:pointer}
body {background: url(admin/css/images/bg-login.jpg) repeat-x center; margin: 0; padding: 0;
font-family: Helvetica, Arial, Tahoma, serif; font-size: 9pt;}
h1 {font-size:250%; text-transform:capitalize; letter-spacing:-1px; font-weight:bold; width:450px; 
	margin: 0 0 35px 0; padding: 0;}
h1 a {color:#fff; text-decoration:none;}
h1 a:hover {color:#ccc;}


</style>


        <!--[if IE 6]>
        <style type="text/css">
        label.remember {width: 200px; margin-left:40px;}
        label.txt-field {margin-right: 5px}
        </style>
        <![endif]-->

</head>

<body>

<div id="distance"></div>
	<div id="container">
		<div id="top"><h1>Faculty - Login</h1></div>
		<div id="form-container">
		<form action="<?php $_SERVER['php_self']; ?>" name="login-form" method="post">
			<table>
			<tr>
			<td valign="top">
			Username : <input class="txt-field" name="username" type="text"/> </td><td valign="top"> Password : <input class="txt-field" name="password" type="password"/></td><td valign="top"> <input name="submit" class="submit" value="" type="submit"/></td></tr>
            <tr><td colspan="3" id="error" style="color:#F00; background:#FF0; display:none"></td></tr>
            </table></form>
			
			<span class="clearFix">&nbsp;</span>
			</form>
		</div>
	</div>


</body></html>
