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
  <span>Affidavit & Undertakings</span>
</div> 

<div class="pagecontent">
<p><b>The following are the format of the undertakings by the student and parents:</b></p></br></br>
<p>1.To Download the format of Undertaking by the boarder/student <a href="<?php echo $root;?>sw/attachment/Undertakin_by_the_boarder.pdf" target="_blank"><b>Click Here</b></a>.</p></br>
<p>2.To Download the format of Undertaking by the boarder/student signed by the parent <a href="<?php echo $root;?>sw/attachment/Undertakin_from_the_student.pdf" target="_blank"><b>Click Here</b></a>.</p>
<p><b>The following are the format of the affidavit by the student and parents:</b></p>
<p>1.To Download the format of Undertaking by the boarder/student in <b> PDF </b> format <a href="<?php echo $root;?>sw/attachment/abc.pdf" target="_blank"><b>Click Here</b></a>.
<p>2.To Download the format of Undertaking by the boarder/student in <b>DOC </b> format<a href="<?php echo $root;?>sw/attachment/def.doc" target="_blank"><b>Click Here</b></a>.
<p>3.To Download the format of Undertaking by the parent/guardian in <b> PDF </b> format <a href="<?php echo $root;?>sw/attachment/ijk.pdf" target="_blank"><b>Click Here</b></a>.</p>
<p>4.To Download the format of Undertaking by the parent/guardian in <b> DOC </b> format <a href="<?php echo $root;?>sw/attachment/lmn.doc" target="_blank"><b>Click Here</b></a>.</p></br></br></p></br></p></br>
</br></br></div>
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
