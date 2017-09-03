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

<p><img class="page_images" style="width:100%;"src="<?php echo $root?>images/rnc.jpg" /></br><b>Prof. Suresh Prasad Sharma<br></b>
Dean, Research and Consultancy<br>
Professor, Department of Mechanical Engineering<br>
Contact: 0657-2374021 <br>
Email: <a href="mailto:dean.rc@nitjsr.ac.in ">dean.rc@nitjsr.ac.in </a><br>
</b></p>
<p><span class="pagesubheading">Functions of Dean Research and Consultancy</span><img src="../images/h2.png" width="100%"></img></p>
<!-- <b align: left>Functions of Dean Research And Consultancy</b>-->
<ol>
<li > Deputation of faculty to various institutions under Quality improvement programme</li>
<li> Create and maintain database regarding faculty expertise</li>
<li> Facilitate through his/her office faculty in procuring equipments necessary to conduct research/consultancy work, recruitment of project staff</li>
<li> Coordinate co-curricular activities(Technical festivals, quizzes etc.) for the students.</li>
<li> provide guidance for submitting proposals to funding agencies such as department of science and technology(DST) Bhabha atomic research centre(BARC), Board of Research in nuclear Science(BRNS), Indian Space Research Organization(ISRO), Defence Research and development organization(DRDO), Aeronautics Research and Development Board(AR&DB), Ministry of information technology etc. </li></ol></p>

<span class="pagesubheading"></br>Downloads</span><img src="../images/h2.png" width="100%"></img></p></br>
<p>
<ul>
<li><a href="../rnc/Guidelines for attending Conference, Seminar & Workshop .pdf">Guidelines for attending Conference, Seminar & Workshop</a></li>
<li><a href="../rnc/Student project Grant Applicatin form.pdf">Student project Grant Applicatin form</a></li>
<li><a href="../rnc/Format for attending  Conference in India.pdf">Format for attending  Conference in India.pdf </a></li>
<li><a href="../rnc/Format for attending Abroad Conference.pdf">Format for attending Abroad Conference.pdf </a></li>
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
