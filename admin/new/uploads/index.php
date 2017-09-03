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
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

 <link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/style1.css" />      		               
														

</head>


<body>
<!--head included here-->
<div id="bg">
<?php include $root.'header.php' ?>
<!--head inclusion ends--> 
</div> 
<!-- Stylesheet -->

<script>
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






<script type="text/javascript">
$(function() {
	
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>

<div id="wrapper_sec" >
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
</div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<!--sidetab ends--> 
<?php $root='../';?>
<!--footer starts here -->
<div class="clear"></div>
</br>
<?php include '../footer.php'?>
</body>

</html>
