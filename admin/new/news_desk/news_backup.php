
<?php
error_reporting(0);
define('isDOCTYPE',1375);
$root='../';
include $root.'login/admin/auth.inc.php'; 

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

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/innerpage.css" />

</head>
<body>
<div id="wrapper_top" >

<?php include $root.'header.php' ?>
</div>
<div id="wrapper" >
<!--sidetab starts here-->
<?php include $root.'sidebar.php' ?>

<!--sidetab ends-->


<div class="main_content">
<div class="pageheading">
  <span>All Notices</span>
</div>
<div class="pagecontent">

<table class="pagetablecontent" align="center" style="width:650px;">
<tr class="tablehead"><td>Notification</td></tr>
	
<?php 
	$result=mysql_query("SELECT * FROM notifications where status='1' ORDER BY time DESC");
	if(mysql_num_rows($result)){
		$i=0;
		while($row=mysql_fetch_array($result))
		{
			if($i%2==0)
				echo '<tr class="tablelight">';
			else 
				echo '<tr class="tabledark">';
			$link=preg_split('/[#]+/',$row['link']);
			if(count($link)==1)
			{
				echo '<td><a href="'.$root.$row['link'].'" target="_blank">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			else {
				echo '<td><a href="'.$root.'uploads/index.php?id='.$row['no'].'&category=notifications">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			$i++;
		}
	} else {
		echo "<tr><td>No New Notices at this time.</td></tr>";
	}
?>
</table>
<table class="pagetablecontent" align="center" style="width:650px;">
<tr class="tablehead"><td>Academics</td></tr>
	
<?php 
$result=mysql_query("SELECT * FROM academics where status='1' ORDER BY time DESC");
	if(mysql_num_rows($result)){
		$i=0;
		while($row=mysql_fetch_array($result))
		{
			if($i%2==0)
				echo '<tr class="tablelight">';
			else 
				echo '<tr class="tabledark">';
			$link=preg_split('/[#]+/',$row['link']);
			if(count($link)==1)
			{
				echo '<td><a href="'.$root.$row['link'].'" target="_blank">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			else {
				echo '<td><a href="'.$root.'uploads/index.php?id='.$row['no'].'&category=academics">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			$i++;
		}
	} else {
		echo "<tr><td>No New Notices at this time.</td></tr>";
	}
?>
</table>

</table>
<table class="pagetablecontent" align="center" style="width:650px;">
<tr class="tablehead"><td>Events and Happenings</td></tr>
	
<?php 
$result=mysql_query("SELECT * FROM conference where status='1' ORDER BY time DESC");
	if(mysql_num_rows($result)){
		$i=0;
		while($row=mysql_fetch_array($result))
		{
			if($i%2==0)
				echo '<tr class="tablelight">';
			else 
				echo '<tr class="tabledark">';
			$link=preg_split('/[#]+/',$row['link']);
			if(count($link)==1)
			{
				echo '<td><a href="'.$root.$row['link'].'" target="_blank">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			else {
				echo '<td><a href="'.$root.'uploads/index.php?id='.$row['no'].'&category=conference">'.$row['notification'].'</a>';
				if($row['new']) {
					echo  '<img src="'.$root.'images/new.gif" align="bottom" width="35" height="13">';
				}
				echo '</td></tr>';
			}
			$i++;
		}
	} else {
		echo "<tr><td>No New Notices at this time.</td></tr>";
	}
?>
</table>

</table>

</div>
</div>

 

</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
