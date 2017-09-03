<?php
error_reporting(0);
$root='../';
?>
<?php include '../department/auth.php' ?>
<?php
if(!$_GET['id'])
{
	echo '<script type="text/javascript">document.location.href="../department/index.php?dept=cse&page=home";</script>';
}
$id=$_GET['id'];

$objResult = sprintf("select * from contact where USER_ID='%s'",
    		mysql_real_escape_string($id));
			$result=mysql_query($objResult);
			while($row = mysql_fetch_array($result))
			{
				$PRENAME=$row['PRENAME'];
				$FNAME=$row['FNAME'];
				$LNAME=$row['LNAME'];
				$DESIG=$row['DESIG'];
				$OFFICIAL_ADDRESS=$row['OFFICIAL_ADDRESS'];
				$PHONE=$row['PHONE'];
				$LAND_PH=$row['LAND_PH'];
				$E_MAIL=$row['E_MAIL'];
			}
$objResult = sprintf("select * from qual where user_id='%s'",
    		mysql_real_escape_string($id));
			$result1=mysql_query($objResult);
			while($row = mysql_fetch_array($result1))
			{
				$path=$row['path'];
				$qual=$row['qual'];
			    $dept=$row['dept'];
			}
			
			$qual=str_replace("\n", "<br />", $qual);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='ICP' order by S_NO",
    		mysql_real_escape_string($id));
			$result2=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='NJP' order by S_NO",
    		mysql_real_escape_string($id));
			$result3=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='NCP' order by S_NO",
    		mysql_real_escape_string($id));
			$result4=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='IJP' order by S_NO",
    		mysql_real_escape_string($id));
			$result5=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='STP' order by S_NO",
    		mysql_real_escape_string($id));
			$result6=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='WA' order by S_NO",
    		mysql_real_escape_string($id));
			$result7=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='VISION' order by S_NO",
    		mysql_real_escape_string($id));
			$result8=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='MISSION' order by S_NO",
    		mysql_real_escape_string($id));
			$result9=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='COREVAL' order by S_NO",
    		mysql_real_escape_string($id));
			$result10=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='COTAUGHT' order by S_NO",
    		mysql_real_escape_string($id));
			$result11=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($id));
			$result12=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='PUB' order by S_NO",
    		mysql_real_escape_string($id));
			$result13=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='MEM' order by S_NO",
    		mysql_real_escape_string($id));
			$result14=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='RESPONSIBILITIES' order by S_NO",
    		mysql_real_escape_string($id));
			$result15=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='BOOKREVIEW' order by S_NO",
    		mysql_real_escape_string($id));
			$result16=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='EXL' order by S_NO",
    		mysql_real_escape_string($id));
			$result17=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='AWD' order by S_NO",
    		mysql_real_escape_string($id));
			$result18=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='TRAINING' order by S_NO",
    		mysql_real_escape_string($id));
			$result19=mysql_query($objResult);
$objResult = sprintf("select * from faculty where USER_ID='%s' && Type='EXP' order by S_NO",
    		mysql_real_escape_string($id));
			$result20=mysql_query($objResult);
			$objResult = sprintf("select * from COURSE where ID='%s'  order by S_NO",
    		mysql_real_escape_string($id));
			$result21=mysql_query($objResult);
			$objResult = sprintf("select * from user where uid='%s' ",
    		mysql_real_escape_string($id));
			$result22=mysql_query($objResult);
			$objResult = sprintf("select * from faculty where USER_ID='%s' order by S_NO",
    		mysql_real_escape_string($id));
			$result25=mysql_query($objResult);
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

<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >


