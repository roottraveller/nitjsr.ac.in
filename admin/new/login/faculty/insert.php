<?php
error_reporting(0);
$root='../../';
include '../../department/auth.php'
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

	
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/innerpage.css" />
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
</head>


<body>
<div id="wrapper_top" >
<?php include '../header1.php' ?>
</div>
<div id="wrapper" >
<!--sidetab starts here-->
<div id="sidetab"><div class="sidetab_title">
<div id="title">
  <div class="txtheading" align="left">Account

  </div>
</div>
</div>
<div class="containerrr">

<div class="lists">
<ul>
<li><a href="index.php?id=<?php echo $id;?>" class="txtdarkgrey">Home</a></li>

<li><a href="update1.php?id=<?php echo $id;?>" class="txtdarkgrey">Update Profile</a></li>
<li><a href="add.php?id=<?php echo $id;?>" class="txtdarkgrey">Add Details</a></li>
<li><a href="course.php?id=<?php echo $id;?>" class="txtdarkgrey">Courses Taught</a></li>
<li><a href="assignment.php?id=<?php echo $id;?>" class="txtdarkgrey">Assignments</a></li>
<li><a href="settings.php?id=<?php echo $id;?>" class="txtdarkgrey">Change Password</a></li>
<li><a href="index.php" class="txtdarkgrey">Logout</a></li>
<!-- for new result with flashing new icon
<li><a href="" class="txtdarkgrey">Results <img src="images/new.gif" align="bottom"  width="35" height="13"></a></li> -->
<!--<li><a href="<?php echo $root;?>quick_link/community.php" class="txtdarkgrey">Communities</a></li>-->

  </ul>
</div>
<img src="<?php echo $root;?>images/sidetab_btm.jpg" >
</div>

  
  
  <div class="spacer"></div>
  <div class="spacer"></div>
    <div class="spacer"></div>
	  <div class="spacer"></div>
<!-- side links starts -->
 <!-- side links ends -->
   <div class="spacer"></div>
</div>

<!--sidetab ends-->
<div class="main_content">
<div class="pageheading">
<span style="text-transform:capitalize;">Edit Faculty Details</span>
</div>
<div class="pagecontent">
<span class="pagesubheading">Edit Basic Informations</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />

<script>
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






<script type="text/javascript">
$(function() {


	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
});
</script>
<?php
error_reporting(0);
	$root='../../';
	/*$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}*/




		$id=$_GET['id'];
$PHONE = $_POST['PHONE'];
$OFFICIAL_ADDRESS= $_POST['OFFICIAL_ADDRESS'];
$LAND_PH= $_POST['LAND_PH'];
$OFFICIAL_ADDRESS= $_POST['OFFICIAL_ADDRESS'];
$Type= $_POST['Type'];
$Details= $_POST['Details'];
$qual= $_POST['qual'];
$image= $_POST['path'];


	   $sql1 = "INSERT INTO faculty ".
       "(USER_ID,Type, Details) ".
       "VALUES ".
       "('$id','$Type','$Details')";
mysql_select_db('nit');
$retval1 = mysql_query( $sql1 );
if($retval1)
{
echo '<b>Data added successfully.</b></br>';
echo 'Would you like to enter another detail?</br>';?>
<form id="basic" method="post" action="add.php?id=<?php echo $id;?>">
<?php echo '<input name="yes" type="submit" id="yes" value="Yes" style="margin-top:10px;";>';
echo '</form>';?>
<form id="basic" method="post" action="../../faculty/index.php?id=<?php echo $id;?>">
<?php echo '<input name="no" type="submit" id="no" value="No" style="margin-top:10px;";></br>';
echo '</form>';
}
else
die(mysql_error());

?>
</div>
</body>
</html>

