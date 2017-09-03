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
<div class="pageheadingimg">
  <span>Training &amp; Placement Cell -  NIT Jamshedpur</span>
  
</div>
<div class="pagecontent">
<img src="images/tapHome.jpg"/><p></br></p>
<p>
The Training & Placement Cell, NIT Jamshedpur facilitates the process of placement of students passing out from the Institute besides collaborating with leading organizations and institutes in setting up of internship and training program of students.

The office liaises with various industrial establishments, corporate houses etc which conduct campus interviews and select graduate and post-graduate students from all disciplines. The Training & Placement Cell provides the infra-structural facilities to conduct group discussions, tests and interviews besides catering to other logistics. The Office interacts with many industries in the country, of which nearly 100+ companies visit the campus for holding campus interviews. The industries which approach the institute come under the purview of:
<ul>
<li>
Core Engineering industries</li>
<li>IT &amp; IT enabled services</li>
<li>Manufacturing Industries</li>
<li>Consultancy Firms</li>
<li>Finance Companies</li>
<li>Management Organisations</li>
<li>R &amp; D laboratories</li>

</ul>
The placement season runs through the course of the year commencing the last week of July through to June. Pre-Placement Talks are also conducted in this regard as per mutual convenience. Job offers, dates of interviews, selection of candidates etc. are announced through the Training & Placement Cell.


The Placement Office is assisted by a committee comprising representatives of students from the under-graduate and post-graduate engineering streams. The committee evolves a broad policy framework every year besides a set of rules which are inviolable. Students members are closely co-opted in implementing these policy decisions.




</p>
</div>
</div>
 

</div>

<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
