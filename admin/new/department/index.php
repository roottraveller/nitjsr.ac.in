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
if($page=='faculty')
{
	header("Location:".$root."department/index1.php?dept=$dept&page=faculty");
}

if($page=='curriculum')
{
	header("Location:".$root."department/index2.php?dept=$dept&page=curriculum");
}


$objResult = sprintf("select * from departments where dept='%s'",
    		mysql_real_escape_string($dept));
			$result=mysql_query($objResult);
			if(!mysql_num_rows($result)){
				header("Location:".$root."department/index.php?dept=cse&page=home");
			}
			while($row = mysql_fetch_array($result))
			{
				$title=$row['title'];
                                $content=$row[$page];
				
				
			}
			
						

			
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
<?php echo $content;?><p></br></p>




			
</div>

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
</br>
<div class="box5"style="align:left">
<table class="box4"  border="1px" border-color="#004e90"><tr><td><a href="index.php?dept=chemistry&page=home" title="Chemistry" >Chem</a></td><td><a href="index.php?dept=civil&page=home" title="Civil Engineering">Civil</a></td><td><a href="index.php?dept=cse&page=home" title="Computer Science &amp; Engineering">CSE</a></td><td><a href="index.php?dept=mca&page=home"title="Computer Applications">CA</a></td><td><a href="index.php?dept=eee&page=home"title="Electrical &amp; Electronics Engineering">EEE</a></td><td><a href="index.php?dept=ece&page=home"title="Electronics &amp; Communication Engineering">ECE</a></td><td><a href="index.php?dept=me&page=home"title="Mechanical Engineering">ME</a></td><td><a href="index.php?dept=maths&page=home"title="Mathematics">Maths</a></td><td><a href="index.php?dept=humanities&page=home"title="Humanities">HUM</a></td><td><a href="index.php?dept=meta&page=home"title="Metallurgical &amp; Metals Engineering">Meta</a></td><td><a href="index.php?dept=prod&page=home"title="Manufacturing Engineering">MFE</a></td><td><a href="index.php?dept=physics&page=home"title="Physics">Physics</a></td></tr></table>

</div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>

