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
<div class="pageheadingimg">
 <!-- <span>Disciplinary Committee</span>-->
</div> 

<div class="pagecontent">
<p>
<img class="page_images" src="images/disco.jpg" width="100%" /><p></br></p>
The institute has constituted a disciplinary committee to impart social and ethical values among the students and to maintain disciplined environment
for studies with a motive to produce law abiding and disciplined engineers for the nation.The understated are the guidelines for the students which must be followed:
</p></br></br>
<p><b>1.	All the students of  N.I.T. Jamshedpur are warned not to leave the Hostel/Classroom/Campus without the prior permission of the concerned Warden/HOD/Teacher.</b></p>
<p><b>2.	In particular, the Students are strictly prohibited from venturing viz. Kharkai river / Lake / Pond or similar places.</b></p>
<p><b>3.	The Students are hereby directed not to indulge in any type of intoxication.</b></p>
<p><b>4.	Further the Students are warned to abide by the rules and regulations of the Institute and the Hostels for maintaining discipline in the Institute Campus.</b></p></br></br>

<p><b>The Students who are found to violate the conduct rules of the Institute/Hostel, stern disciplinary action will be taken against those students.
</b></p></br></br><p><b>To download the rules regarding conduct and discipline.</b><a href="<?php echo $root;?>sw/attachment/Conduct_Dec_Rules.pdf" target="_blank"><b>Click Here</b></a>.</br>
<p><b>Given below are the 3 undertaking forms which must be filled in at the time of admission:</b></p>
<p>1.Undertaking of awareness of medical facilities at N.I.T. Jamshedpur.</p>
<p>2.Undertaking by the student for not owning and/or using motor driven vehicles on NIT Jamshedpur Campus(For Hostel residents only).</p> 
<p>3.Undertaking by the student for not taking Alcohol.</p></br></br>
<p>To Download the format of all the three Undertaking by the boarder/student in <b>PDF </b>format <a href="<?php echo $root;?>sw/attachment/1111111.pdf" target="_blank"><b>Click Here</b></a>.
<p>To Download the format of all the three Undertaking by the boarder/student in <b> DOC </b> format <a href="<?php echo $root;?>sw/attachment/123123.docx" target="_blank"><b>Click Here</b></a>.</br></br></p></div>
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
<?php include '../footer.php' ?>
<!-- footer ends here -->

</body></html>
