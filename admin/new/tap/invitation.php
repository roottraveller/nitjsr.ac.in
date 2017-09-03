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
  <span>Training &amp; Placement Cell -  NIT Jamshedpur</span>
</div>
<div class="pagecontent">
<!--<ul class="pagelists">
	<li><a href="dirMsg.php">Director's Message</a></li>
	<li><a href="chairmanMsg.php">Chairman's Message</a></li>
	<li><a href="tapProfMsg.php">T&amp;P Professor Incharge's Message</a></li>
	
</ul>-->


<div class="tapbox"><a href="../governance/chairman.php"><img class="tapimg" src="images/chairman.jpg" style="height:225px;width:180px;padding-left:0px;"></a><div class="message"><p style="text-align:center"><font size="5"></br>Chairman's Message</font></br></br>NIT Jamshedpur is reputed for its eclectic ambience which synthesizes rigorous academics and pulsating social, cultural and sports activities. NIT Jamshedpur constantly strives through its academic programmes, research infrastructure, entrepreneurial initiatives and vigorous institute - industry partnership to enable students to keep abreast with the emerging technological areas and also be a part of the new multi-cultural environment which transcends frontiers.</br><a href="chairmanMsg.php">Read More...</a></p></div></div>
<p></br></p>
<div class="tapbox"><a href="../governance/director.php"><img class="tapimg" src="images/director.jpg" style="height:225px;width:180px;padding-left:0px;"></a><div class="message"><p style="text-align:center"><font size="5"></br>Director's Message</font></br></br>National lnstitute of Technology, Jamshedpur, one of the institutes of national importance, has been successful in carving a niche for itself in the list of educational institutions imparting technological education to the youth of the country. This cradle of excellence has the mission to impart quality education and encourage research opportunities in the country. Our institute is renowned across the whole country because of its brilliant history of serving as the alma mater of some of the brightest and most successful torchbearers of the country. <a href="dirMsg.php">Read More...</a></p></div></div>
<P></BR></P>


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
