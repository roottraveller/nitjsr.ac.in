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
var assistvisible=false;
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
function assistants()
{
	if(assistvisible){
		document.getElementById('assist').style.display='none';
		document.getElementById('assist1').style.display='none';
		assistvisible=false;
	}
	else{
		document.getElementById('assist').style.display='table';
		document.getElementById('assist1').style.display='block';
		assistvisible=true;
	}
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">

</head>
<body>
<div class="bg">
<?php include $root.'header.php' ?>
</div>

<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>The Director</span>
</div>  
<div class="pagecontent"style="width:74%">
<div style="margin-left:2px; width:250px; margin-top:0px;">
<div class="pagecontent"style="width:74%"><p>
<img src="<?php echo $root ?>images/director.jpg" title="Prof. Rambabu Kodali" alt="Director" class="pageimg img" style="width:200px;  hight:350px;" /></p>
    <p><br /><br /></p><p>
<a href="director/">Prof. Rambabu Kodali</a><br />
    <b>Director</b><br />
	N I T Jamshedpur<br />
Jharkhand - 831014<br /><br />
E-mail:
<a href="mailto:director@nitjsr.ac.in" class="pagelink">director@nitjsr.ac.in</a><br />
Phone:</br>
    0657-2373407(O)<br />
	0657-2373392 (O)<br />
0657-237-4108 (O)<br />
	0657-2373246(Fax)<br /><br />
    <table style="border: 1px solid black; height: 30px; width:200px;  padding:15px; text-align:center;  background-color:#0099CC;"><tr><td><a href="director/messages.php"><font color="white" >Messages from the Director</font></a></td></tr></table>
<a href="../governance/dirhistory.php" style="">Previous Directors</a>
</p>
</div></div>

<div class="newpanel">
<div style="font-family:Geneva, sans-serif,Tahoma;
	word-spacing:5px;
	font-size:20px;
	color:#109aad;
	text-align:left;
">
  <span>Road Map for NIT Jamshedpur</span>
</div>
<div class="pagecontent">

	<span class="pagesubheading">Objectvies</span>
	
    <img  src="<?php echo $root?>images/h2.png" width="100%" />
    <ul><li>Survival</li>
	<li>Growth</li>
	<li>Social responsibility</li>
	<li>Financial management</li></ul>	<p></br></p>

<span class="pagesubheading">Vision 2022</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	<p>
    	NIT Jamshedpur will be one of the leading Institutes in the world for its academic excellence and to enhance the economic growth of the society  </p><p></br></p>
    
    <span class="pagesubheading">Mission</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	<ul>
    	<li>Quest for quality of education </li>
<li>Quest for growth of the Institute</li>
<li>To establish NIT Jamshedpur as a recognized Institute of choice among students, parents and Industry</li>
<li>To establish NIT Jamshedpur as a recognized employer of choice among employees </li>
<li>Quest for economic growth of the society</li>
    </ul><p></br></p>
<span class="pagesubheading">Core Values</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
<ul><li>Good governance</li>
<li>Quality</li>
<li>Innovation</li>
<li>Involvement of people</li>
<li>Ethics and work culture</li></ul><p></br></p>
<span class="pagesubheading">Philosophy</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
<p>Do the right thing for the Institute, its people, the customer, and society as a whole</p><p></br></p>
<span class="pagesubheading"> Priorities for Academic Excellence</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
<ul><li>Development of Infrastructure </li>
<li>Exceptional faculty and students</li>
<li>Excellent research and teaching resources</li>
<li>Effective teaching and research</li>
<li>Good governance</li>
<ul><li>Process and procedures</li>
<li>Clear communication and policies</li>
<li>Transparent and fair processes</li>
<li>Supporting culture</li>
<li>Strong leadership</li></ul>
<li>Community welfare and economic development</li></ul>	
</div>


</div>
</div>
</div>
</div>
 <!--sidetab starts here-->


<div class="col2">   	 
                                                <?php include 'director/sidepanel.php';?>
											
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
