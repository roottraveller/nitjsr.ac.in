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
  <span>Computer Society of India Students' Branch, NIT JSR</span>
</div>
<div class="pagecontent"><img src="<?php echo $root ?>images/csi.jpg" title="Computer Society of India" alt="Computer Society of India" class="pageimg" style="width:260px;" />
<p></br>CSI Students’ Branch - NIT JAMSHEDPUR is a relatively new society that was started on April 01,2011 under the guidance of <b>Prof. Sanjay Kumar</b> (President, CSI Students’ Branch) with the  permission and consent of <b>Prof. Rajnish Shrivastava</b> (the then Director, NIT Jamshedpur) and <b>Prof. S.B.L. Seksena</b> (the then HOD, CSE). It comprises of many members and undertakes in-depth discussion encompassing a wide range of topics. It conducts several activities such as conferences, seminars, workshops, exhibitions, training programs, quiz, project competitions, etc.<br />
CSI NIT Jamshedpur, in the past, has organised an annual techno management fest of department of Computer Science and Engineering, CRYPTEX &rsquo;09 to generate IT awareness in the region.</p>
<p>It primarily works to bridge the gap between technology and the academia by conducting such activities.<br />
There are a total of 334 members from the departments of Computer Science &amp; Engg., Electronics &amp; Communication Engg. and Master of Computer Applications</p>
<p>The mission of the CSI is to facilitate research, knowledge sharing, learning and career enhancement for all categories of IT professionals, while simultaneously inspiring and nurturing new entrants into the industry and helping them to integrate into the IT community.</p>
<p>On the occasion of first anniversary of CSI Student’s Branch, &quot;<b>INCEPTION &rsquo;12</b>&quot; was held on 24th-25th march, 2012 which was an amalgamation of technical and fun events.<br />
Various events including fun events were held under Inception. Cash prize of more than Rs. 12000/- was won. Inception-12 was open for all year, CSI / NON-CSI members.</p>
<p>The core committee of the branch consists of 3rd and 4th year students of Computer Science and Engineering Department.</p>
<p>Visit the website at <a href="http://www.csinitjsr.com" target="_blank" class="pagelink"><b>www.csinitjsr.com</br></br></b></a>.</p>
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
