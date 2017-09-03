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
  <span>MCA Programme</span><br />
</div>
<div class="pagecontent">
<p>In order to meet the growing demand of software professionals in the country a three-year full time MCA programme is offered at the Institute by the department of Computer Applications. After successful completion of this course, a candidate is absorbed as software Engineer, System Analyst, System Executive, System Manager, etc.</p><p>It is a 3 year (6 semester) full time course. The students undergo a thorough class room teaching and extensive laboratory work in which they develop software in the areas like Information Technology, Business Intelligence, Decision Support System etc. During first five semesters, the students are taught subjects like Computer Organization, Data Base Management System, Computer Graphics, Computer Networking, SAD, Decision Support System, Business Intelligence, Accounting &amp; Financial Management, Marketing Management, Operations Management, ERP, Supply Chain Management, Artificial Intelligence and Expert Systems, etc.</p><p>In the 6th. Semester, students do the project and thesis work in the Industry under the joint supervision of one faculty from the department and one expert from the respective industry on the live project. After the completion of the MCA programme students are recruited to reputed organizations, such as IBM, AMDOCS, TCS, SATYAM, PCS, HCL, WIPRO, HUGES, TATA STEEL, and many others.</p><span class="pagesubheading">Course Structure for MCA Programme</span>
<img src="<?php echo $root?>images/h2.png" width="100%" /><p>The MCA course is of six semester duration. The course work and laboratory classes are covered during the first five semesters each of 24 credits. In the last semester the students are sent to the Industries and or Research organizations/ Business organization for their project/ thesis work. The project work is of 20 credits. Thus the total credits in the programme is 140 as given below:<a href="../../uploads/Board of Studies MCA.pdf">Click here to Download
</a></p>

<span class="pagesubheading">Eligibility</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>Candidates with a bachelor's degree of minimum 3 years duration in any discipline with Mathematics at the (10 + 2) school level or at the Bachelor's level or BCA are eligible. Those candidates who are appearing at the Bachelor's degree Examination and fulfill the above mentioned criteria are also eligible but they will have to furnish the result of the Bachelor's degree examination before a stipulated date. The admission is granted by the Institute as per Government policy and the score of NIMCET. Indian Nationals are only eligible to apply.</p>
<span class="pagesubheading">Distribution of seats</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>The distribution of seats for MCA Programme is as follows:</p>
<ul class="pagelists">
	<li>No any State Quota</li>
	<li>50% of the seats for Open Categorey Candidate </li>
    <li>27% for OBC Candidate</li>
    <li>15% &amp; 7.5% for SC &amp; ST candidates respectively.</li>
</ul>
<p>
A candidate belongs to the state from where he has passed the qualifying examination (graduate programme). In case of distance learning, the state in which head quarter of the degree awarding body is situated will be the state of the candidates obtaining degrees form such organization / institution.</p>

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
