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

<div id="bg" >

<?php include '../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>	Factors listed by the Committee :</span>
</div> 

<div class="pagecontent">
<p><b> The Factors listed by the Committee are outlined below:</b></p></br></br>
<p>1.Primary responsibility for curbing ragging rests with academic institutions themselves.</p>
<p>2.Primary responsibility for curbing ragging rests with academic institutions themselves.</p><p>3.
	Incentives should be available to institutions for curbing the menace and there should be disincentives for failure to do so.</p><p>4.
	Enrolment in academic pursuits or a campus life should not immunize any adult citizen from penal provisions of the laws of the land.</p><p>5.
	Ragging needs to be perceived as failure to inculcate human values from the schooling stage.</p><p>6.
	Behavioural patterns among students, particularly potential ‘raggers’, need to be identified.</p><p>7.
	Measures against ragging must deter its recurrence.</p><p>8.
	Concerted action is required at the level of the school, higher educational institution, district administration, university, State and Central Governments to make any curb effective.</p><p>9.
	Media and the Civil Society should be involved in this exercise.</p>





</div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../raggingsidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../footer.php' ?>
<!-- footer ends here -->

</body></html>
