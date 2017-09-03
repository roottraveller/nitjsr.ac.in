
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
<div class="pagecontent"style="width:100%">
<a href="index.php"><img src="images/banner.jpg"/></a>
    
	<!--Click here to view <a href="../governance/dirhistory.php" style="">Previous Directors</a>-->
</p>

</div>
<div class="pagecontent" style="width:73%">
<p><span class="pageheadingimg">Publications</span>
</br></br>
	
	<b>Research Publications (International and National): Around 200</b></br></br>
 <ul>
     <li>Number of publications in peer-reviewed / referred (from 2003 to 2012): 97 </li>
     <li>International Journal: 55</li>
     <li>National Journal: 09</li>
     <li>International Conference:20</li>
     <li>National Conference: 13</li>
</ul><br>
<b>Recent Publications(2012)</b></br></br>
<ul>
<strong></strong>
<li>Ramesh V. and Kodali R. (2012), "A decision framework for maximizing lean manufacturing performance" International Journal of Production Research, Vol: 50, No.8, pp.2234-2251.</li>
<li>Soni G. and Kodali R. (2012), "Evaluating reliability and validity of lean, agile and agile supply chain constructs in Indian manufacturing industry", Production Planning and Control, DOI:10.1080/09537287.2011.642207</li>
<li>Sharma M and Kodali R (2012), "Validity and reliability of proposed framework of manufacturing excellence in the Indian industry", Production Planning and Control, Vol.23, No.5, pp. 333-353.</li>
<li>Anand G. and Kodali R. (2012), "An application of analytic hierarchy process for the selection of a methodology to improve the product development process", Journal of Modelling in Management, Vol. 7, No. 1, 2012, pp. 97-121.</li>
<li>Anand G, Kodali R and  Chandra Sekhar D. (2012), "An application of analytic network process for selection of a plant location: a case study", International Journal of Services and Operations Management, Vol. 12, No. 1, pp. 35-66.</li>
</ul></br>
 <b>2011</b></br></br>
 <ul>
<li>Sangwan K.S and Kodali R. (2011), "An intelligent hybrid model for the integrated design of cellular manufacturing systems"  International Journal of Services and Operations Management, Vol. 9, No. 2, pp. 202-226.</li>
<li>Anand, G., Kodali, R. and Kumar, B.S. (2011), "Development of analytic network process for the selection of material handling systems in the design of flexible manufacturing systems", Journal of Advances in Management Research, Vol. 8, No. 1, pp. 123-147.</li>
<li>Anand G. and Kodali R. (2011), "Design of lean manufacturing systems using value stream mapping and simulation – A case study ", Journal of Manufacturing Technology Management, Vol. 22, No. 4, 444-473.</li>
<li>Soni G. and Kodali R. (2011), "The strategic fit between 'competitive strategy' and 'suply chain strategy' in Indian manufacturing industry: An empirical approach", Measuring Business Excellence, Vol. 15, No: 2, pp. 70-89.</li>
<li>Soni G. and Kodali R., "A critical review of supply chain management content in empirical research", Business Process Management Journal, Vol.17, No.2, pp. 238-266.</li>
</ul>
</br>
</div>
</div>
</div>

 <!--sidetab starts here-->
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
