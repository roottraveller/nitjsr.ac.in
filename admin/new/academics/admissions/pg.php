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
<div id="wrapper_sec">


<div class="main_content">
<div class="pageheading">
  <span>Post Graduate Admission Procedure</span><br />
  </div>
<div class="pagecontent">
<p>M. Tech. students are admitted on the basis of their GATE score &amp; their performance at a screening test / interview conducted by the institute.</p>
<p>Students are admitted to the MCA program based on their performance at NIMCET. For Online Registration Form and other information of NIMCET-2013 <a href="http://nimcet2013.nitw.ac.in" >click here </a></p>
<span class="pagesubheading">Examination System</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<p>The institute is having semester pattern of Examination at UG &amp; PG levels.</p>
<p>Under the Semester system, the teachers themselves set the Test1(T1),Test2(T2) &amp; major test question papers &amp; evaluate them. They conduct quiz &amp; class tests for teacher's evaluation. The T1 &amp;T2 carry 20 marks each respectively, teacher's evaluation 20 &amp; the major test carries 40 marks. The students are awarded letter grades from Outstanding (O) to fail (F) depending on their overall performance. The academic section coordinates the overall examination. The results are assessed by either the Under Graduate program Evaluation Committee (UGPEC) or Post Graduate Evaluation Committee (PGPEC) &amp; then are sent to the Senate for approval. The students have to maintain a CGPA of 6.0 to continue further subsequent years of study. Supplementary examinations are organized in the summer quarter.</p>
</div>
</div>

 

</div>
<div class="col2">
<?php include $root.'sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
