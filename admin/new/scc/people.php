<?php
error_reporting(0);
$root='../';
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
<title>NIT Jamshedpur | Student Councelling Center</title>  
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
<img class="pageimg img" src="img/poster5.gif" style="height: 350px" alt="Student Councelling Center"   title="Student Councelling Center"/><p></br></p>
<div class="pageheading">
  <span>Students Counselling Centre | The People</span>
</div><p></br></p>
<table class="pagetablecontent" border="2" style="width:680px;">
<?php $i=0;?>
  <tr class="tablehead">
    <td>Composition</td>
    <td>In-charge</td>
    <td>Email</td>
    <td>Mobile</td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td rowspan="3">Coordinators</td>
    <td>Dr. Chintalacheruvu Madhusudana Rao</td>
    <td><a href="mailto:madhu_chintalacheruvu@yahoo.co.in">madhu_chintalacheruvu@yahoo.co.in</a></td>
    <td>+91-7870344602</td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>Dr. Rina Sahu</td>
    <td><a href="mailto:rinasahu96@gmail.com">rinasahu96@gmail.com</a></td>
    <td>+91-9771420866</td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>Dr. Priyanka Tripathi</td>
    <td><a href="mailto:priyankatripathi.nitjsr@gmail.com">priyankatripathi.nitjsr@gmail.com</a></td>
    <td>+91-8092084548</td>
  </tr>
  
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td rowspan="4">Student Coordinators</td>
    <td>Avinash Kumar,<br />
		VI Sem. Civil.</td>
    <td><a href="mailto:royalcivil126@gmail.com">royalcivil126@gmail.com</a></td>
    <td>+91-9934221419</td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>Akanksha Dubey,<br />
		VI Sem. ECE</td>
    <td> </td>
    <td> </td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>Surbhi Singh,<br />
		VIII Sem, Metl& Mat.</td>
    <td></td>
    <td></td>
  </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>Thabisile Chirrime,<br />
		VI Sem. Civil.</td>
    <td></td>
    <td></td>
  </tr>
  </table>
</div>
</div>
</div>
<div class="col2" >
<!--sidetab starts here-->
<?php include 'sidepanel.php' ?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
