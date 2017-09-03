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


<div class="main_content">
<div class="pageheading">
  <span>Curriculum</span>
</div>
<div class="pagecontent">
<a href="../department/index2.php?dept=civil&page=curriculum" class="deptboxl"><div class="deptimg"><img src="../dimages/civil.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Civil Engineering</a>
<a href="../department/index.php?dept=mca&page=curriculum" class="deptboxr"><div class="deptimg"><img src="../dimages/compapp.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Computer Applications</a><p></br></p>
<a href="../department/index2.php?dept=cse&page=curriculum" class="deptboxl"><div class="deptimg"><img src="../dimages/comp.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Computer Science Engineering</a>
<a href="../department/index2.php?dept=eee&page=curriculum" class="deptboxr"><div class="deptimg"><img src="../dimages/elec.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Electrical and Electronics Engineering</a><p></br></p>
<a href="../department/index2.php?dept=ece&page=curriculum" class="deptboxl"><div class="deptimg"><img src="../dimages/comm.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Electronics and Communication Engineering</a>
<a href="../department/index2.php?dept=prod&page=curriculum" class="deptboxr"><div class="deptimg"><img src="../dimages/manu.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Manufacturing Engineering</a><p></br></p>
<a href="../department/index2.php?dept=me&page=curriculum" class="deptboxl"><div class="deptimg"><img src="../dimages/mech.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Mechanical Engineering</a>
<a href="../department/index2.php?dept=meta&page=curriculum" class="deptboxr"><div class="deptimg"><img src="../dimages/meta.jpeg" alt="" height="90px" width="100px"></img></div></br>Curriculum for Metallurgical and Materials Engineering</a><p></br></p>


</p>
</div>
<!--<table class="pagecontent">
<tr><td><span class="pagesubheading">Office Orders</span><br /><img src="<?php echo $root?>images/h2.png" width="100%" /></td></tr></table>

<table class="pagetablestyle" border="0">
	<tr style="font-weight:bold;"><td>Attachment</td><td>Size</td></tr>
	<tr><td><a href="<?php echo $root;?>" target="_blank">order1.doc</a></td><td>569 KB</td></tr>
</table>-->
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
