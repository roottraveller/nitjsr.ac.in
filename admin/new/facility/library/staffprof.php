<?php
error_reporting(0);
$root='../../';
?>
<?php include '../library/auth.php' ?>
<?php
if(!$_GET['id'])
{
	echo '<script type="text/javascript">document.location.href="../department/index.php?dept=cse&page=home";</script>';
}
$id=$_GET['id'];

$objResult = sprintf("select * from faculty where user_id='%s'",
    		mysql_real_escape_string($id));
			$result=mysql_query($objResult);
			while($row = mysql_fetch_array($result))
			{
				$name=$row['name'];
				$path=$row['path'];
				$desig=$row['desig'];
				$dept=$row['dept'];
				$qual=$row['qual'];
				$add=$row['address'];
				$phone=$row['phone'];
				$mob=$row['mobile'];
				$email=$row['email'];
				$details=$row['details'];
			}
			$qual=str_replace("\n", "<br />", $qual);
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
<?php
if(!mysql_num_rows($result)){
?>
<span style="text-transform:capitalize;">Profile</span>
</div>  
<div class="pagecontent">
<p>The profile of the respected faculty member will be made available soon.</p>
<?php
}
else{
?>
  <span style="text-transform:capitalize;"><?php echo $name; ?></span>
</div>  
<div class="pagecontent">
<img src="<?php echo $path; ?>" class="facultyimg"  />
<p style="float: left; width:auto"><b><?php echo $desig; ?></b>, <?php echo $dept; ?> Department<br /><br />

<?php echo $qual; ?></p>
<h2>Contact Details</h2>
<table width="60%" >
	<tr>
    	<td>
        	Residential Address
        </td>
        <td>
        	<?php echo $add;?>
        </td>
    </tr>
    <tr>
    	<td>
        	Phone Number
        </td>
        <td>
        	<?php echo $phone;?>
        </td>
    </tr>
    <tr>
    	<td>
        	Mobile Number
        </td>
        <td>
        	<?php echo $mob;?>
        </td>
    </tr>
    <tr>
    	<td>
        	E-mail
        </td>
        <td>
        	<a href="mailto:<?php echo $email;?>"  class="pagelink"><?php echo $email;?></a>
        </td>
    </tr>
</table>
<?php echo $details; ?>
<?php
}
?>
<span class="backbtn"><a href="javascript:history.back(-1)"> &lt;&ndash; Go Back</a></span>
</div> 

</div>
</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
