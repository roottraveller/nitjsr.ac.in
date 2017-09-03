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
  <span>M.Tech Programme</span>
</div>
<div class="pagecontent">
<p>
<span class="pagesubheading">Metallurgical Engineering and Material Science Department</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>The department has been running four semester Industrial oriented M. Tech. courses in two streams:</p>
<ul>
	<li>Extractive Metallurgy of Iron &amp; Steel</li>
    <li>Foundry Technology</li>
</ul>
<p>
These courses have been started in early sixties after the approval of Govt. of India, New Delhi with a basic aim to cater the need of industries, research organizations etc. This course is open to candidates having Bachelors degree in Engineering (Metallurgy) or any equivalent degree recognized by University and any other professional bodies approved by Govt. of India.</p>
<p>Each semester is of six months duration. The first semester covers the general and basic papers of Metallurgy and Material science in particular alongwith eight weeks training in industries. The second semester offers the specialized papers in the area of Iron Making, Energy Conservation, Solidification, and Casting Technology, etc.</p><p>These two semester teachings give the strong background and base for solid preparation for the research based thesis. The entire third semester is devoted for industrial training so that the students can get good exposure of the industries, which helps them in selecting the project topic for their thesis work. Thus, these M.Tech. courses provide the wide scope of teaming of students in the field of Ferrous Production Technology and Metal Casting Technology. Practical and Industrial training provide the students elaborate exposures to Research and Development activities in the plants, which make them competent to solve the problems of industries.</p><p>Expert from Tate Steel, N. M. L, Jamshedpur, Tata Motors, Usha Martin Industries Ltd. are also helping the department as adjunct faculty to make this course interesting and attractive. Their contribution has been the source of strength, inspiration and sustenance of the course since its inception.</p><p>The students obtaining the degree find prospective openings in reputed industries and research organizations such as BARC, ISRO, NML, R&amp;D SAIL, Tata Steel, SAIL Plants, Vijayanagar Steel, Mini Steel Industries, RRL Bhubaneshwar, IITs etc.</p>

</div>
</div>

 
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
