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


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>Faculty Welfare</span>
</div>
<div class="pagecontent">
<b>Prof. Anand Mukut Tigga</b><br>
Dean, Administration &amp; Faculty Welfare<br>
Professor, Department of Manufacturing engineering<br>
Contact: 0657-2374130<br>
Email: <a href="mailto:dean.fw@nitjsr.ac.in
">dean.fw@nitjsr.ac.in
</a><br>
<span class="pagesubheading"></br>Functions of Dean Faculty Welfare</span><img src="../images/h2.png" width="100%"></img></p>

<ol>
<li> Deputation of faculty to various institutions under quality improvement programme</li>
<li> He/She will advice the director for deputation of the faculty member to various conferences, seminars, short term courses training programmes, foreign teaching/training assignments</li>
<li> He/She will chair the committee meetings of the evaluation of papers submitted or to be submitted to the conferences/seminar by the faculty members</li>
<li> He/She will assist the director in organising training programmes for faculty.</li>
<li> He/She will assist the director in maintaining the discipline and work ethos among the various departments and between the faculty members</li>
<li> He/She will assist the director in maintaining the high academic standards and achieving academic excellence in the institution</li>
<li> Supervision over faculty discipline, integrity and commitment.</li></ol>
</br>

<span class="pagesubheading"></br>Downloads</span><img src="../images/h2.png"  width="100%"></img></p></br>
<p></br>
<ul>
<li><a href="../fw/LETTER FOR IMPLEMENTATION OF 4 TIER IN  NITs.pdf">IMPLEMENTATION OF 4 TIER IN  NITs</font> </a></li>
<li><a href="../fw/Fresh guidelines for entitlementreim bursement claim under CPDA.pdf">Guidelines for entitlementreim bursement claim under CPDA</font> </a>
</li>

</ul>
</p>

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
