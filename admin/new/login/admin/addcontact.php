<?php 
$page='add Faculty';
include 'head.php';
?>
<?php include 'auth.inc.php'; ?>

<script type="text/javascript" >
var page=<?php echo '"'.$page.'"';?>;
</script>
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

if(document.forms["FORMTEST"]["DESIG"].value == "")
  {
  alert("Designation cannot be blank");
  return false;
  }




 /* 
if(document.forms["FORMTEST"]["PHONE"].value == "" || document.forms["FORMTEST"]["PHONE"].length < 10)
  {
 
  return false;
  }*/
if(document.forms["FORMTEST"]["E_MAIL"].value == "")
  {
  alert("E-MAIL cannot be blank");
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
<p>&nbsp;</p>
<div class="test">
<form method="post" action="add.php" onSubmit="return validateForm()" name="FORMTEST"  onreset="return confirm('Are you sure you want to reset this form?');">
<h1 align="center" class="tabrow">NEW ENTRY</h1>
<p>&nbsp;</p>
<center>
<table width="500" border="0" cellspacing="10px" cellpadding="10px">
<tr class="tabrow">
<td width="100px">Department</td>
<td><p>
  <select name="DEPT_ID" id= "DEPT_ID" style="width: auto" class="input">
    <option value="chemistry">Chemistry</option>
    <option value="civil">Civil  Engineering</option>
    <option value="mca">Computer Applications</option>
    <option value="cse">Computer science &amp; Engineering</option>
    <option value="eee">Electrical &amp; Electronics Engineering</option>
    <option value="ece">Electronics &amp; Comm. Engineering</option>
    <option value="humanities">Humanities</option>
    <option value="maths">Mathematics</option>
    <option value="me">Mechanical Engineering</option>
    <option value="meta">Metallurgical and Materials Engineering</option>
    <option value="physics">Physics</option>
    <option value="prod">Manufacturing Engineering</option>
  </select>
</p>
  </td>
</tr>
<tr class="tabrow">
<td width="100">Pre Name</td>
<td><p>
  <select name="PRENAME" id="PRENAME" style="width: 250;"  class="input">
    <option value="Dr.">Dr.</option>
    <option value="Prof." selected="selected">Prof.</option>
    <option value="Mr." >Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Miss">Miss</option>
  </select>
</p>
  </td>
</tr>
<tr class="tabrow">
<td width="100">First Name &nbsp;<font color='red'>*</font></td>
<td><input class="input" name="FNAME" type="text" id="FNAME" ></td>
</tr>
<tr class="tabrow">
<td width="100">Last Name &nbsp;</td>
<td><input  class="input" name="LNAME" type="text" id="LNAME" ></td>
</tr>
<tr class="tabrow">
<td width="100">Designation</td>
<td><select name="DESIG" id="DESIG" style="width: 250;"  class="input">
    <option value="Associate Professor" selected="selected">Associate Professor</option>
    <option value="Assistant Professor" >Assistant Professor</option>
    <option value="Assistant Professor (on contract)" >Assistant Professor (on contract)</option>
    <option value="Professor">Professor</option>
	<option value="Lecturer (on contract)">Lecturer (on contract)</option>
  </select></td>
</tr>
<tr class="tabrow">
<td width="100">Phone No &nbsp;</td>
<td><input class="input" name="PHONE" type="text" id="PHONE"  maxlength="30"></td>
</tr>
<tr class="tabrow">
<td width="100">E-mail ID &nbsp;<font color='red'>*</font></td>
<td><input class="input" name="E_MAIL" type="text" id="E_MAIL"></td>
</tr>
<tr class="tabrow">
  <td width="100">Landline Phone</td>
<td><input class="input" name="LAND_PH" type="text" id="LAND_PH" ></td>
</tr>
<tr class="tabrow">
  <td width="150">Official Address</td>
<td><input class="input" name="OFFICIAL_ADDRESS" type="text" id="OFFICIAL_ADDRESS" ></td>
</tr>
<tr class="tabrow">
  <td width="150">Password&nbsp;<font color='red'>*</font></td>
<td><input class="input" name="PASSWORD" type="password" id="PASSWORD" ></td>
</tr>
</table>
<p>&nbsp;</p>
<center><input name="add" type="submit" id="add" value="Add Faculty"> <input type="reset" value="Reset"/></center>
</form>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            </div>
             
            <?php include 'footer.php'; ?>
