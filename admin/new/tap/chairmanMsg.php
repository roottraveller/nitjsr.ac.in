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
<div id ="wrapper_sec">


<div class="main_content">
<div class="pageheading">
  <span>Chairman's Message</span>
  
</div>

        	</br><b></br>To Download the Placement Brochure</b> <a href="<?php echo $root;?>tap/attachment/NIT_Jamshedpur_Brochure.pdf" target="_blank"><b>Click Here</b></a>.
<div class="pagecontent">
<p>NIT, Jamshedpur is reputed for its eclectic ambience which synthesizes rigorous academics and pulsating social, cultural and sports activities. NIT, Jamshedpur constantly strives through its academic programmes, research infrastructure, entrepreneurial initiatives and vigorous institute - industry partnership to enable students to keep abreast with the emerging technological areas and also be a part of the new multi-culktural environment which transcends frontiers.</p>
<p>NIT, Jamshedpur has achieved considerable success in its efforts to become one of the centres of excellence in the field of technical education in the country. Not only the courses here are structured to shape future technical leaders, but also to equip the students for working under exacting and stressful conditions in times of dire need.</p>
<p>Ours is an amalgam of excellent faculty, highly motivated and technically sound students and admirable infra structural facilities. Our sterling story is palpable through increasing number of aspirants for our institute, our unparalleled placements records, and our distinguished alumni across the world.</p>
<p>The commitment and dedication of our students for the betterment of the institute is veritably visible through the kaleidoscope of events and activities. It is my conviction that they will deliver even better in the future years.</p>
<p><b></br>Dr. Virander S.Chauhan</b><br />
		Chairman,<br />
        NIT Jamshedpur
        </p></div>
</div>
</div>
 <div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear">
</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
