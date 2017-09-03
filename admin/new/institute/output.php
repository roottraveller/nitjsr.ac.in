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


<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
</head>
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>

<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>Output Indicator</span>
</div>
<div class="pagecontent">
    <ul>
    <li>Increase in research publication, patents and technology transfer to industry</li>
	<li>Increase in sponsored research projects and consultancy</li>
	<li>Increase at Ph.D. and post-doc research</li>
	<li>Increase in state of art laboratories in cutting edge technologies</li>
	<li>Increase in national and international conferences</li>
	<li>Increase in qualified (minimum PhD) & talented faculty</li>
	<li>Class rooms and laboratories equipped with latest tools being used meaningfully</li>
	<li>Adjunct/Visiting faculty from the industry</li>
	<li>Faculty visit/training/collaborative ventures with industry, research organizations and other academic institutions of repute in India & abroad</li>
	<li>Increase in student strength at M.Tech. and PhD level (restructuring the existing programmes and introducing new programmes)</li>
	<li>Introducing new innovative programs like Dual degree program, MS by research program</li>
	<li>Increase in degree programmes</li>
	<li>Increase in foreign students intake</li>
	<li>Increase in the departments and centre of excellence</li>
	<li>Increase in resource generation through alumni, consultancy, fee etc</li>
	<li>Increase in community services to payback to the society</li>
	<li>Increase in qualified technical staff</li>
	<li>Increase in non-formal training to industry and other educational institute (Executive/staff development Programme)</li>
	<li>Lectures by distinguished professionals from industry and academic institute</li>
	<li>National and Global accreditation certification and licensing for global competitiveness as per (GATS- Mode 2 and Mode – 4)</li>
	<li>Development of state-of-the-art infrastructure in terms of building (offices, Lecture theatres, new laboratories, new departments and centres, hostels, faculty and staff residences), equipment, library, video conferencing & media centre, medical, road, electricity, water supply, sanitation, telecom and Internet facilities, security, recreational facilities, environment and ambience.</li>
	<li>Increased utilisation of infrastructure facilities in terms of man-hours by sharing the facilities with the other academic institutions.</li>
	<li>Establishment of industry sponsored chairs</li>
	<li>Nurturing entrepreneurs</li>
	<li>Administrative reforms (MIS, Transparency and self monitoring mechanisms, autonomy, well defined responsibilities & accountability, maintenance etc)</li>
	<li>Exchange programs at national & international level</li>
    </ul>    
    
    
</div>
</div>
</div>

 <!--sidetab starts here-->
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>