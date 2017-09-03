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
<div class="pageheading">
  <span>Training</span>
</div>
<div class="pagecontent">
<p>Summer internships provide opportunities for students to gain experience in their discipline, determine if they have an interest in a particular career, and create a network of contacts. At NIT Jamshedpur, Internships are given due importance and also included as part of the curriculum for the pre-final year students. Every B.Tech., P.G student is required to undergo an Industrial training as approved by the Department. The training period varies from 6-8 weeks. Two credits are awarded for this essential requirement of the B.Tech./P.G programme. Students from other programs also take up internships to add to their educational experience.
<br>
The institute is strategically located with the unique advantage of being surrounded by giant and medium scale industries like Tata-Steel, Telco, Indian Steel Wire Products, Tata Tubes, Tinplate Company, Tata Timken,ISWP,Adhunik,Usha Martin etc. and reputed Institutes like the National Metallurgical Laboratory, Xavier Labour Relations Institute and National Institute of Foundry and Forge Technology, Ranchi which helps our students gain proper exposure to the industry and research initiatives.
</br>
NIT Jamshedpur, has always nurtured a healthy relationship with the industry. We would like to strenghten it by inviting industries to provide our pre final year students SUMMER INTERNSHIP/TRAINING at their campuses.<b>If you are a potential recruiter, please send us the necessary details at our official email ID - tap@nitjsr.ac.in.</b> We are obliged for your cooperation.
<br>
Following is the list of companies/organisation that have offered summer training to our students of the 2014 passing out batch:-</br>
<table  width="760px">
<tr><td >
<ul>
<li>ADHUNIK GROUP</li>
<li>AFCONS INFRA</li>
<li>AJ INFORMEDIA</li>
<li>BHABHA ATOMIC RESEARCH CENTRE</li>
<li>BELZABAR SOFTWARE</li>
<li>BHARAT PUMPS & COMPRESSORS LTD.</li>
<li>BHARAT HEAVY ELECTRICALS LTD.</li>
<li>BIT MESRA</li>
<li>BSNL</li>
<li>CPWD</li>
<li>DIESEL LOCOMOTIVES WORKS</li>
<li>DMRL (DRDO)</li>
<li>DOORDASHAN</li>
<li>DAMODAR VALLEY CORPORATION</li>
<li>ECIL</li>
<li>ERICSSON</li>
<li>FINALNOK.COM</li>
<li>GODREJ CONSUMER PRODUCTS</li>
<li>HEAVY ENGINEERING CORPORATION LTD.</li>
<li>HPES, INDIA</li>
<li>IISC BANGALORE</li>
<li>IIT BOMBAY</li>
<li>IIT DELHI</li>
<li>IIT GUWAHATI</li>
<li>IIT MADRAS</li>
<li>IIT ROPAR</li>
<li>INDIAN ACADEMY OF SCIENCE</li>
<li>INDIAN RAILWAYS</li>
<li>INDIAN OIL CORPORATION LIMITED</li>
<li>IPEG SOLUTIONS</li>


</td>
<td >

<li>JUSCO</li>
<li>LRDE (DRDO)</li>
<li>L &amp; T (ECC)</li>
<li>L &amp; T (HEAVY)</li>
<li>MECON</li>
<li>MN DASTUR</li>
<li>NACRE SOFTWARE</li>
<li>NATHCORP PVT LTD</li>
<li>NHPC</li>
<li>NATIONAL METALLURGICAL LABORATORY</li>
<li>NTPC</li>
<li>NTT DATA</li>
<li>OPTCL</li>
<li>OPTUMSOFT RESEARCH PVT LTD</li>
<li>PATRATU THERMAL PLANT</li>
<li>PROFOUNDIS, MICROSOFT</li>
<li>RAJASTHAN STATE GOVT.</li>
<li>RINL</li>
<li>RK FORGING</li>
<li>RRCAT</li>
<li>SAIL</li>
<li>TATA MOTORS</li>
<li>TATA POWER</li>
<li>TATA STEEL</li>
<li>TCS</li>
<li>TELCON</li>
<li>TOKYO</li>
<li>TRF</li>
<li>TUUH,GERMANY</li>
<li>USHA MARTIN</li>





</td>
</table>




</p>
</div>
</div>
 

</div>

<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
