
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
  <span>All Events</span>
</div>
<div class="pagecontent">

<table class="pagetablecontent" align="center">
<tr class="tablehead"><td>Event</td><td>Date</td></tr>
	
<?php 
$sql="select * from events order by event_date asc;";
//echo $sql;
$result = mysql_query($sql);
$i=0;
$flag=0;
while($row = mysql_fetch_array($result))
{
		if(date('d-m-Y',strtotime($row['event_date']))==date('d-m-Y',strtotime($row['event_end_date'])))
		{
		if($i%2==0)
				echo "<tr class='tabledark'><td><a name=\"".$row['id']."\" id=\"".$row['id']."\"></a>".$row['event']."</td><td> ".date('d-m-Y',strtotime($row['event_date']))."</td></tr>";
		else
				echo "<tr class='tablelight'><td><a name=\"".$row['id']."\" id=\"".$row['id']."\"></a>".$row['event']."</td><td>".date('d-m-Y',strtotime($row['event_date']))."</td></tr>";
		$i++;
		}
		else
		{
			if($i%2==0)
				echo "<tr class='tabledark'><td><a name=\"".$row['id']."\" id=\"".$row['id']."\"></a>".$row['event']."</td><td>".date('d-m-Y',strtotime($row['event_date']))." to ".date('d-m-Y',strtotime($row['event_end_date']))."</td></tr>";
		else
				echo "<tr class='tablelight'><td><a name=\"".$row['id']."\" id=\"".$row['id']."\"></a>".$row['event']."</td><td>".date('d-m-Y',strtotime($row['event_date']))." to ".date('d-m-Y',strtotime($row['event_end_date']))."</td></tr>";
		$i++;
		}
		
	
}

?>
</table>
</div>
</div>

 

</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
