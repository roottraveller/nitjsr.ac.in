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
<span>Sports</span>
</div>
<div class="pagecontent">
<p><b><i>&ldquo; All work and no play makes Jack a dull boy &rdquo;</i></b></p>

<p>Keeping this in mind the college pays a lot of emphasis on the all round development of the students. There is an athletic ground, a cricket ground in the campus. Apart from this, each of the hostels are provided with equipments of various sports like Table Tennis, Lawn tennis, cricket, football, badminton, carom, chess, etc.</p>
<p>The students actively participate in these sports and there is a college team for cricket, football, basketball, badminton, volleyball, table tennis as well as athletics. They represent the college in various sports events held countrywide and make the college proud by bringing back scores of medals and trophies.</p>
<p>The college also organizes various sports events, the most important ones being The <b>Annual Sports Meet</b> and <b>East Zone Inter NIT Cricket Tournament</b>. While the former allows the students to showcase the athlete in them, the latter provides a healthy competition with other NITs of the east zone, e.g. NIT Durgapur, NIT Patna, NIT Rourkela,  etc.
</br></br><span class="backbtn"><a href="<?php echo $root;?>sw/activities/"> &lt;&ndash; Go Back</a></span></p>

</div>
<br />

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
