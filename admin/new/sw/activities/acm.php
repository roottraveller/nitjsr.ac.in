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

<?php include '../../header.php' ?>
</div>
<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">
  <span>ACM NIT Jamshedpur Student Chapter</span>
</div>
<div class="pagecontent">
<p>The Association for Computing Machinery (ACM) is the world's largest educational and scientific computing society that advances education through initiatives that address the changing needs of students and professionals in computing and information technologies. As a student chapter we envision the mutual growth of the student community along with growth of science and technology. Our primary goal is to bring the resources (publications, conferences, job boards, mentoring services, etc.) that advance computing both as a science and a profession, to every student.</p><p></br></p>
<span class="pagesubheading">About</span>
	<img  src="<?php echo $root?>images/h2.png" width="100%" />
	<p>The ACM, NIT Jamshedpur chapter is the official ACM" chapter of the computer science department of NIT Jamshedpur and was started on 18th January 2013. It started under the visionary of Prof. R.R Suman to connect the students of the department to the worldwide organization so that they can draw benefits from it. There are currently 20 members in the team and it is growing at a rapid pace.</p></br><p></br></p>
	<span class="pagesubheading">Benefits to students</span>
	<img  src="<?php echo $root?>images/h2.png" width="100%" />
	<p>ACM community provides many beneficial services to the members of its chapter. The membership is maintained by the officers of the chapter through the chapter administrative interface. All chapter members receive the following services:</p>
<p><ul>
 <li>A free email forwarding address (@acm.org) with high-quality Google Postini spam filtering (additional email to follow with instructions). </li>

 <li>A three-month complimentary electronic subscription to Communications of the ACM.</li> 

<li> A full-year subscription to Crossroads, ACM's Student Magazine .</li>

<li> TechNews : ACM's tri-weekly technical news service for IT professionals, one of our members' most highly valued benefit.</li> 

 <li>CareerNews : ACM's newest email newsletter filled with helpful industry tips, trends and insights.</li> 

<li> MemberNet : the ACM member newsletter that provides a window to the full breadth of ACM's activities and people. It includes coverage of professional and student chapter happenings.</li></ul></p> </br>

<p><b>Visit our website at </b><a href="http://www.acmnitjsr.org/" target="_blank" class="pagelink"><b>http://www.acmnitjsr.org/</br></b></a></p>
<div class="clear"></div>
<span class="backbtn"><a href="<?php echo $root;?>sw/activities/"> &lt;&ndash; Go Back</a></span>
</div>
</div>
</div>
<div class="col2">
<?php include '../../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include '../../footer.php' ?>
<!-- footer ends here -->

</body></html>
