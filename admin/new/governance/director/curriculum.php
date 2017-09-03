
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
var assistvisible=false;
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
function assistants()
{
	if(assistvisible){
		document.getElementById('assist').style.display='none';
		document.getElementById('assist1').style.display='none';
		assistvisible=false;
	}
	else{
		document.getElementById('assist').style.display='table';
		document.getElementById('assist1').style.display='block';
		assistvisible=true;
	}
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">

</head>
<body>
<div class="bg">
<?php include $root.'header.php' ?>
</div>

<div id="wrapper_sec">
<div class="main_content">
<div class="pagecontent"style="width:100%">
<a href="index.php"><img src="images/banner.jpg"/></a>
    
	<!--Click here to view <a href="../governance/dirhistory.php" style="">Previous Directors</a>-->
</p>

</div>
<div class="pagecontent" style="width:73%">
<p><span class="pageheadingimg">Curriculum Development</span>
</br></br>
	Curriculum Development at BITS, Pilani (1992-2010)under leadership of Prof. S. Venkateswaran (Director / VC, BITS, Pilani) and Prof. Maheswari (VC, BITS, Pilani).</br></br>
	<b>On-Campus</b></br></br>
	<ul>
 <li>Designed and developed the integrated first degree programme BE (Hons) Manufacturing Engineering, 2009</li>
 <li>Designed and developed the integrated first degree programme BE (Hons) ManufacturingEngineering (with Industrial Practice), 2008. The salient features of the programme are:</li>
 <ul>
 <li>Three Industrial Practice components to be conducted at industry</li>
 <li>The total duration of the programme is 4.5 years out of which 13 Months will be devoted to industrial practice</li>
 <li>Industry will support student fees, living expenses and also stipend during Industrial Practice, but the student will have to agree to the conditions laid down by Industry. </li>
</ul>
<li>Designed and developed the following higher degree programmes</li>
<ul>
 <li>ME "Manufacturing Management", 1998</li>
 <li>ME "Manufacturing Systems Engineering", 1998</li>
 <li>ME "Design Engineering", 1998</li>
 <li>ME “Materials Science and Technology”, 1998</li>
</ul></br></ul>

<b>Off-Campus(work-integrated learning programmes) </b></br></br>
<ul>
 <li>Designed and developed the following integrated first degree programmes in collaboration with the Work Integrated Learning Programmes Division, BITS, Pilani:</li>
<ul>
 <li>BS "Manufacturing Engineering”</li>
 <li>BS "Marine Engineering"</li>
 <li>BS "Engineering Technology"</li>
 <li>BS "Process Engineering”</li>
  <li>BS "Industrial Engineering & Technology"</li>
 <li>BS "Power Engineering"</li>
 <li>BS "Engineering and Industrial Technology"</li>
 <li>BS "Engineering Design"</li>
</ul>
<li>Designed and developed the following integrated first degree programmes in collaboration with the Work Integrated Learning Programmes Division, BITS, Pilani:</li>
<ul>
 <li>MS "Engineering Management"</li>
 <li>MS "Quality Management"</li>
 <li>MS "Industrial Production & Management"</li>
 <li>MS "Manufacturing Management"</li>
  <li>MS "Mechanical Systems Design"</li>
  <li>MVS "Production & Maintenance Techniques"</li>
</ul>

</br>
</div>
</div>
</div>

 <!--sidetab starts here-->
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
