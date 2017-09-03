<?php
error_reporting(0);
$root='../';
if(!$_GET['dept'])
{
	header("Location:".$root."department/index.php");
}
include 'auth.php';
$dept=$_GET['dept'];
$page=$_GET['page'];

$objResult = sprintf("select * from departments where dept='%s'",
    		mysql_real_escape_string($dept));
			$result=mysql_query($objResult);
			if(!mysql_num_rows($result)){
				header("Location:".$root."department/index.php");
			}
			while($row = mysql_fetch_array($result))
			{
				$title=$row['title'];
                                
				
				
			}
			
						
			
			$objResult = sprintf("select * from contact where DEPT_ID='%s' && (DESIG='Professor' || DESIG='Professor & Head') && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql1=mysql_query($objResult);
			$objResult = sprintf("select * from contact where DEPT_ID='%s' && (DESIG='Associate Professor & Head' || DESIG='Associate Professor') && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql0=mysql_query($objResult);

$objResult = sprintf("select * from contact where DEPT_ID='%s'  && DESIG='Assistant Professor' && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql3=mysql_query($objResult);
			$objResult = sprintf("select * from contact where DEPT_ID='%s'  && DESIG='Assistant Professor (on contract)'  && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql4=mysql_query($objResult);
			$objResult = sprintf("select * from contact where DEPT_ID='%s'  && DESIG='Lecturer' && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql5=mysql_query($objResult);
						$objResult = sprintf("select * from contact where DEPT_ID='%s'  && DESIG='Lecturer (on contract)' && FLAG = '1' order by FNAME",
    		mysql_real_escape_string($dept));
			$sql6=mysql_query($objResult);			
			?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="" />
<meta http-equiv="contact" content="" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title>  
<script type="text/javascript">
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
  <span style="text-transform:none;">Department of <?php echo $title;?></span>
</div>
<div class="pagecontent">
<table class="pagetablecontent_new" border="0" height="40px"width="97.8%">
	<tr class="tablehead" align="left">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Faculty</b></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Areas of Interest</b></td>	        
    </tr>
</table>
<p></br></p>
<?php $i=0; ?>

<?php  while ($row = mysql_fetch_array($sql100) ){?>
 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
 <?php echo $row['DESIG'] ; ?><?php echo "</br>"; ?>
  <?php echo $row['PHONE']; ?><?php echo "</br>"; ?>
<a href="mailto:<?php echo $row['E_MAIL']; ?>
"><?php echo $row['E_MAIL']; ?><?php echo "</br></div>"; ?>
</a>
<p></br></p>


<?php
$i++;
}?>
<?php  while ($row = mysql_fetch_array($sql1) ){?>
 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>

<?php
$i++;
}?>

<?php  while ($row = mysql_fetch_array($sql0) ){?>

 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>
<?php  while ($row = mysql_fetch_array($sql2) ){?>

 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>
<?php  while ($row = mysql_fetch_array($sql3) ){?>

 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>
<?php  while ($row = mysql_fetch_array($sql4) ){?>


 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>
<?php  while ($row = mysql_fetch_array($sql5) ){?>


 <?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>
<?php  while ($row = mysql_fetch_array($sql6) ){?>
<?php 
$usr=$row['USER_ID'];
 $img = sprintf("select path from qual where USER_ID='%s'",
    		mysql_real_escape_string($usr));
			$imgresult=mysql_query($img);
			$imgrow=mysql_fetch_array($imgresult);
			$path=$imgrow['path'];
?>

 <a href="<?php echo $row['PROFILE'] ; ?>" class="facultybox" title="Click to view Profile"><div class="facultyimage"><img src="<?php echo $path; ?>"  alt="" width="100px" height="110px"></img></div><div class="facultyleft"><?php echo "</br>"; ?><?php echo ($row['PRENAME'] . ' ' . $row['FNAME'] . ' ' . $row['LNAME']);?><?php echo "</br>"; ?>
<div class="facultytextboxl">
<?php echo $row['DESIG'] ; ?>
<?php if($row['DESIG']) echo "</br>"; ?>
<?php  echo $row['PHONE']; ?>
<?php if($row['PHONE']) echo "</br>"; ?>
<?php echo $row['E_MAIL']; ?>
<?php if($row['E_MAIL']) echo "</br>"; ?></div></div>
<div class="facultyright">
<div class="facultytextboxr">
<?php 
$interestresult = sprintf("select Details from faculty where USER_ID='%s' && Type='RESEARCH' order by S_NO",
    		mysql_real_escape_string($usr));
			$result12=mysql_query($interestresult);
$num_rows = mysql_num_rows($result12);
$j=1;
?>
<?php while ($j<$num_rows) {?>
<?php
$row = mysql_fetch_array($result12);
	echo $row['Details'];
	echo ',';

$j++;
}
$row = mysql_fetch_array($result12);
echo $row[Details];
?>
</div>
</div>
</a><p></br></p>
<?php
$i++;}?>		
</div>
</div>
</div>
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>

