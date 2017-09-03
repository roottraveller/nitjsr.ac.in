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
  <span>M.Tech Programme</span>
</div>
<div class="pagecontent">


<span class="pagesubheading">Electrical Engineering Department</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<span class="pagesubheading">Power system Engineering</span>
<p>Electrical Engineering department offers four semester M. Tech. course specialization of Power System. First and second semester covers the course work which forms the ground for research based thesis for third and fourth semester. The course caters to the aspects like machine modeling, power system stability, power system protection, power system control, use of power electronics in power system, transient analysis of power system, computer application in power system. The project work is carried out within the department as well as in collaboration with reputed industries/ R&amp;D organizations, such as Tata Steel. Tata Motors, NML Jamshedpur, Power grid, Usha Martin, etc. The content of the above courses are at par with those of the National level Institutions.</p>
<p>The department offers a unique four semester interdisciplinary M. Tech Course in Surface Science and Engineering with specialization in Corrosion and Science of Surface Coatings. The other areas of specialization being Tribology, Mineral Beneficiation, and Petro-chemical technology. It is open to candidates having B. Tech degree in Engineering or Master degree in Physics or Chemistry. This course has been approved by the Govt. of India (AICTE) to cater the need of industries, research institution, etc. which necessitated a wide spectrum of specialization in corrosion and science of surface coatings.</p><p>The course covers surface and interfacial phenomena in general, and physical metallurgy, material science and electrochemistry in particular The second semester offers corrosion and science of surface coating, which covers metallic corrosion, study of kinetics, analysis and characterization of failures of metal and alloys and residual life, corrosion in Chemical, Automotives, Fertilizer, petrochemical and process industries. Methodology of preventive measures such as surface coatings and Paint Technology and Electroplating and Cathodic/ Anodic electrodeposition of polymer (ED coat), Cathodic protection, Anodic protection and the use of inhibitors etc.</p><p>The first two semesters thus give the background preparation for the research based thesis work of third and fourth semesters, normally carried out at reputed industries/ R&amp;D Institutions / Laboratories, where the students acquire first hand exposure to state of art technology under practical working condition and the able guidance of experts This rigorous training gives impetus to motivation, potential enrichment and a new outlook on the part of the students.</p><p>The M. Tech course thus widens the scope of learning of students in the field of surface Engineering Exposure to practical, industnal and / or R&amp;D facilities make the incumbents competent and ready for contributing to such organizations.</p><p>Active participation of engineers, scientists and experts from SAIL, TATA MOTORS, TATA STEEL, Berger Paints, ICI Paints, and CSIR laboratories, viz. NML Jamshedpur, Central Electrochemical Research Institute (Karaikudi.Tamil Nadu), Indira Gandhi Centre for Atomic Research (Kalpakum, T.N), Bhabha Atomic Research Centre (Mumbai) etc, has been the source of strength, inspiration and sustenance of the course, since its inception in 1982.</p><p>The students obtaining the degree find prospective openings in reputed industries and research institutions like ISRO, SHAR Centre, IISc. Bangalore, IITs (Mumbai, Kharagpur, Delhi), University of Roorkee, BHU, NML Jamshedpur, Tata Steel, Tata Motors, ND Ispat (Nagpur), Bombay Paints (Delhi), Shalimar Paints (Kolkatta, Nasik), Bajaj Auto Pune, Hero Honda Dharu Hera, MUL Gurgaon, Goodlass &amp; Nerolac Paints Mumbai, Jenson &amp; Nicholson Kolkatta, ICI Paints Hyderabad, Asian Paints, Majestic Auto Ludhiana, LML Kanpur, Hyundai Tamil Nadu, MRL Chennai, Tribology India Chennai, Gulf oil Mumbai, Saboo Beriac Chandigarh, Steel strips wheels Chandigarh, Morsun Mumbai, Sri Ram Piston Delhi, Sakata INX Delhi, Scooter India Lucknow, Kiriosker Brothers Pune, Swaraj Tractors Chandigarh etc.</p>
</div>
</div>

 
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
