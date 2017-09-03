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
<meta name=Author content="NIT-JSR" />
<meta http-equiv="contact" content="webmaster@nitjsr.ac.in" />
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

<p><img class="page_images" style="height:230px; width:100%;" src="pnd.jpg" /></br>


 <br>

</b></p>
<?php $i=0;?>
<table class="pagetablecontent_new" border="0" height="300px" width="100%">
	<tr class="tablehead" align="center">
			<td>&nbsp;</td>
            <td>Name</td>
            <td>Contact</td>
			 <td>&nbsp;&nbsp;&nbsp;&nbsp;Nature of Duties</td> <td>&nbsp;</td>
    </tr>
		<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;</td>
            <td><br><b>Prof. Madan Mohan Prasad<br></b>
Dean, Planning And Development<br>
Professor, Department of Civil Engineering<br></td>
            <td> 
0657-2374010<br>
<a href="mailto:mmprasad.ce@nitjsr.ac.in ">mmprasad.ce@nitjsr.ac.in </a><br><br>      <td><br></td>      
     <td>&nbsp;</td></tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;</td>
            <td><b>Prof. A.K.L. Srivastava<br></b>
Associate Dean, Planning And Development<br>(Civil Works)<br>
Professor, Department of Civil Engineering<br></td>
            <td> 
9470316916<br>
 <a href="mailto:aklsriv.ce@nitjsr.ac.in ">aklsriv.ce@nitjsr.ac.in </a><br><br></td>
      <td><br><ul><li >Civil Engineering Issues</li>
<li>Water Supply</li>
<li>Drainage</li>
<li>Sewage Treatment Plants</li>
<li> Coordination of Maintenance</li>
<li>Coordination of repairs pertaining to building services</li>
<li>Data needed for budget, new estimates and plans for Buildings and Works Committee</li>
 <li>Monitoring of Housekeeping works</li>
</ul></br></td>      
   <td>&nbsp;</td>  </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;</td>
            <td> 
<b>Dr. U.K. Sinha<br></b>
Associate Dean, Planning And Development<br>(Electrical Works)<br>
Professor, Department of Electrical and Electronics Engineering<br></td>
            <td>
 <a href="mailto:uksinha.ee@nitjsr.ac.in ">uksinha.ee@nitjsr.ac.in </a><br></td>
            <td><br><ul>
<li > Electrical Engineering issues</li>
<li > Uninterrupted Power Supply</li>
<li > Coordination of Diesel procurement, its storage & associated statutory approvals</li>
<li > Coordination of Preventive Maintenance of all Diesel Generators</li>
<li > Coordination of all electrical services in new constructions</li>
 <li > Coordination of electrical maintenance work at campus and building level</li>
 <li > A/C Maintenance </li>
</ul></br>
 </td>
   <td>&nbsp;</td>  </tr>

</table>
</b></p>


</b></p><p><br></p>
</div>
</div>
    
</div>

 

</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
