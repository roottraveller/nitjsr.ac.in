<?php
error_reporting(0);
define('isDOCTYPE',1375);
include '../login/admin/auth.inc.php';
$root='../';
if($_GET['id'] && $_GET['category'])
{
	$id=$_GET['id'];
	$table=$_GET['category'];
}
else
{
	header('location:../index.php');
	exit();
}
$sql="select * from `".$table."` where no=".$id." and status='1'";
$result = mysql_query($sql);
if(!mysql_num_rows($result))
{
	header('Location:'.$root.'index.php');
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

<script type="text/javascript">
var idd=1;
function vsbl(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
var b=document.getElementById("chk_butn"+idd);
var dv1=document.getElementById("chk"+id);
var dv2=document.getElementById("chk"+idd);
dv2.style.visibility='hidden';
dv1.style.visibility='visible';
a.style.background='#4F99C5';
a.style.color='#fff';
b.style.background='#ffffff';
b.style.color='#C02630';
idd=id;
}
}
function btn(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#4F99C5';
}
}
function btn_r(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#C02630';
}
}

</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/innerpage.css" />
<style type="text/css">
A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:hover { COLOR: red; TEXT-DECORATION: underline; font-weight: none }
</style>
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
  <span>Downloads</span>
</div>

<div class="pagecontent">
	<ul>
	
<?php 



while($row = mysql_fetch_array($result))
{
	$links=preg_split('/[#]+/',$row['link']);
	for($i=0;$links[$i];$i++)
	{
		$link=preg_split('/[\/]+/',$links[$i]);
		echo "<li><a href=\"".$root.$links[$i]."\" target= \" _blank\" >".$link[1]."</a></li>";
	}
}
?>
</ul>
</div>
<!--<table class="pagecontent">
<tr><td><span class="pagesubheading">Office Orders</span><br /><img src="<?php echo $root?>images/h2.png" width="100%" /></td></tr></table>

<table class="pagetablestyle" border="0">
	<tr style="font-weight:bold;"><td>Attachment</td><td>Size</td></tr>
	<tr><td><a href="<?php echo $root;?>" target="_blank">order1.doc</a></td><td>569 KB</td></tr>
</table>-->



</div>

 

</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
