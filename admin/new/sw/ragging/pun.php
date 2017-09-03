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

<div id="bg" >

<?php include '../../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>	Punishment against ragging</span>
</div> 

<div class="pagecontent"><p>
In the light of the UGC Regulations on ragging you are informed hereby that if you are found to be indulged in any form of ragging, Institute shall take stern action without informing you. The punishment awarded by the institute may lead to :</p></br></br><p><b>
1.	Expulsion from the Institute</b></p><p><b>
2.	Debarment from the semester for one year.</b></p><p><b>
3.	Debarment from Hostel </b></p><p><b>
4.	Debarment from campus placement </b></p><p><b>
5.	Debarment from entry in the campus</p></b><p><b>
6.	Lodging FIR without any prior information to the Parent/Guardian or the student for further necessary action as per rules by the competent authority.</p></b><p><b>
7.	Withholding scholarship / financial aid from any organization and its recovery as well obtained earlier.</p></b><p><b>
8.	Collective punishment as per decision of the disciplinary committee </p></b><p><b>
9.	Fine ragging between Rs.25,000/-(Rupees Twenty Five Thousand) to Rs.1,00,000/-(Rupees One lakh).</b></p>







</div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include 'raggingsidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../../footer.php' ?>
<!-- footer ends here -->

</body></html>
