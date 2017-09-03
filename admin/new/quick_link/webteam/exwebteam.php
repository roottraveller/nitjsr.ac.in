<?php
error_reporting(0);
$root='../';
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


</head>
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >


<?php $i=0;?>
<div class="main_content">
<div class="pageheading">
  <span>Web Team</span>
</div>
<div class="pagecontent">

<?php $i=0;?>
<table class="pagetablecontent"  border="0">
	<tr class="tablehead">
	<td>Name of Students</td><td>Batch</td><td>E-mail</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Nishant Kumar<br />
		(Student, ECE)</td><td>2008</td><td>nishantkumar35@gmail.com</td>
	</tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Md. Shahnawaz Alam<br />
		(Student, CSE)</td><td>2008</td><td>shan92822@gmail.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Ankur Sahuwala<br />
		(Student, CSE)</td><td>2009</td><td>ankur_sahuwala@yahoo.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>D. Hariharan<br />
		(Student, CSE)</td><td>2009</td><td>mani.hariharan@gmail.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Ajit Kumar<br />
		(Student, CSE)</td><td>2009</td><td>ajitk1990@gmail.com</td>
	</tr>
</table>

</div>
</div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