<div class="main_content">
<div class="pageheading">
<?php
if(!mysql_num_rows($result)){
?>
<span style="text-transform:capitalize;">Faculty Profile</span>
</div>  
<div class="pagecontent">
<p>The profile of the respected faculty member will be made available soon.</p>
<?php
}
else{
?>
  <span style="text-transform:capitalize;"><?php echo $PRENAME .' '. $FNAME . ' '. $LNAME; ?></span>
</div>  
<div class="pagecontent">
<img src="<?php echo $path; ?>" class="facultyimg"  />
<p style="float: left; width:auto"><b><?php echo $DESIG; ?></b>, <?php echo $dept; ?> Department<br /><br />

<?php echo $qual; ?>
</p>
<div class="clear"></div>
<table width="60%" >
	<tr>
    	<td>
        	Residential Address
        </td>
        <td>
        	<?php echo $OFFICIAL_ADDRESS;?>
        </td>
    </tr>
    <tr>
    	<td>
        	Phone Number
        </td>
        <td>
        	<?php echo $LAND_PH;?>
        </td>
    </tr>
    <tr>
    	<td>
        	Mobile Number
        </td>
        <td>
        	<?php echo $PHONE;?>
        </td>
    </tr>
    <tr>
    	<td>
        	E-mail
        </td>
        <td>
        	<a href="mailto:<?php echo $email;?>"  class="pagelink"><?php echo $E_MAIL;?></a>
        </td>
    </tr>
</table>
<?php while ($row = mysql_fetch_array($result22)) {

if($row['biodata']!=NULL)
{
?>
<a href="<?php echo $row['biodata'];?>">Click here to download BIOSKETCH</a>
</br>

<?
}}
?>

<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result12)) {?>
<?php
if($i==1)
{
	echo '<b>Area of Research Interest :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result20)) {?>
<?php
if($i==1)
{
	echo '<b>Professional Experience :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result14)) {?>
<?php
if($i==1)
{
	echo '<b>Membership in Professional Bodies :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result15)) {?>
<?php
if($i==1)
{
	echo '<b>Academic Responsibilities :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result13)) {?>
<?php
if($i==1)
{
	echo '<b>Publications :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result2)) {?>
<?php
if($i==1)
{
	echo '<b>International Conference Papers :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result5)) {?>
<?php
if($i==1)
{
	echo '<b>International Journal Papers :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result4)) {?>
<?php
if($i==1)
{
	echo '<b>National Conference Papers :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result3)) {?>
<?php
if($i==1)
{
	echo '<b>National Journal Papers :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result18)) {?>
<?php
if($i==1)
{
	echo '<b>Awards and Acheivements :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result6)) {?>
<?php
if($i==1)
{
	echo '<b>Short Term Programmes :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result7)) {?>
<?php
if($i==1)
{
	echo '<b>Workshops Attended :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result19)) {?>
<?php
if($i==1)
{
	echo '<b>Training (Vocational/Professional) :</b>';
	echo '<ol>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ol>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result11)) {?>
<?php
if($i==1)
{
	echo '<b>Courses Taught :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result16)) {?>
<?php
if($i==1)
{
	echo '<b>Books / Journals / Conference Reviews :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result8)) {?>
<?php
if($i==1)
{
	echo '<b>Vision :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result9)) {?>
<?php
if($i==1)
{
	echo '<b>Mission :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result10)) {?>
<?php
if($i==1)
{
	echo '<b>Core Values :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>
<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result17)) {?>
<?php
if($i==1)
{
	echo '<b>Academic Excellence :</b>';
	echo '<ul>';
}
?>
<li>
<?php
echo $row[Details];
?>
</li>
<?php $i++;}?>
</ul>

<?php $i=1;?>
<?php while ($row = mysql_fetch_array($result21)) {?>
<?php
if($i==1)
{
	echo '<b>Courses Handout:</b>';
	echo '<ul>';
}
?>
<li>
<?php
if($row['COURSEPDF']==NULL)
echo $row['COURSE'];
else
{
?>
<a href ="<?php echo $row['COURSEPDF']?>"><?php echo $row['COURSE']?></a>

<?php } ?>
</li>
<?php $i++;}?>
</ul>


<?php while ($row = mysql_fetch_array($result25)) {?>
<?php if(!(($row['Type']=='STP')|| ($row['Type']=='ICP') || ($row['Type']=='NJP') || ($row['Type']=='IJP') || ($row['Type']=='WA') || 
		($row['Type']=='VISION')|| ($row['Type']=='MISSION') || ($row['Type']=='COREVAL') || ($row['Type']=='COTAUGHT') || 
		($row['Type']=='RESEARCH') || ($row['Type']=='PUB')||($row['Type']=='MEM')||($row['Type']=='RESPONSIBILITIES')||($row['Type']=='BOOKREVIEW')||
		($row['Type']=='EXL')||($row['Type']=='AWD')||($row['Type']=='TRAINING')||($row['Type']=='EXP'))){?>
	<b><?php echo $row['Type'];?> :</b>
	<ul>
<li>
<?php
echo $row[Details];
?>
</li>

</ul>
<?php } ?>
<?php }?>
<?php }?>

<div class="clear"></div>
<span class="backbtn"><a href="javascript:history.back(-1)"> &lt;&ndash; Go Back</a></span>
</div> 

</div>
</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
