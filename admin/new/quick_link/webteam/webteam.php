<?php
error_reporting(0);
$root='../../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

 <link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/style1.css" />  
<link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/reset.css" />      		               
														

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
  <span>Web Team</br></span>
</div>
<div class="pagecontent">
<p></br></p>
<div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/rrsuman_cse.jpg" alt="" height="100px" width="100px"></img></div></br>Mr. Rajiv Ranjan Suman</br>Prof. Incharge, Website</br>08434765977</br>webmaster@nitjsr.ac.in
</div>
	<div class="webteamboxr"><div class="deptimg"><img src="webteam_images/bmondal_cse.jpg"" alt="" height="100px" width="100px"></img></div></br>Mr. Bhaskar Mondal</br>Coordinator, Website</br>8797877789</br>webmasternitjsr@gmail.com</br><p></br></p>
</div>
<p></br></p>
<div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/DSCF7523.jpg" alt="" height="100px" width="100px"></img></div></br>Mr. Saurabh Singh Thakur</br>Member, Website</br>8797022904</br>webmaster@nitjsr.ac.in
</div>
<div class="webteamboxr"><div class="deptimg"  ><img src="webteam_images/sks.jpg" alt="" height="100px" width="100px"></img></div></br>Mr. Sunil Kumar Singh</br>Member, Website</br>9934128803</br>webmaster@nitjsr.ac.in
</div>	
<p></br></p>	
<div class="webteamboxl"><div class="deptimg"><img src="webteam_images/Profile pic2.jpg"" alt="" height="100px" width="100px"></img></div></br>Mr. Rajesh Duvvuru</br>Member, Website</br>9966720920</br>webmasternitjsr@gmail.com</br><p></br></p>
</div>
 
	<div class="webteamboxr"><div class="deptimg"><img src="webteam_images/not_available.jpg"" alt="" height="100px" width="100px"></img></div></br>Mrs. Suprita Das</br>Member, Website</br></br>webmasternitjsr@gmail.com</br><p></br></p>
</div>
<p></br></p>
<div class="pageheading">
  <span>Students Team</br></span>
</div>	  
<p></br></p>	
 <div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/sandipan.jpg" alt="" height="100px" width="100px"></img></div></br>Sandipon Mukherjee</br>CSE 2011 Batch</br>9507938587</br>sandipan_says@yahoo.in
</div>
	<div class="webteamboxr"><div class="deptimg"><img src="webteam_images/mayank.jpg"" alt="" height="100px" width="100px"></img></div></br>Mayank Kumar</br>CSE 2011 Batch</br>9939711004</br>mayank.cse.nitjsr@gmail.com</br><p></br></p>
</div>
<p></br></p>
<div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/apurwa.jpg" alt="" height="100px" width="100px"></img></div></br>Apurwa Rani</br>CSE 2011 Batch</br>raniapurwa@gmail.com
</div>
	<div class="webteamboxr"><div class="deptimg"><img src="webteam_images/rohit.jpg"" alt="" height="100px" width="100px"></img></div></br>Rohit Mishra</br>CSE 2011 Batch</br>8987691671</br></br><p></br></p>
</div>
<p></br></p>
<div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/riya.jpg" alt="" height="100px" width="100px"></img></div></br>Riya Prasad</br>CSE 2011 Batch</br>
</div>
	<div class="webteamboxr"><div class="deptimg"><img src="webteam_images/ashutosh.jpg"" alt="" height="100px" width="100px"></img></div></br>Ashutosh Kumar</br>CSE 2011 Batch</br>8809137497</br></br><p></br></p>
</div>
<p></br></p>
<div class="webteamboxl"><div class="deptimg"  ><img src="webteam_images/rishikesh.jpg" alt="" height="100px" width="100px"></img></div></br>Rishikesh Maurya</br>CSE 2011 Batch</br>8434139908</br>rishi.nit.iim@gmail.com

<p></br></p>

</div>

<div class = "clear"></div></br>
<div class="pageheading">
  <span>Previous Webteam Student Members: </br></span>
</div>	  


<?php $i=0;?>
<table class="pagetablecontent"  border="0">
	<tr class="tablehead">
	<td>Name of Students</td><td>Batch</td><td>E-mail</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Nishant Kumar<br />
		(Student, ECE)</td><td>2008</td><td>nishantkumar35@gmail.com</td>
	</tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Md. Shahnawaz Alam<br />
		(Student, CSE)</td><td>2008</td><td>shan92822@gmail.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Ankur Sahuwala<br />
		(Student, CSE)</td><td>2009</td><td>ankur_sahuwala@yahoo.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>D. Hariharan<br />
		(Student, CSE)</td><td>2009</td><td>mani.hariharan@gmail.com</td>
	</tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td>Ajit Kumar<br />
		(Student, CSE)</td><td>2009</td><td>ajitk1990@gmail.com</td>
	</tr>
</table>

</div>
</div>
</div>
<div class="col2">
<?php include $root.'sidepanel.php'?>
</div>

<!--sidetab ends--> 
<!--footer starts here -->
<div class="clear"></div>
</br>
<?php include $root.'footer.php'?>
</body>

</html>

