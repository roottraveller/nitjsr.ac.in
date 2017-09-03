
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
//code for redirecting the external links
if(strpos($row['link'],'http://')===false)
	$root1=$root;
else
	$root1='';
//external redirect code ends
				echo '<td><a href="'.$root1.$row['link'].'" target="_blank">'.$row['notification'].'</a>';
				
				echo '</td></tr>';
			}
			else {
				echo '<td><a href="'.$root.'uploads/index.php?id='.$row['no'].'&category=notifications">'.$row['notification'].'</a>';
				
				echo '</td></tr>';
			}
			$i++;
		}
	} else {
		echo "<tr><td>No New Notices at this time.</td></tr>";
	}
?>
</table>

</div>
</div>

 

</div>
<div class="col2" >
<!--sidetab starts here-->
<?php include $root.'sidepanel.php' ?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
