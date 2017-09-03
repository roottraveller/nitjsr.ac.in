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
  <span>Right to Information</span>
</div>
<div class="pagecontent">


<table class="pagetablecontent" border="0" align="center" style="width:720px;">
<tr class="tablehead">
                <td style="width:350px">Name</td>
		<td>Position</td>
		<td style="width:180px">Email-id</td>
		<td>Contact Details</td>
    </tr>
	<tr class="tablelight">
    	<td>Prof. Shalendra Kumar</br>Registrar (i/c)</td>
		<td>CPIO, Professor In-charge</br></td>
		<td><a href="mailto:registrar@nitjsr.ac.in
">registrar@nitjsr.ac.in
</a></td>
		<td>
+91-657-2373629<br/>+91-657-237-4124<br/>
                    +91-657-237-4143<br/>
                    +91-9431347117</td>
     </tr>
	
	
<tr class="tabledark">
    	<td>Shri Ram Pravesh Prasad</br>Asst. Registrar, Establishment</td>
		<td>Public Information Officer, Establishment</td>
		<td><a href="mailto:rpprasad.adm@nitjsr.ac.in">rpprasad.adm@nitjsr.ac.in</a></td>
		<td>+91-9431330645<br/>
                    +91-657-237-4224</td>
     </tr>
	 <tr class="tablelight">
    	<td>Dr. Danish Ali Khan</br>Deputy Registrar, Academic</td>
		<td>Public Information Officer,(Academic and Students)</td>
		<td><a href="mailto:dakhan.ca@nitjsr.ac.in">dakhan.ca@nitjsr.ac.in</a></td>
		<td>+91-657-237-4120<br/>
                    +91-9835546792
                </td>
     </tr>
	  <tr class="tabledark">
    	<td>Dr. Neeta Bharti</br>Deputy Registar, Accounts </td>
		<td>Public Information Officer, Finance and Accounts</td>
		<td><a href="mailto:neetabharti.lib@nitjsr.ac.in">neetabharti.lib@nitjsr.ac.in</a></td>
		<td>+91-657-237-4144<br/>
                    +91-9886711008  
                </td>
     </tr>
	 
	 
	  <tr class="tablelight">
    	<td>Prof. Madan Mohan Prasad</br>Dean (Planning &amp; Development) </td>
        <td>Public Information Officer, Civil Works</td>
        <td><a href="mailto:dean.pd@nitjsr.ac.in
">dean.pd@nitjsr.ac.in
</a></td>
		<td> +91-9431372861</td>
   	</tr>
	
	<tr class="tabledark">
    	<td>Mr. Amit Prakash</br>PI, Electrical Works</td>
        <td>Public Information Officer, Electrical Works</td>
        <td><a href="mailto:amitprakash.ece@nitjsr.ac.in
">amitprakash.ece@nitjsr.ac.in
</a></td>
		<td>+91-9431905737</td>
   	</tr>
	<tr class="tablelight">
    	<td>Store Officer</td>
			<td>Public Information Officer, Store and Procurement</td>
            <td></td>
            <td></td>
    </tr>
	
	<tr class="tabledark">
    	<td>Dr. Mrityunjay Kumar Sinha</br>Associate Dean (Research &amp; Consultancy)</td>
			<td>Public Information Officer, Research and Consultancy</td>
            <td><a href="mailto:mksinha.me@nitjsr.ac.in">mksinha.me@nitjsr.ac.in</a></td>
            <td>0657-237-4022</td>
    </tr>
	
	 <tr class="tablelight">
    	<td>Prof. Subodh Behari Lal Seksena</br>Dean (Industry &amp; Alumni Relations)</td>
        <td>Public Information Officer, Industry &amp; Alumni Relations</td>
        <td><a href="mailto:dean.ia@nitjsr.ac.in">dean.ia@nitjsr.ac.in</a></td>
		<td> +91-9431112721</td>
    </tr>
	
	
	














	</table>

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
