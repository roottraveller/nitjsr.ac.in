<?php
error_reporting(0);
$root='../../';
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


</head>
<body>
<div id="bg" >
<?php include '../../header.php' ;?>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">
<div id="wrapper_sec" >


<div class="main_content">
<div class="pageheading">
  <span>B.Tech (Hons.) Programme</span>
</div>
<div class="pagecontent">
<p></br></p>
	<a href="<?php echo $root;?>department/index.php?dept=civil&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/civil.jpeg" alt="" height="90px" width="100px"></img></div></br>Civil Engineering</a>

	<a href="<?php echo $root;?>department/index.php?dept=cse&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/comp.jpeg" alt="" height="90px" width="100px"></img></div></br>Computer Science and Engineering</a><p></br></p>
	<a href="<?php echo $root;?>department/index.php?dept=eee&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/elec1.jpeg" alt="" height="90px" width="100px"></img></div></br>Electrical and Electronics Engineering</a>

	<a href="<?php echo $root;?>department/index.php?dept=ece&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/comm.jpeg" alt="" height="90px" width="100px"></img></div></br>Electronics and Communication Engineering</a><p></br></p>

	 <a href="<?php echo $root;?>department/index.php?dept=prod&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/manu.jpeg" alt="" height="90px" width="100px"></img></div></br>Manufacturing Engineering</a>

	<a href="<?php echo $root;?>department/index.php?dept=me&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/mech.jpeg" alt="" height="90px" width="100px"></img></div></br>Mechanical Engineering</a><p></br></p>

    <a href="<?php echo $root;?>department/index.php?dept=meta&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/meta.jpeg" alt="" height="90px" width="100px"></img></div></br>Metallurgical and Materials Engineering</a>
   
</div>
</div>

 

</div>
<div class="col2">
<?php include '../../sidepanel.php'?>
</div>
<div class="clear"></div>

<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
