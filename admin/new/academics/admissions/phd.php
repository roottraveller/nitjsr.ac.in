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
<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >


<div class="main_content">
<div class="pageheading">
  <span>Ph.D. Admission Procedure</span><br />
  </div>
 <div class="pagecontent">
<span class="pagesubheading">Eligibility</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>Candidates must possess Master Degree in Engineering (in the relevant fields) or Science or MCA or MBA or its equivalent from a recognized University with at least 60% marks (or a CGPA of 6.5 in a 10 point scale) in the qualifying examination.</p>
<span class="pagesubheading">Selection Procedure</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>Candidate possessing qualification as given are to be selected for admission to the program on the basis the following weightage:</p>
	<table class="pagetablestyle">
		<tr><td>a.</td><td>Overall academic performance</td><td>70 percent</td></tr>
    	<tr><td>b.</td><td>Test and Interview conducted by Department</td><td>30 percent</td></tr>
    </table>

<span class="pagesubheading">Admission Requirements for Ph.D. Programme</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>A sponsored scholar selected for admission shall be required at the time of joining the Institute:</p>
<ul>
	<li>To submit evidence of having passed the qualifying examination and such other documents as the Institute may require.</li>
    <li>To produce certificate from the employers to the effect
    	<ol type="i">
        	<li>That he has been officially released from his duties for purpose of joining the program and has been granted the leave for the required period.</li>
            <li>That his services shall be retained with the employers.</li>
        </ol>
    </li>
    <li>A self supporting candidate in service shall produce a release certificate from his/her employer at the time of admission.</li>
</ul>
</div>
</div>

 

</div>
<div class="col2">
<?php include '../../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>