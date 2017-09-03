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


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>Acts and Statutes</span>
</div>

<div class="pagecontent">
<p>The National Institutes of Technology Act, 2007 was enacted by the Parliament of India to declare India's National Institutes of Technology as Institutes of National Importance. The Act received the assent of the President of India on 5 June 2007 and became effective on Independence Day ,2007. The National Institutes of Technology Act is the second law for technical education institutions after the Indian Institutes of Technology Act of 1961.IIESTs have also been proposed to be covered under this act as two separate schedules until a host of other IIESTs do not come into existence, for the time being.</p>

<!-- <span class="pagesubheading">Rationale</span>
<img src="../images/h2.png" width="100%" />

<p>The 17 Regional Engineering Colleges were established in the major states of India as a cooperative venture between the central and respective state governments. In 2002, the Indian government decided to upgrade all Regional Engineering Colleges ("RECs") to NITs and later raised a few other reputed government colleges in subsequent years (for instance, Patna,Raipur and Agartala) to NIT status. Further, five more NITs have been established recently in the year 2010-11, particularly in North-East states of India.</p>

<p>After the upgrade NITs were completely under central government control. The Institutes provided potential choice for the government to replicate the IIT system and the Indian government decided to give these Institutes more autonomous powers.</p>

<span class="pagesubheading">Benefit to the NITs</span>
<img src="../images/h2.png" width="100%" />

<p>With the NIT Act, the societies governing the NITs cease to exist and the institutes are placed directly under the administrative control of the HRD ministry with the boards of governors heading affairs. The chairperson of the board is appointed by the President of India, who will also be a visitor to each institute. The ministry will also have a say in the appointment of the Director and Deputy Director of each institute.</p>
<p>The NITs have become a group of disciplined institutions and within few years, they have come a long way, based on the successful and sound foundation of REC system and with the elimination of dual control by state and central government. They have united together and successfully lobbied for INI status under NIT Act of 2007. With the new-found INI status, NITs shall be able to receive increased govt. funding and support, more freedom to implement various academic programs and increased attention nationally and internationally.</p>
<p>NITs further plan to start NITNET for networking and implement NIT-Vision 2025 to launch ambitious academic and research programs. Individual institutes will be permitted to start new programs catering to the needs of the local industry and wind up unpopular courses. The focus will be on nanotechnology and biotechnology. Plans are afoot to start integrated courses in science and technology along with dual degree programs both at undergraduate and postgraduate levels.</p>
<p>NITs have been told to increase the student intake in the next five years, with the number of students being doubled to that of the existing strength. The MHRD Ministry plans to increase the number of research fellowship, with as many as 60 to 70 being granted to each institute to enable students to concentrate on new topics of interest. Existing laboratories and libraries will also be upgraded.</p> -->

<ul class="lists">
        	<li><a href="<?php echo $root;?>institute/NIT_ACT.pdf" target="_blank">Click Here</a> here to download the NIT Act.</li>
            <li><a href="<?php echo $root;?>institute/NIT_statutes.pdf" target="_blank">Click Here</a> here to download the NIT Statutes.</li>
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
