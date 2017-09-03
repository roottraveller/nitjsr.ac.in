<?php
error_reporting(0);
$root='../';
if(!$_GET['dept'])
{
	//header("Location:".$root."department/index.php?dept=cse&page=home");
}
include 'auth.php';
$dept=$_GET['dept'];
$page=$_GET['page'];

$objResult = sprintf("select * from departments where dept='%s'",
    		mysql_real_escape_string($dept));
			$result=mysql_query($objResult);
			if(!mysql_num_rows($result)){
				header("Location:".$root."department/index.php?dept=cse&page=home");
			}
			while($row = mysql_fetch_array($result))
			{
				$title=$row['title'];
                                
				
				
			}
			
				
				
			$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='1' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0 ",
    		mysql_real_escape_string($dept));
			$sql1=mysql_query($objResult);
			
             $objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='2' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql2=mysql_query($objResult);

			$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='3' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql3=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='4' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql4=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='5' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql5=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='6' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql6=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='7' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql7=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='8' && COURSE='B.TECH' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql8=mysql_query($objResult);
			
			
			$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='1' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0 ",
    		mysql_real_escape_string($dept));
			$sql9=mysql_query($objResult);
			
             $objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='2' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql10=mysql_query($objResult);

			$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='3' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql11=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='4' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql12=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='5' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql13=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' && SEM='6' && COURSE='MCA' && (SUBTYPE='C' || SUBTYPE='LC') order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql14=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&  COURSE='B.TECH' && SUBTYPE='E1' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql15=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='E2' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql16=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='E3' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql17=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='E4' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql18=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='E5' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql19=mysql_query($objResult);
			$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='E6' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql20=mysql_query($objResult);
$objResult = sprintf("select * from curriculum where DEPT='%s' &&   COURSE='B.TECH' && SUBTYPE='F' order by SL_N0",
    		mysql_real_escape_string($dept));
			$sql21=mysql_query($objResult);
			
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



<?php $i=0;$j=0;?>

<?php  while ($row = mysql_fetch_array($sql1)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester I</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</td></b>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;
$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql2)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester II</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;
$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql3)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester III</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>

<?php  while ($row = mysql_fetch_array($sql4)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester IV</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql5)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester V</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql6)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester VI</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>

<?php  while ($row = mysql_fetch_array($sql7)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester VII</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql8)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester VIII</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='B.TECH')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql15)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective I</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql16)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective II</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>


</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql17)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective III</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql18)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective IV</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql19)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective V</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql20)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Elective VI</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php  while ($row = mysql_fetch_array($sql21)){?>
<?php

if($i==0)
{
echo('<span class="pagesubheading">Free Electives </span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Name</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td> 
</tr>



<?php
$i++;
$j++;
}

?>

</table>

<?php
$i=0;
?>
<?php $i=0;$j=0;?>

<?php  while ($row = mysql_fetch_array($sql9)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> MCA Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester I</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</td></b>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;
$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql10)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester II</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;
$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql11)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester III</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>

<?php  while ($row = mysql_fetch_array($sql12)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester IV</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql13)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester V</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>
<?php  while ($row = mysql_fetch_array($sql14)){?>
<?php
if($j==0)
{


echo('<ul>');
echo('<li> B.Tech. (Hons) Curricullum </li>');
echo('</ul>');


}
if($i==0)
{
echo('<span class="pagesubheading">Semester VI</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="facultytablecontent" style="width:650px;">');
echo('<tr class="tablehead">');
  echo('<td>Sl.No.</td>');
  echo('<td>Subject Code</td>');
  echo('<td>Subject Name</td>');
  echo('<td>L-T-P</td>');
  echo('<td>Credits</td>');
echo('</tr>');
}
if($i%2==0)
{

echo('<tr class="tabledark">');
}
else
{
echo('<tr class="tablelight">');
}
?>
  <td><?php echo $row['SL_N0'] ; ?></td>
  <td><?php echo $row['SUB_CODE'] ; ?></td>
  <td><?php echo $row['SUB_NAME']; ?></td>
  <td><?php echo $row['LTP'];?></td> 
  <td><?php echo $row['CREDIT'];?></td> 
</tr>

<?php $credit=$credit+$row['CREDIT'];
$course=$row['COURSE'];?>


<?php
$i++;
$j++;
}

?>
<?php

if($course=='MCA')
{
echo('<tr>');
echo('<td> </td>');
  echo('<td> </td>');
  echo('<td> </td>');
echo('<td><b>Total</b></td>'); 
  echo('<td><b>');
  echo $credit;
  echo('</b></td>'); 
echo('</tr>');
}
?>
</table>

<?php
$i=0;$credit=0;
?>






			
</div>
</div>

 

</div>
<div class="col2">
<?php
if (($dept=="chemistry")||($dept=="maths")||($dept=="humanities")||($dept=="physics"))
 include 'sidepanel2.php';
else
include 'sidepanel.php';
?>
</div>
<div class="clear"></div>
<div class="box5"style="align:left">
<table class="box4"  border="1px" border-color="#004e90"><tr><td><a href="index.php?dept=chemistry&page=home" title="Chemistry" >Chem</a></td><td><a href="index.php?dept=civil&page=home" title="Civil Engineering">Civil</a></td><td><a href="index.php?dept=cse&page=home" title="Computer Science &amp; Engineering">CSE</a></td><td><a href="index.php?dept=mca&page=home"title="Computer Applications">CA</a></td><td><a href="index.php?dept=eee&page=home"title="Electrical &amp; Electronics Engineering">EEE</a></td><td><a href="index.php?dept=ece&page=home"title="Electronics &amp; Communication Engineering">ECE</a></td><td><a href="index.php?dept=me&page=home"title="Mechanical Engineering">ME</a></td><td><a href="index.php?dept=maths&page=home"title="Mathematics">Maths</a></td><td><a href="index.php?dept=humanities&page=home"title="Humanities">HUM</a></td><td><a href="index.php?dept=meta&page=home"title="Metallurgical &amp; Metals Engineering">Meta</a></td><td><a href="index.php?dept=prod&page=home"title="Manufacturing Engineering">MFE</a></td><td><a href="index.php?dept=physics&page=home"title="Physics">Physics</a></td></tr></table>

</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>

