<?php
error_reporting(0);
$root='../';
?>
<?php
error_reporting(0);
$dbhost='localhost';
					$dbuser='root';
					$dbpass='nitjsracin';
					$obj=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
					mysql_select_db('nit', $obj);
					if(!$obj)
					{
						echo "an error occured while connecting";
						exit;
					}



$objResult = sprintf("select * from contact_directory where DEPT='Academic Section' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql1=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Academic Section' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql2=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Account Section' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql3=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Account Section' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql4=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Training And Placement Cell' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql5=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Training And Placement Cell' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql6=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Guest House' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql7=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Guest House' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql8=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Dispensary' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql9=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Dispensary' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql10=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Computer Centre' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql11=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Computer Centre' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql12=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Central Library' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql13=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Central Library' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql14=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='TEQIP Cell' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql15=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='TEQIP Cell' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql16=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Workshop' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql17=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Workshop' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql18=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Vehicle Section' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql19=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Vehicle Section' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql20=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Darwans' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql21=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Darwans' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql22=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Estate Section' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql23=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Estate Section' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql24=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='AP Section and Gymkhana' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql25=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='AP Section and Gymkhana' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql26=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Electrical Works and Maintenance' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql27=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Electrical Works and Maintenance' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql28=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Civil Work and Maintenance' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql29=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Civil Work and Maintenance' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql30=mysql_query($objResult);
			$objResult = sprintf("select * from contact_directory where DEPT='Central Store and Purchase' && DESIG!='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql31=mysql_query($objResult);
$objResult = sprintf("select * from contact_directory where DEPT='Central Store and Purchase' && DESIG='Supporting Staff' ",
    		mysql_real_escape_string($dept));
			$sql32=mysql_query($objResult);
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
<div class="pagecontent">

<?php $i=0; $j=0; $k=0;$a=0;?>

<?php  while ($row = mysql_fetch_array($sql1) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Academic Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql2) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Academic Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql3) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Accounts Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql4) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Academic Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql5) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Training &amp; Placement Cell</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql6) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Training and Placement Cell</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	
	<?php  while ($row = mysql_fetch_array($sql7) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Guest House</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql8) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Guest House</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql7) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Guest House</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql8) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Guest House</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql9) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Dispensary</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql10) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Dispensary</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql11) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Computer Centre</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql12) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Computer Centre</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	
	
	<?php  while ($row = mysql_fetch_array($sql13) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Central Library</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql14) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Central Library</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
		<?php  while ($row = mysql_fetch_array($sql15) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>TEQIP Cell</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql16) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>TEQIP Cell</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql17) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Workshop</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql18) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Workshop</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql19) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Vehicle Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql20) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Vehicle Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
		<?php  while ($row = mysql_fetch_array($sql19) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Vehicle Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql20) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Vehicle Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0" align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>	<?php  while ($row = mysql_fetch_array($sql21) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Darwans</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql22) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Darwans</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	
	<?php  while ($row = mysql_fetch_array($sql23) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Estate Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql24) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Estate Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql23) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Estate Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql24) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Estate Section</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql25) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>AP Section and Gymkhana</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql26) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>AP Section and Gymkhana</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql27) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Electrical Works and Maintenance</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql28) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Electrical Works and Maintenance</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql29) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Civil Work and Maintenance</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql30) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Civil Work and Maintenance</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	<?php  while ($row = mysql_fetch_array($sql31) ){?>

<?php
$j++;$a++;
if($a==1)
{
/*echo('<div class="main_content">');*/
echo('<div class="pageheading">');
  echo('<span>Central Store and Purchase</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}
if($j==1)
{
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
</table>



<?php  while ($row = mysql_fetch_array($sql32) ){?>

<?php
$k++;$a++;
if($a==1)
{
/*echo('<div class="main_content">')*/;
echo('<div class="pageheading">');
  echo('<span>Central Store and Purchas</span>');
echo('</div>');
/*echo('<div class="pagecontent">');*/
}

if($k==1)
{
echo('<span class="pagesubheading">Supporting Staff</span>');
echo('<img src="../images/h2.png" width="100%" />');
echo('<table class="pagetablecontent" border="0"  align="center">');
	echo('<tr class="tablehead">');
    	echo('<td><span> Name  </span></td>');
        echo('<td>Contacts</td>');
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
  <td><span> <?php echo ($row['FNAME'] . ' ' . $row['LNAME']);?></br><?php echo $row['DESIG'] ; ?>  </span></td>
  <td><?php echo $row['CONTACT'] ; ?></td>
  
</tr>




<?php
$i++;
}?>
<?php $a=0;$j=0;$k=0;?>


	
    
    
    </table>
	
<span class="backbtn"><a href="<?php echo $root;?>contact/"> &lt;&ndash; Go Back</a></span>    


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
