<?php 
$page='EDIT CONTACT';
include 'head.php';
include 'auth.inc.php';?>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<style  type="text/css">
.tabrow {
 width:100%;
 height:35px;
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-size:18px;
 font-weight:bold;
 }
.input {
width:87%;
height:25px;
font:Geneva, Arial, Helvetica, sans-serif;
font-size:17px;
}

</style>
<script type="text/javascript">

function validateForm()
{
//var x=document.forms["FORMTEST"]["FNAME"].value;
if(document.FORMTEST.FNAME.value == "")
  {
  alert("First Name cannot be blank");
  return false;
  }
if(document.forms["FORMTEST"]["LNAME"].value == "")
  {
  alert("Last Name cannot be blank");
  return false;
  }
if(document.forms["FORMTEST"]["DESIG"].value == "")
  {
  alert("Designation cannot be blank");
  return false;
  }


if(document.forms["FORMTEST"]["E_MAIL"].value == "")
  {
  alert("E-MAIL Address must be filled out");
  return false;
  }

if(document.forms["FORMTEST"]["E_MAIL"].value !=null)
{
var x=document.forms["FORMTEST"]["E_MAIL"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
   alert("Invalid characters in E-mail Address");
  return false;
  }
} 
	
}
</script>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">

<div class="test">
<?php
$id =$_REQUEST['USER_ID'];

$result = mysql_query("SELECT * FROM contact WHERE USER_ID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}       
				$USER_ID=$test['USER_ID'] ;
				$DEPT_ID= $test['DEPT_ID'] ;					
				$FNAME=$test['FNAME'] ;
				$LNAME=$test['LNAME'] ;
				$PRENAME=$test['PRENAME'] ;
				$DESIG=$test['DESIG'] ;
				$PHONE=$test['PHONE'] ;
				$E_MAIL=$test['E_MAIL'] ;
				$LAND_PH=$test['LAND_PH'] ;
				$OFFICIAL_ADDRESS=$test['OFFICIAL_ADDRESS'] ;
				$PROFILE=$test['PROFILE'] ;
				


mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit | Contact</title>
</head>

<body>
<form method="post" action="contactedited.php?id=<?php echo $id;?>" onSubmit="return validateForm()" name="FORMTEST" ><center><p>&nbsp;</p>
<table width="500" border="0" cellspacing="10px" cellpadding="10px">
	<tr class="tabrow">
		<td class="tabrow">Department</td>
		<td><select name="DEPT_ID" id= "DEPT_ID" style="width: auto" class="input">
		<option value="<?php echo $DEPT_ID;?>"selected>
		<?php
		if($DEPT_ID=='chemistry')
		echo 'Chemistry';
				if($DEPT_ID=='civil')
		echo 'Civil Engineering';
				if($DEPT_ID=='cse')
		echo 'Computer Science &amp; Engineering';
				if($DEPT_ID=='mca')
		echo 'Computer Applications';
						if($DEPT_ID=='ece')
		echo 'Electronics &amp; Comm. Engineering';
						if($DEPT_ID=='Humanities')
		echo 'Humanities';
						if($DEPT_ID=='maths')
		echo 'Mathematics';
						if($DEPT_ID=='me')
		echo 'Mechanical Engineering';
						if($DEPT_ID=='meta')
		echo 'Metallurgical and Materials Engineering';
						if($DEPT_ID=='physics')
		echo 'Physics';
						if($DEPT_ID=='eee')
		echo 'Electrical &amp; Electronics Engineering';
						if($DEPT_ID=='prod')
		echo 'Manufacturing Engineering';
		?></option>
		
		
  <option value="chemistry">Chemistry</option>
  <option value="civil">Civil  Engineering</option>
  <option value="mca">Computer Applications</option>
  <option value="cse">Computer science &amp; Engineering</option>
  <option value="eee">Electrical &amp; Electronics Engineering</option>
  <option value="ece">Electronics &amp; Comm Engineering</option>
  <option value="humanities">Humanities</option>
  <option value="maths">Mathematics</option>
  <option value="me">Mechanical Engineering</option>
  <option value="meta">Metallurgical and Materials Engineering</option>
  <option value="physics">Physics</option>
  <option value="prod">Manufacturing Engineering</option>
</select></td>
	</tr>
	<tr>
		<td class="tabrow">Prename</td>
		<td><select name="PRENAME" id= "PRENAME" style="width: 250;" class="input">
		<option value="<?php echo $PRENAME;?>"selected>
		<?php
		if($PRENAME=='Dr.')
		echo 'Dr.';
				if($PRENAME=='Prof.')
		echo 'Prof.';
				if($PRENAME=='Mr.')
		echo 'Mr.';
				if($PRENAME=='Mrs.')
		echo 'Mrs.';
				if($PRENAME=='Miss')
		echo 'Miss';
		?></option>
	<option value="Dr.">Dr.</option>
    <option value="Prof.">Prof.</option>
    <option value="Mr." >Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Miss">Miss</option>
		
  
</select></td>
	</tr>
	<tr>
		<td class="tabrow">First Name</td>
		<td><input class="input" type="text" name="FNAME" id="FNAME" value="<?php echo $FNAME ?>"/></td>
	</tr>
	<tr>
		<td class="tabrow">Last Name</td>
		<td><input class="input" type="text" name="LNAME" id="LNAME" value="<?php echo $LNAME ?>"/></td>
	</tr>
    
    <tr>
		<td class="tabrow">Designation</td>
		<td><select name="DESIG" id= "DESIG" style="width: 250;"  class="input">
		<option value="<?php echo $DESIG;?>"selected>
		<?php
		   if($DESIG=='Associate Professor')
		echo 'Associate Professor';
		   if($DESIG=='Assistant Professor')
		echo 'Assistant Professor';
		    if($DESIG=='Assistant Professor (on contract)')
		echo 'Assistant Professor (on contract)';
				if($DESIG=='Professor')
		echo 'Professor';
				if($DESIG=='Lecturer (on contract)')
		echo 'Lecturer (on contract)';
		?></option>
	<option value="Associate Professor" ">Associate Professor</option>
    <option value="Assistant Professor" >Assistant Professor</option>
    <option value="Assistant Professor " >Assistant Professor (on contract)</option>
    <option value="Professor">Professor</option>
	<option value="Lecturer (on contract)">Lecturer (on contract)</option>
		
  
</select></td>
	</tr>
	<tr>
		<td class="tabrow">Phone Num</td>
		<td><input class="input" type="text" name="PHONE" id="PHONE" maxlength="12" value="<?php echo $PHONE ?>"/></td>
	</tr>
    <tr>
		<td class="tabrow">Email Id</td>
		<td><input class="input" type="text" name="E_MAIL" id="E_MAIL" value="<?php echo $E_MAIL ?>"/></td>
	</tr>
	<tr>
		<td class="tabrow">Landline Num</td>
		<td><input class="input" type="text" name="LAND_PH" id="LAND_PH" value="<?php echo $LAND_PH ?>"/></td>
	</tr>
    
	<tr height="50">
		<td class="tabrow">Official Address</td>
		<td ><input class="input" type="TEXT" name="OFFICIAL_ADDRESS" id="OFFICIAL_ADDRESS" value="<?php echo $OFFICIAL_ADDRESS ?>"/></td>
	</tr>
	<tr class="tabrow">
  <td width="150">Password&nbsp;<font color='red'>*</font></td>
<td><input class="input" name="PASSWORD" type="password" id="PASSWORD" ></td>
</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" id="save" value="save" /></td>
	</tr>
</table></center></form>

</body>
</html>

            
             
            <?php include 'footer.php';?>