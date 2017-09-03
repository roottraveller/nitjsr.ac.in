<?php include 'loggedin.php'; ?>
<?php include 'auth.inc.php'; ?>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">
<div class="test">
<?php

mysql_connect($dbhost, $dbuser, $dbpass) or die (mysql_error());
$dbname = "nit";
$age = $_GET['age'];
$sel = $_GET['sel'];

// Escape User Input to help prevent SQL Injection
$age = mysql_real_escape_string($age);
 if($sel=='FirstName')
{$sql = mysql_query("select * from contact where FNAME like '%$age%' AND FLAG='1'");
$sq=mysql_query("select * from contact where FNAME like '%$age%' AND FLAG='1'");}
else if($sel=='LastName')
{$sql = mysql_query("select * from contact where LNAME like '%$age%' AND FLAG='1'");
$sq=mysql_query("select * from contact where LNAME like '%$age%' AND FLAG='1'");}
else if($sel=='Email')
{$sql = mysql_query("select * from contact where EMAIL like '%$age%' AND FLAG='1'");
$sq= mysql_query("select * from contact where EMAIL like '%$age%' AND FLAG='1'");}
else 
{$sql = mysql_query("select * from contact where DEPT_ID like '%$age%' AND FLAG='1'");
$sq=mysql_query("select * from contact where DEPT_ID like '%$age%' AND FLAG='1'");}

	//build query


$temp=mysql_fetch_array($sq);
if(!$temp)
{?> <center><h1><?php
     die('<br/><br/> No record found.<br/><br/>'. mysql_error());
	?></h1></center><?php
}
?>



<style type="text/css">
#tab11 {
 padding-left:10px;
 }
.tabrow1 {
 width:100%;
 height:35px;
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-size:20px;
 font-weight:bold;
 }
 .tabrow2 {
  width:100%;
  height:auto;
  text-align: left;
  font-family: halvetica, arial, "times New Roman", georgia;
  font-size:16px;
  padding-bottom:20px;
  }
tr.tabrow2 >td {
 padding-bottom:20px;
 background:url(css/images/bg_tableRow.gif) repeat-x;
 }
 .tab22 {
 background:url(css/images/bg_tableRow.gif)  repeat-x;
 padding-bottom:10px;
 }
</style>
<p>&nbsp;</p>
<table class="table-short" >
  <thead >
    <tr align="center" style="font-size:18px";>
      <td width="100px">Dept</td>
      <td width="200px"align="center">Name</td>
      <td width="200px">Designation</td>
      <td width="130px">Phone</td>
      <td width="200px">E-mail</td>
      <td width="200px">Office-Address</td>
       <td width="200px">Landline</td>
	   <td width="200px">Options</td>
    </tr>
  </thead>
</table>
<hr color="#DDDDDD" width="99%" size="2px" />
<p>&nbsp;</p>
<table class="table-short"  cellpadding="10px">
<thead>
<?php  while ($row = mysql_fetch_array($sql) ){
$id = $row['USER_ID']; ?>
<!--$row= empty($_POST['row'])? die ("ERROR:Please Enter Search Criteria") : mysql_escape_string($_POST['row']); -->

   <tr align="center" style="font-size:14px"; class="tab22">
   <td width="100px"><?php echo $row['DEPT_ID']; ?></td>
   <td width="200px"><?php echo $row['PRENAME']." ".$row['FNAME']." ".$row['LNAME']; ?></td>
    <td width="200px"><?php echo $row['DESIG']; ?></td>
    <td width="130px"><?php echo $row['PHONE']; ?></td>
    <td width="200px"><?php echo $row['E_MAIL']; ?></td>
	<td width="200px"><?php echo $row['OFFICIAL_ADDRESS']; ?></td> 
    <td width="200px"><?php echo $row['LAND_PH']; ?></td>
    <td width="100px"> <?php echo "<a href ='edit.php?USER_ID=$id' onClick=\"return confirm('Do you Really want to Edit ??')\"> Edit </a>"; ?> </td>
    <td width="100px"><?php echo "<a href='del.php?USER_ID=$id' onClick=\"return confirm('Are You Sure, You Want to DELETE ??')\" >Delete</a>";?></td>
	
   </tr>
  <?php } ?></thead></table>
<p>&nbsp;</p></div>