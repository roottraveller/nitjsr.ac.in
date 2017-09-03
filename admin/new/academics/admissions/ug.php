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
<table class="pageheadingimg"> 
  
  <tr>
  <td>
  <label>Under Graduate Admission Procedure </td>
  </tr>
</table>
<div class="pagecontent">
<p><img class="page_images " src="../images/ugad.jpg" width="100%" /></br></p><p></br></p>
Out of total seats of 602 available in this institute, 50% (301 seats) are reserved for candidates qualifying from the state in which the institute is located and rest 50% (301 seats) are reserved for the other candidates based on the population of the respective state, which is decided by MHRD, Govt. of India.</p>
<p>For 301 seats allotted to the students of other states, the respective National Institute of Technology of the state nominate the students for the admission at this institute on the basis of the combine entrance examinations conducted by JEE (Main). The reservation policy of the Central Govt. was followed in nominating the students from S.C./S.T./O.B.C. categories.</p>
<p>Few seats (decided by Ministry of Foreign affairs, Govt. of India, New Delhi) are reserved for the students of foreign nations, which are nominated by ICCR, New Delhi.</p>

<span class="pagesubheading">Examination System</span>

<p>The institute is having semester pattern of Examination at UG &amp; PG levels.</p>
<p>Under the Semester system, the teachers themselves set the Test-1(T1),Test-2(T2) &amp; End-Term question papers &amp; evaluate them. They conduct quiz &amp; class tests for teacher's evaluation. The Test-1 &amp; Test-2  examinations carries 20 marks each, teacher's evaluation 20 &amp; the end term examination carries 40 marks. The students are awarded letter grades from Outstanding(O) to fail (F) depending on their overall performance. The academic section coordinates the overall examination. The results are assessed by either the Under Graduate program Evaluation Committee (UGPEC) or Post Graduate Evaluation Committee (PGPEC) &amp; then sent to the Senate for approval. The students have to maintain a CGPA of 6.0 to continue beyond their first year of study. Supplementary examinations are organized in the summer quarter.</p>
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
