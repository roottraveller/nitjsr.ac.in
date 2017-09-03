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
  <span>Formula SAE</span>
</div>
<div class="pagecontent">
<img src="<?php echo $root ?>images/fsae1.jpg" title="Faculty Advisor Apreciated by Mr. S. Mutthuraman" alt="Formula SAE" class="pageimg" />
<p></br>One of the first SAE team of college, Team Drift has been the most active of all. Founded in the year 2009 by a group of automobile enthusiasts they took on the challenge to design, manufacture and run a Formula SAE project car. This team has not only won events in India but has also participated in various international events, bringing laurels to the college as well as country.</p>

<p>The achievements are:</p>
<ul>
	<li>Team Drift, representing N.I.T. Jamshedpur, India, successfully participated in the FORMULA STUDENT UK-2011 held at Silverstone Racing Circuit with their 2nd Car DR211 and secured 5th position amongst 133 teams from all over the world for the Prestigious Airbus Team Work Award.</li>
    <li>Earlier successfully participated in the static event of FORMULA SAE AUSTRALASIA-2010, held in December, 2010 at Victoria University, Melbourne, Australia. The team finished first in the cost event of FSAE Australasia and the car design was designated as the “MOST ECONOMICAL CAR DESIGN”.</li>
	<li>Supra SAE India in 2009 was their first event, held at Anna University, Chennai. The car built by the team, DR110, was rated 1st in car evaluation and the team became the 2nd runners up overall.</li>
</ul>
<p>Now the team has registered for FORMULA SAE, JAPAN 2012  to prove its potential worldwide which will be between 3 sept. to 7 sept. 2012 at EUCOPA sports park,tokyo.</p>
<img src="<?php echo $root ?>images/fsae2.jpg" title="Mr. Ratan Tata congratulating the Team" alt="Formula SAE" class="pageimg" />
<div class="clear"></div></br>
<span class="backbtn"><a href="<?php echo $root;?>sw/activities/"> &lt;&ndash; Go Back </a></span>
</div>
<p></br></p>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include $root.'sidepanel.php'?>
</div>

<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
