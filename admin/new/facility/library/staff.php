<?php
error_reporting(0);
$root='../../';
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
<title>NIT Jamshedpur | Central Library</title>  
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
  <span>Library Staff</br></span>
</div>
<div class="pagecontent">

<?php $i=0;?>
<table class="pagetablecontent" border="0" height="200px"width="100%">
	<tr class="tablehead">
            <td>Sl. No.</td>
            <td>Name</td>
            <td>Designation</td>
            <td>Contact Details</td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>1.</td>
            <td>Dr. Neeta Bharti</td>
            <td>Librarian</td>
            <td>neetabharti.lib@nitjsr.ac.in<br/>+918986711008</td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>2.</td>
            <td> Mr. N.K. Sethy</td>
            <td>Assistant Librarian 
            </td>
            <td>9470389685
            </td>
    </tr><tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>3.</td>
            <td> Mr. U. Kumar     
            </td>
            <td>Assistant Librarian
            </td>
            <td>9470154510
            </td>
    </tr><tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>4.</td>
            <td> Mr. N.K. Mahato     
            </td>
            <td>Typist Clerk
            </td>
            <td>9431399195
            </td>
    </tr></table>


</div>
</div>
</div>
<div class="col2">
<?php include 'sidepanel.php'?>
</div>
<div class="clear">

<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
