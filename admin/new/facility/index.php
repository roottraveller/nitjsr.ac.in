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
  
  <span>Facilities</span>
</div>
<div class="pagecontent">


<a href="<?php echo $root;?>facility/bank.php" class="deptboxl"><div class="deptimg"><img src="images/bank.jpeg" alt="" height="90px" width="100px"></img></div></br>Bank and Post Office</a>
<a href="<?php echo $root;?>facility/library.php" class="deptboxr"><div class="deptimg"><img src="images/library.jpeg" alt="" height="90px" width="100px"></img></div></br>Central Library</a><p></br></p>
<a href="<?php echo $root;?>facility/cc.php" class="deptboxl"><div class="deptimg"><img src="images/cc.jpeg" alt="" height="90px" width="100px"></img></div></br>Computer Centre</a>
<a href="<?php echo $root;?>facility/store.php" class="deptboxr"><div class="deptimg"><img src="images/store.jpeg" alt="" height="90px" width="100px"></img></div></br>General Store</a><p></br></p>
<a href="<?php echo $root;?>facility/guest.php" class="deptboxl"><div class="deptimg"><img src="images/ghouse.jpeg" alt="" height="90px" width="100px"></img></div></br>Guest House</a>
<a href="<?php echo $root;?>facility/gym.php" class="deptboxr"><div class="deptimg"><img src="images/tsg.jpeg" alt="" height="90px" width="100px"></img></div></br>Gymkhana</a><p></br></p>
<a href="<?php echo $root;?>facility/health.php" class="deptboxl"><div class="deptimg"><img src="images/disp.jpeg" alt="" height="90px" width="100px"></img></div></br>Health Center</a>
<a href="<?php echo $root;?>facility/bus.php" class="deptboxr"><div class="deptimg"><img src="images/vehicle.jpeg" alt="" height="90px" width="100px"></img></div></br>Transportation facility</a><p></br></p>

	

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
