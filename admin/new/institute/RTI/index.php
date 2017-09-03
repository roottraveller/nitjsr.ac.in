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
<p><span class="pagesubheading">Filing of Application RTI Application Form:</b></br></br></span>
<ul><li>
	A person seeking information may file an application on form either in writing or by e-mail giving particulars of the information being sought.</li>
	<li>The application along with the requisite fee can be submitted in the form of Cash/Demand Draft/Bankers' Cheque. Demand Draft/Bankers' Cheque can be sent in favour of "Director, National Institute of Technology, Jamshedpur" payable at SBI, RIT Campus Branch, Jamshedpur, 831014.</li>
	<li>In case request is made by e-mail, the fee should be deposited within seven days. Non-receipt of fee will imply withdrawal of request.</li>
</ul><br>
<b><span class="pagesubheading">Important Information:</b><br><ul></span>
	<li>The Institute will make an endeavour to provide information sought within 30 days on payment of requisite fees.</li>
	<li>The time limit of providing information concerning life and liberty of a person is 48 hours.</li>
	<li>In case the information pertains to a third party, the time limit is 40 days.</li>
	<li>If no reply or information is received as above, it is deemed to have been rejected. The applicant will be intimated the reasons for rejection. </li>
	</ul></BR>
	<a href="form.pdf">Click here to download RTI application form</a>
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
