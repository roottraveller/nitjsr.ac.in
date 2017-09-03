
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
<p><span class="pageheadingimg">Ph.D Thesis Guided</span>
</br></br>
	<b>Ph.D Thesis Guided:09</b></br></br>
	<ul>
     <li style="text-align: justify;">Anand G, "Design and Assessment of Lean Manufacturing Systems", 2009.</li>
     <li style="text-align: justify;">Monica Sharma, "An Empirical Investigation of Manufacturing Excellence in Indian Industry", 2009.</li>
     <li style="text-align: justify;">Rajesh Prasad Mishra, "Development and Assessment of World-class Maintenance Systems for World-class Manufacturing", 2006.</li>
     <li style="text-align: justify;">V.K. Sunnapwar,"Decision Support Systems for Economic Justification of World-class Manufacturing Systems", 2004.</li>
     <li style="text-align: justify;">Srikanta Routroy, "Development of Decision Support Systems for the Design of Supply Chain Management Drivers", 2005.</li>
     <li style="text-align: justify;">K.S. Sangwan, "Integrated Approach for the Design of Cellular Manufacturing Systems", 2003.</li>
     <li style="text-align: justify;">S. Chandra, "Justification and Design of Japanese Manufacturing Strategies", 2000.</li>
     <li style="text-align: justify;">G. Harinarayana, "Neural Networks based Systems for fault diagnosis of Computer Integrated Manufacturing Systems", 1998.</li>
     <li style="text-align: justify;">S. Venugopal, "Knowledge-based System for Design of Flexible Manufacturing Systems", 1997.</li>
</ul></br></br>
<b>Ph.D Thesis On-Going:04</b></br></br>
<ul>
<li>Gunjan Soni, "An empirical investigation of supply chain management practices in Indian manufacturing industry", 2011, Submitted.</li>
<li>Hamesh Babu Nanvala, "Intelligent hybrid system for online scheduling of FMS", 2012, Submitted.</li>
<li>Vinayak Kalluri, "Development of Innovative Product Design and Development Process".</li>
<li>Jasti Naga Vamsi Krishna, "An Empirical Investigation of Lean Enterprises in Indian Industry"</li>
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
