<?php
error_reporting(0);
$root='../../../';
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

<?php include '../../../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>	NSS GROUP LEADERS </span>
</div> 

<div class="pagecontent">

<table class="pagetablecontent_new" border="0"height="740px" align="center" width="100%">
	<tr class="tablehead">
            <td>Sl. No.</td>
            <td>NAME</td>	
            <td> BRANCH </td>
            <td> ROLL NO </td>
			<td>NSS GROUP NO</td>
			<td> POST </td>
    </tr>
		<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>1.</td>
            <td>Ashtosh kumar Aman </td>
			<td>ME</td>
            <td>141/10</td>
			<td>NSSME101</td>
            <td>GROUP LEADER</td>
    </tr>
 	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>2.</td>
            <td>Birmani kr. Singh </td>
			<td>EEE</td>
            <td>148/10</td>
			<td>NSSEEE102</td>
            <td>GROUP LEADER</td>
    </tr>
 	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>3.</td>
            <td>B. Nagendra babu </td>
			<td>MME</td>
            <td>141/10</td>
			<td>NSSMME103</td>
            <td>GROUP LEADER</td>
    </tr>
 	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>4.</td>
            <td>Chandra Prakash </td>
			<td>CSE</td>
            <td>158/10</td>
			<td>NSSCSE104</td>
            <td>GROUP LEADER</td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>5.</td>
            <td>Bhawani Shankar Gautam </td>
			<td>CE</td>
            <td>138/10</td>
			<td>NSSCSE105</td>
            <td>GROUP LEADER</td>
    </tr> 
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>6.</td>
            <td>Priyaranjan </td>
			<td>ECE</td>
            <td>362/10</td>
			<td>NSSECE106</td>
            <td>GROUP LEADER</td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>7.</td>
            <td>Priyaranjan </td>
			<td>PIE</td>
            <td>88/10</td>
			<td>NSSPIE107</td>
            <td>GROUP LEADER</td>
    </tr>	
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>8.</td>
            <td>Anubhuti Kashyap </td>
			<td>PIE</td>
            <td>88/10</td>
			<td>NSSPIE108</td>
            <td> GIRLS GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>9.</td>
            <td>sujeet kumar </td>
			<td>ME</td>
            <td>232/11</td>
			<td>NSSME111</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>10.</td>
            <td>Sumit Sultania </td>
			<td>EEE</td>
            <td>140/11</td>
			<td>NSSEEE112</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>11.</td>
            <td>Vivek Ranjan </td>
			<td>MME</td>
            <td>597/11</td>
			<td>NSSMME113</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>12.</td>
            <td>Rishikesh Maurya </td>
			<td>CSE</td>
            <td>260/11</td>
			<td>NSSCSE114</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>13.</td>
            <td>P.Naveen kumar</td>
			<td>CE</td>
            <td>543/11</td>
			<td>NSSCE115</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>14.</td>
            <td>K. Vinod Kumar </td>
			<td>ECE</td>
            <td>526/11</td>
			<td>NSSECE116</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>15.</td>
            <td>Rajesh kumar </td>
			<td>PIE</td>
            <td>550/11</td>
			<td>NSSPIE117</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>16.</td>
            <td>Preeti kumari </td>
			<td>ME</td>
            <td>364/11</td>
			<td>NSSECE111</td>
            <td> GIRLS GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>17.</td>
            <td>Prabhat prakash</td>
			<td>ME</td>
            <td>453/12</td>
			<td>NSSME121</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>18.</td>
            <td>Anand Raj</td>
			<td>EEE</td>
            <td>209/12</td>
			<td>NSSEEE122</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>19.</td>
            <td>Sudhanshu Ranjan</td>
			<td>MME</td>
            <td>479/12</td>
			<td>NSSMME123</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>20.</td>
            <td>Shivit Singh </td>
			<td>CSE</td>
            <td>093/12</td>
			<td>NSSCSE124</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>21.</td>
            <td>Rohit Raj</td>
			<td>CE</td>
            <td>419/12</td>
			<td>NSSCE125</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>22.</td>
            <td>K. Surya Sumanth</td>
			<td>PIE</td>
            <td>5/12</td>
			<td>NSSPIE126</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>23.</td>
            <td>Shubham kumar</td>
			<td>PIE</td>
            <td>317/12</td>
			<td>NSSPIE127</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>24.</td>
            <td>Farzana Kaushar</td>
			<td>MCA</td>
            <td>33/12</td>
			<td>NSSMCA128</td>
            <td>GROUP LEADER</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>25.</td>
            <td>Aditi kumari</td>
			<td>ME</td>
            <td>251/11</td>
			<td>NSSME121</td>
            <td> GIRLS GROUP LEADER</td>
    </tr>


</table>

</div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../../../sidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../../../footer.php' ?>
<!-- footer ends here -->

</body></html>
