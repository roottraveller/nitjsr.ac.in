<?php
error_reporting(0);
$root='../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

 <link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/style1.css" />  
<link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/reset.css" />      		               
														

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
  <span>Academic Departments</br></span>
</div>
<div class="pagecontent">
<p></br></p>
<a href="<?php echo $root;?>department/index.php?dept=chemistry&page=home" class="deptboxl"><div class="deptimg"  ><img src="<?php echo $root;?>dimages/chem.jpeg" alt="" height="90px" width="100px"></img></div></br>Chemistry</a>

	<a href="<?php echo $root;?>department/index.php?dept=civil&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/civil.jpeg" alt="" height="90px" width="100px"></img></div></br>Civil Engineering</a><p></br></p>

	<a href="<?php echo $root;?>department/index.php?dept=mca&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/compapp.jpeg" alt="" height="90px" width="100px"></img></div></br>Computer Applications</a>

	<a href="<?php echo $root;?>department/index.php?dept=cse&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/comp.jpeg" alt="" height="90px" width="100px"></img></div></br>Computer Science and Engineering</a><p></br></p>

	<a href="<?php echo $root;?>department/index.php?dept=eee&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/elec1.jpeg" alt="" height="90px" width="100px"></img></div></br>Electrical and Electronics Engineering</a>

	<a href="<?php echo $root;?>department/index.php?dept=ece&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/comm.jpeg" alt="" height="90px" width="100px"></img></div></br>Electronics and Communication Engineering</a><p></br></p>
	<a href="<?php echo $root;?>department/index.php?dept=humanities&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/hum.jpeg" alt="" height="90px" width="100px"></img></div></br>umanities, Social Sciences and Management</a>

	 <a href="<?php echo $root;?>department/index.php?dept=prod&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/manu.jpeg" alt="" height="90px" width="100px"></img></div></br>Manufacturing Engineering</a><p></br></p>

	 <a href="<?php echo $root;?>department/index.php?dept=maths&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/math.jpeg" alt="" height="90px" width="100px"></img></div></br>Mathematics</a>

	<a href="<?php echo $root;?>department/index.php?dept=me&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/mech.jpeg" alt="" height="90px" width="100px"></img></div></br>Mechanical Engineering</a><p></br></p>

    <a href="<?php echo $root;?>department/index.php?dept=meta&page=home" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/meta.jpeg" alt="" height="90px" width="100px"></img></div></br>Metallurgical and Materials Engineering</a>

	<a href="<?php echo $root;?>department/index.php?dept=physics&page=home" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/phy.jpeg" alt="" height="90px" width="100px"></img></div></br>Physics</a><p></br></p>
   

</div>
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

