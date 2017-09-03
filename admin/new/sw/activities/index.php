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
  <span>Student's Activities</span><br />
</div>
<div class="pagecontent">
<p></br></p>
<a href="<?php echo $root;?>sw/activities/acm.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/acm.jpeg" alt="" height="90px" width="100px"></img></div></br>ACM Student Chapter</a>

	<a href="<?php echo $root;?>sw/activities/cds.php" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/cds.jpeg" alt="" height="90px" width="100px"></img></div></br>CDS</a><p></br></p>

	<a href="<?php echo $root;?>sw/activities/csi.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/csi.jpeg" alt="" height="90px" width="100px"></img></div></br>CSI Students' Branch NIT Jamshedpur</a>
	<a href="<?php echo $root;?>sw/activities/faces.php" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/faces.jpeg" alt="" height="90px" width="100px"></img></div></br>FACES</a><p></br></p>

	<a href="<?php echo $root;?>sw/activities/bajasae.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/bsae.jpeg" alt="" height="90px" width="100px"></img></div></br>Baja SAE</a>

	 <a href="<?php echo $root;?>sw/activities/fsae.php" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/fsae.jpeg" alt="" height="90px" width="100px"></img></div></br>Formula SAE</a><p></br></p>

	<a href="<?php echo $root;?>sw/activities/lds.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/lds.jpeg" alt="" height="90px" width="100px"></img></div></br>LDS</a>

    <a href="<?php echo $root;?>sw/activities/phoenix.php" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/phoenix.jpeg" alt="" height="90px" width="100px"></img></div></br>Phoenix</a><p></br></p>
   


	<a href="<?php echo $root;?>sw/activities/sss.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/sss.jpeg" alt="" height="90px" width="100px"></img></div></br>Soft Skills Society</a>

    <a href="<?php echo $root;?>sw/activities/sports.php" class="deptboxr"><div class="deptimg"><img src="<?php echo $root;?>dimages/sports.jpeg" alt="" height="90px" width="100px"></img></div></br>Sports</a><p></br></p>
   

<a href="<?php echo $root;?>sw/activities/topguns.php" class="deptboxl"><div class="deptimg"><img src="<?php echo $root;?>dimages/topguns.jpeg" alt="" height="90px" width="100px"></img></div></br>Topguns</a>

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
