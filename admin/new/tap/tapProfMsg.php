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
  <span>Training &amp; Placement In-Charge's Message</span>
</div>

        	</br><b></br>To Download the Placement Brochure</b> <a href="<?php echo $root;?>tap/attachment/NIT_Jamshedpur_Brochure.pdf" target="_blank"><b>Click Here</b></a>.
<div class="pagecontent">
<p>The erstwhile Regional Institute of Technology, Jamshedpur has joined the prestigious fold of the National Institutes of Technology in 2002, and is proud of its alumni who have left an indelible mark in every sector. It has come up as an abode of scientific learning and technical excellence, and a helping hand for the nearby industries.</p>
<p>The prime motive is to foster in our students a passion for challenge and achievement, a thirst for knowledge, and a desire to make their career with a company that promises professional excellence. The visiting teams have commended our students for their strong team spirit, discipline, leadership qualities and technical expertise.</p>
<p>It would be worthwhile to mention that more than 70% of the students of our institution have secured ranks in the top 15,000 in the AIEEE exam. We also host many annual nationwide technical and cultural fests in which students from all over India come and participate. Students of our institution also have participated and have won various technical competitions in various fests organized by prestigious institutions. Time over and over our students have made us proud creating laurels at various international and national level competitions.</p>
<p>It gives me immense pleasure to extend to you a cordial invitation to participate in the Campus Recruitment Program for the final year students. It would be our proud privilege to host you.</p>
<p><b></br>Dr. Rajiv Bhushan</b><br />
		Professor In-charge, Training &amp; Placement<br />
        NIT Jamshedpur
        </p></div>
</div>

</div>
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear">
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
