<?php
error_reporting(0);
define('isDOCTYPE',1375);
include '../login/admin/auth.inc.php';
$root='../';
$sql="select * from results where status='1' order by time desc;";
$result = mysql_query($sql);
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

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">
<style type="text/css">
A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
A:hover { COLOR: red; TEXT-DECORATION: underline; font-weight: none }
</style>
</head>
<body>
<div id="wrapper_top" >

<?php include $root.'newpage.php' ?>
</div>
<div id="bg" >

<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>Results</span>
</div>

<div class="pagecontent">
<?php
if(!mysql_num_rows($result))
{
	echo "No New Notices at this time.";
} else {
?>
	<table class="pagetablecontent" align="center">
<tr class="tablehead"><td style='width:50px;'>Date</td><td>Result</td></tr>
	
<?php 

$i=0;
while($row = mysql_fetch_array($result))
{
	$link=preg_split('/[#]+/',$row['link']);
			if(count($link)==1)
			{
					$date= date("d-m-Y",strtotime($row['time']));
					if($i%2==0)
						echo "<tr class='tabledark'><td style='width:50px;'>".$date."</td><td><a href=\"".$root.$row['link']."\" target= \" _blank\" >".$row['notification']."</a></td></tr>";
						else
						echo "<tr class='tablelight'><td style='width:50px;'>".$date."</td><td><a href=\"".$root.$row['link']."\" target= \" _blank\" >".$row['notification']."</a></td></tr>";
						$i++;
			}
			else
			{
				$date= date("d-m-Y",strtotime($row['time']));
					if($i%2==0)
						echo "<tr class='tabledark'><td style='width:50px;'>".$date."</td><td><a href=\"".$root."uploads/index.php?id=".$row['no']."&category=results\"  >".$row['notification']."</a></td></tr>";
						else
						echo "<tr class='tablelight'><td style='width:50px;'>".$date."</td><td><a href=\"".$root."uploads/index.php?id=".$row['no']."&category=results\"  >".$row['notification']."</a></td></tr>";
						$i++;
			}
}
?>
</table>
<?php } //end of else
?>
</div>


</div>

 

</div>
<div class="col2">
<?php include '../newsidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer1.php' ?>
<!-- footer ends here -->

</body></html>
