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
  <span>Team PHOENIX</span>
</div>
<div class="pagecontent">
<img src="<?php echo $root ?>images/phoenix.jpg" title="Faculty Advisor Apreciated by Mr. S. Mutthuraman" alt="Phoenix" class="pageimg" style="height:330px;" />
<p></br>Pioneers of aero-designing in college, Team phoenix is a group of engineering connoisseurs committed to perform high-end aircraft designing and engineering. This team founded by a model-aircraft enthusiast Pratibha Tripathi, along with its committed team members Indushekhar Prasad Singh, Hitesh Singh, Shalini das, Abhinav Singhavi, Alka sethi and Varija raj under the skilful guidance of Dr. M.K. Sinha. From the very beginning this team has been active in various national, international events and has achieved new heights in aviation field. Some of our team achievements are as follows:
<ul><li>
Participated in two categories of SAE Aero design 2013 competition organised by SAE and Lockheed Martin, in California, USA, and stood 18th in whole world as well as 1st among all Indian teams in regular category.</li></br>
<li>Also our both aircrafts were given NASA system engineering certificate as they fulfilled all the technical requirements of NASA.</li></br><li>
Ours was the only Indian team to qualify among top 68 world teams to combat in world’s most prestigious student Design/Build/Fly competition organized by American Institute of Aeronautics and Astronautics (AIAA) in collaboration with Cessna aircraft company/Raytheon Missile Systems held at Wichita, KS, USA in the year 2012.</li></br> 
We also believe in incorporating new ideas and Innovations in our RC models. Some of those significant efforts are listed below:
<li>Passenger RC aircraft made from Fibre reinforced plastic (FRP).</li></br><li>
Soldier portable UAV (Unmanned Aero Vehicle) made from balsa wood.</li></br>
<li>Working on designs of an efficient model of aircrafts capable of accurately dropping a thirty three pound (33lb) humanitarian aid package from a minimum of hundred feet off the ground and another system containing a portable UAV and launching system within specified packaging requirements.</li>
</br>
<li>Also we are making effort to incorporate Aerial image processing in UAV, which can be a major breakthrough in innovation of RC aircrafts. These aircrafts can prove really handy stuff for surveillance purpose ranging from traffic management to rescue operations in disasters, terrorist attacks etc.
</li></br>

Current members of the team are Tarun Kedia, Ashish Ranjan, Adarsh Giri, Sumit Ranjan, Kumar Harsh Vardhan, Abhijeet Kumar, Vishal Kumar Roy, Shubham Upadhyay, Nikhil Mishra, Pinaki Shaw, Pooja Jaiswal, Anita Singh and Divya.

</br><span class="backbtn"><a href="<?php echo $root;?>sw/activities/"> &lt;&ndash; Go Back</a></span>
</p>

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
