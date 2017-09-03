

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
<link rel="stylesheet" type="text/css" href="../new/css/style1.css" />
<link rel="stylesheet" type="text/css" href="../new/css/reset.css"/>


   
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
  <span>Electronics and Communication Engineering</span>
</div>
<div class="pagecontent">
	
	<p> Electronics and Communication Engineering Department has been running a four semester M. Tech programme in VLSI design and embedded systems with a view to impart updated technical education to Electronics and Communication engineering graduates who can successfully shoulder the technical challenges of the nation.With  the latest quality education we encourage our students in becoming flexible,hard working and innovative in order to attain excellence. </p>
	</br>
	<p><strong>A general-purpose definition of embedded systems is that they are devices used to control, monitor or assist the operation of equipment, machinery or plant. “Embedded” reflects the fact that they are an integral part of the system. In many cases, their “embeddedness” may be such that their presence is far from obvious to the casual observer.</strong> </p></br>
<p>M.Tech program is an attempt to focus on the techniques required in the process of product development of embedded systems looking at its extensive use in the industry. The course covers design, manufacturing, optimization of VLSI Design in embedded systems. During the first two semesters, theoretical knowledge of the advanced subjects are given through course, work and during the last two semesters the students have to do project work in the department/ nearby reputed industries/ research and development organizations where students acquire first hand exposure to advanced technologies under working condition. We have a separate well –equipped VLSI Laboratory in the department for M. Tech students in a central Computer Center. </p>
</br>
<b>To Download the detailed curriculum</b> <a href="<?php echo $root;?>uploads/M.tech ece vlsi design.pdf " target="_blank"><b>Click Here</b></a>.
</div>
<!--<table class="pagecontent">
<tr><td><span class="pagesubheading">Office Orders</span><br /><img src="<?php echo $root?>images/h2.png" width="100%" /></td></tr></table>
<table class="pagetablestyle" border="0">
	<tr style="font-weight:bold;"><td>Attachment</td><td>Size</td></tr>
	<tr><td><a href="<?php echo $root;?>" target="_blank">order1.doc</a></td><td>569 KB</td></tr>
</table>-->
</div>
</div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div/>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
