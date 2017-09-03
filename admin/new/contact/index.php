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
  
  <span>Phone Directory</span>
</div>

<div class="pagecontent">
        	<center>To View All Contacts <a href="<?php echo $root;?>contact/index1.php">Click Here</a>.</center>
        
<p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Academic Section" class="deptboxl"><div class="deptimg"><img src="images/academics.jpeg" alt="" height="90px" width="100px"></img></div></br>Academic Section</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Accounts Section" class="deptboxr"><div class="deptimg"><img src="images/accounts.jpeg" alt="" height="90px" width="100px"></img></div></br>Accounts Section</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Training and Placement Cell" class="deptboxl"><div class="deptimg"><img src="images/tap.jpeg" alt="" height="90px" width="100px"></img></div></br>Training and Placement Cell</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Guest House" class="deptboxr"><div class="deptimg"><img src="images/ghouse.jpeg" alt="" height="90px" width="100px"></img></div></br>Guest House</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Dispensary" class="deptboxl"><div class="deptimg"><img src="images/disp.jpeg" alt="" height="90px" width="100px"></img></div></br>Dispensary</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Computer Centre" class="deptboxr"><div class="deptimg"><img src="images/cc.jpeg" alt="" height="90px" width="100px"></img></div></br>Computer Centre</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Central Library" class="deptboxl"><div class="deptimg"><img src="images/library.jpeg" alt="" height="90px" width="100px"></img></div></br>Central Library</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=TEQIP Cell" class="deptboxr"><div class="deptimg"><img src="images/teqip.jpeg" alt="" height="90px" width="100px"></img></div></br>Teqip Cell</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Workshop" class="deptboxl"><div class="deptimg"><img src="images/workshop.jpeg" alt="" height="90px" width="100px"></img></div></br>Workshop</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Vehicle Section" class="deptboxr"><div class="deptimg"><img src="images/vehicle.jpeg" alt="" height="90px" width="100px"></img></div></br>Vehicle Section</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Darwans" class="deptboxl"><div class="deptimg"><img src="images/darwan.jpeg" alt="" height="90px" width="100px"></img></div></br>Darwans</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Estate Section" class="deptboxr"><div class="deptimg"><img src="images/estate.jpeg" alt="" height="90px" width="100px"></img></div></br>Estate Section</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=AP Section and Gymkhana" class="deptboxl"><div class="deptimg"><img src="images/tsg.jpeg" alt="" height="90px" width="100px"></img></div></br>AP Section and Gymkhana</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Electrical Works and Maintenance" class="deptboxr"><div class="deptimg"><img src="images/elec.jpeg" alt="" height="90px" width="100px"></img></div></br>Electrical Works and Maintenance</a><p></br></p>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Civil Work and Maintenance" class="deptboxl"><div class="deptimg"><img src="images/civil.jpeg" alt="" height="90px" width="100px"></img></div></br>Civil Works and Maintenance</a>
<a href="<?php echo $root;?>contact/aca.php?DEPT=Central Store and Purchase" class="deptboxr"><div class="deptimg"><img src="images/store.jpeg" alt="" height="90px" width="100px"></img></div></br>Central Store and Purchase</a><p></br></p>


    </div>  
 </div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div><!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
