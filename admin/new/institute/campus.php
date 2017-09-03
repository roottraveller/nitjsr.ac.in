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


</head>
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>


<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheadingimg">
  <span>Vision and Mission</span>
</div>
<div class="pagecontent">
<img class="page_images" src="images/mission.jpg" width="100%" />
	<span class="pagesubheading">Vision</span>
	
    <img  src="<?php echo $root?>images/h2.png" width="100%" />
    <p>Establishing unique identity by development of high quality human and knowledge resources in the diverse areas of technologies to meet economic and social need of our nation and human society at large in self-sustained manner.</p>
	<p></br></p>
	<span class="pagesubheading">Mission</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	<p>
    	Our mission is to train and transform young men and women into thinking engineers, technologists and scientists who are motivated by a passion for professional excellence, driven by human values and proactively engaged in the betterment of the society. </p>
    
    <!--<span class="pagesubheading">Objectives of the Institution</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	<ul>
    	<li>To impart quality education in various areas of applied sciences at the undergraduate and postgraduate levels at par with best in the world and also to include values in the students which will sensitize them to serve the needs of the society.</li>
        <li>To further the advancement of knowledge through the conduct of basic applied research in pure and applied sciences and to disseminate and transfer the knowledge so generated for the benefit of Indian industry and the other user sectors.</li>
        <li>To develop counting education programs and prepare instructional resource material in the conventional as well as the video and the computer based modes for training of personnel and undertaking consultancy projects.</li>
        <li>To develop strong collaboration links with other academic and research institutions in the country and abroad.</li>
    </ul>-->
	
</div></div></div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<!--sidetab ends--> 


<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
