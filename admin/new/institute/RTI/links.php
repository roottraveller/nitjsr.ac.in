<?php
error_reporting(0);
$root='../../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

 <link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/style1.css" />      		               
														

</head>


<body>
<!--head included here-->
<div id="bg">
<?php include $root.'header.php' ?>
<!--head inclusion ends--> 
</div> 
<!-- Stylesheet -->

<script>
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






<script type="text/javascript">
$(function() {
	
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>

<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">
  <span>Right to Information</span>
</div>
<div class="pagecontent">
<p><span class="pagesubheading">Important Links:</b></br></br></span>
<ul class="pagelists">
<li><a href="http://cic.gov.in/ "target="_blank">Central Information commission</a></br></li>
<li> <a href="http://righttoinformation.gov.in/"target="_blank">Right to Information (Information Service Portal)righttoinformation.gov.in</a></br></li>
 <li><a href="http://rti.gov.in/ "target="_blank">Right to Information (Information Service Portal) http://rti.gov.in/ </a></br></li>
 <li><a href="http://persmin.nic.in/RTI/WelcomeRTI.htm "target="_blank">http://persmin.nic.in/RTI/WelcomeRTI.htm </a></br></li>
 </ul>
 </p>
 
 









</p>
</div>
</div>
</div>
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<!--sidetab ends--> 

<!--footer starts here -->
<div class="clear"></div>
</br>
<?php include $root.'footer.php'?>
</body>

</html>
