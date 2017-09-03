<?php
error_reporting(0);
$root='../';
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
  <span>Previous Directors</span>
</div>
<div class="pagecontent">
<table class="pagetablecontent" border="0px" height="400px" width="100%">
<tr class="tablehead">  
  <td>Name</td>
  <td>From</td>
  <td>To</td>
  </tr>
  <tr class="tablelight">
  <td>Prof. Rambamu Kodali</td>
  <td>03-08-2012</td>
  <td>continue</td>
  </tr>
  <tr class="tabledark">
  <td>Prof. Rajnish Srivastava</td>
  <td>05-08-2008</td>
  <td>03-08-2012</td>
  </tr>
  <tr class="tablelight">
  <td>Prof. S.K. Sarangi (I/C)</td>
  <td>08-06 2008</td>
  <td>04-08-2008</td>
  </tr>
  <tr class="tabledark">
  <td>Prof. A. Mishra (I/C)</td>
  <td>15-08-2006</td>
  <td>07-06-2008</td>
  </tr>
  <tr class="tablelight">
  <td>Prof. G. Panda</td>
  <td>10-11-2005</td>
  <td>14-08-2006</td>
  </tr>
  <tr class="tabledark">
  <td>Prof. S.K. Mukherjee (I/C)</td>
  <td>28-03-2005</td>
  <td>09-11-2005</td>
  </tr>
  <tr class="tablelight">
  <td>Prof. D. Bhattacharya</td>
  <td>01-07-2003</td>
  <td>27-03-2005</td>
  </tr>
  <tr class="tabledark">
  <td>Prof. A. Mishra (I/C)</td>
  <td>27-12-2002</td>
  <td>30-05-2003</td>
  </tr>
  </table>
</div>
</div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<!--sidetab ends--> 
<?php $root='../';?>
<!--footer starts here -->
<div class="clear"></div>
</br>
<?php include '../footer.php'?>
</body>

</html>
