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

<!--<div class="pageheading">

  <span>Industry & Alumni Relations Centre </br>
</div> -->
<div class="pagecontent" style="padding-bottom:20px">
<img src="../new/images/alm.jpg" width="100%"/><p></br></p></p>
<p></span>

<p>
The Grand Alumni Homecoming - 2014 is to be organized at NIT Jamshedpur on 25-26 Jan 2014.</p><p>

Industry and Alumni Relations Centre is established to develop the Relations, MOUs, Collaborate Research, Internship, Fellowship, Continuing Education Programmes, Endowment fund with Industry and Alumni.

A Committee consisting of following faculty members is constituted to achieve the aim and objective of the Industry and Alumni Relations Centre.</br>
<b>Please visit <a href="http://www.alumninitjsr.com" target="_blank" class="pagelink">www.alumninitjsr.com</a> to register.<p></br></p></b></p>

<table class="pagetablecontent" border="0" text-align="center">
<tr class="tablelight">
    	<td><span style="font-weight:bold">Prof. S.B.L.Saxena<br>Electrical Engineering Department</span></td>
        <td>	
Chairman, <br> +919431112721</td>
    </tr>
    <tr class="tabledark">
    	<td><span style="font-weight:bold">Prof. R. N. Mahanty<br> Electrical Engineering Department</span></td>
        <td>	
Coordinator, <br> +919431940110</td></td>
    </tr>
    <tr class="tablelight">
    	<td><span style="font-weight:bold">Dr. A.K. Singh <br> Civil Engineering Department</span></td>
        <td>Coordinator, <br> +919430746532</td></td>
    </tr>
    <tr class="tabledark">
    	<td><span style="font-weight:bold">Mr. Virendra Kumar <br> Civil Engineering Department</span></td>
        <td>Coordinator, <br> +919431330642</td></td>
    </tr>
<tr class="tablelight">
    	<td><span style="font-weight:bold">Dr. (Mrs.) Rina Sahu<br>Metallurgy & Materials Engineering Department</span></td>
        <td>Coordinator <br> 0657-2374041</td></td>
    </tr>
<tr class="tabledark">
    	<td><span style="font-weight:bold">Mr. Saurabh Singh Thakur<br> Computer Science & Engineering Department</span></td>
        <td>Coordinator, <br> +918797022904</td></td>
    </tr>
</table>


<span class="pagesubheading">Endowment Fund-NIT Jamshedpur</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p> As per the decision of the 5th meeting of the council of NITs held on 14th September, 2012 in New Delhi an "Endowment Fund" is to be opened for contributions from alumni for the purpose of development of the Institute. Accordingly a separate bank account in the name of "Endowment Fund" has been opened as detailed below: </p>
<p>
<ol>
<li>Name of Account:- ENDOWMENT FUND-NIT JAMSHEDPUR</li>
<li>Account No:-          32682192845</li>
<li>IFS Code No:-         SBIN 0001882</li>
<li>Swift Code:-           SBININBB164</li>
</ol></p>
<p> All contributions to the Endowment Fund will be deposited in this account. A matching contribution to this fund will be recieved from Government of India.</p>

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
