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
<meta name=Author content="bhaskar" />
<meta http-equiv="contact" content="bm6779@gmail.com" />
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


<div class="pagecontent">
<img src="../images/technicaban.jpg" width="100%"/><p></br></p></p>
<p>
TECHNICA, the annual national symposium fest of Department of Metallurgical and Materials Engineering, NIT Jamshedpur, is a unique forum where students from different institutes of national repute come together on one platform to showcase their technical expertise. It also gives them an opportunity of a lifetime to interact with the stalwarts in the field who share their expertise, to experience the cutting edge technologies and developments in this field through plethora of events.</br>

This year, this National Level event consists of Technical Paper/Poster presentations by the students from various engineering colleges of the country followed by Industrial Problem Solving, an event in which students try to solve real time industrial problems, a Metallographic contest, Model Presentation, MATLAB coding and “ Dr Dara P. Antia memorial Metal Quiz”, for the students and Engineers from the industries during 17th January to 19th January, 2014 at N.I.T. Jamshedpur.</br>


<br/> <b>For more detail Visit Us at </b> <a href="http://technica.net.in/2014/">http://technica.net.in/2014/.</a></p>
</div></div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->
</body>
</html>
