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
  <span>The Chairman</span>
</div> 

<div class="pagecontent">
<img src="<?php echo $root; ?>images/chairman.jpg" title="Dr. Virander S.Chauhan" alt="Chairman" class="pageimg img" style="width:220px;" /><p style="text-align:center; font-size:14px;">
<p></br>   
	Dr. Virander S.Chauhan<br /><br/>
    <b>Chairman</b><br />
	National Institue of Technology-Jamshedpur<br />
 Jharkhand- 831014<br /><br />

Director, ICGEB New Delhi Component<br />

International Centre for Genetic Engineering and Biotechnology<br />
Aruna Asaf Ali Marg<br />
110 067 New Delhi, India<br /><br />

E-mail:     <a href="mailto:virander@icgeb.res.in" class="pagelink">virander@icgeb.res.in</a><br />
Office tel: +91-11-26742317, 26741358/61, 26742357/60 (EPBX)<br />
Office fax: +91-11-26742316<br />
<br /><br />

    <a href="mailto:chairman@nitjsr.ac.in" class="pagelink"></a>
</p>
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
