<?php 
$page='Deleted History';
include 'head.php';
include 'auth.inc.php';
?>
<script type="text/javascript" >
var page=<?php echo '"'.$page.'"';?>;
</script>
<script type="text/javascript" src="scripts/jquery.form.js"> </script>
<style type="text/css">
.tab22 {
 background:url(css/images/bg_tableRow.gif)  repeat-x;
 padding-bottom:10px;
 }
</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">
<div class="test">
<?php
mysql_connect ($dbhost, $dbuser, $dbpass)  or die (mysql_error());
mysql_select_db ("nit");
	$id =$_REQUEST['USER_ID'];
	$ppt=$_REQUEST['USER_ID'];
	// sending query
	mysql_query("UPDATE contact SET flag=1 WHERE USER_ID='$id'") or die(mysql_error()); 
	if($ppt)
	echo "<script type=text/javascript>
	alert('Your Contact has been Recovered Successfully!...')</script>";
	$ppt=0;
?>

<?php
mysql_connect ($dbhost, $dbuser, $dbpass)  or die (mysql_error());
mysql_select_db ("nit");
$sql = mysql_query("select * from contact where FLAG='0' ");
$var = mysql_query("select * from contact where FLAG='0' ");
$temp=mysql_fetch_array($sql);
if(!$temp)
{?><center><?php
     die(' <h1>No record found.</h1><br/><br/>'. mysql_error());
	?></center><?php
}
?>

<table class="table-short" >
  <thead >
    <tr align="center" style="font-size:18px";>
      <td width="100px">Dept</td>
      <td width="200px">Name</td>
      <td width="200px">Designation</td>
      <td width="130px">Phone</td>
      <td width="200px">E-mail</td>
	  <td width="200px">Landline</td>
      <td width="200px">Office-Address</td>
      <td width="100px"><?php
echo "<a href='recoverall.php' onClick=\"return confirm('Are you Sure you want to RECOVER all Contact ??')\" >Recover All</a>";
?></td>
    </tr>
  </thead>
</table>
<hr color="#DDDDDD" width="99%" size="2px" />
<table class="table-short"  cellpadding="10px">
  <thead >
<?php  while ($row = mysql_fetch_array($var) ){ 
      
	  $id = $row['USER_ID']; ?>

    <tr align="center" style="font-size:14px"; class="tab22">
      <td width="100px"><?php echo $row['DEPT_ID']; ?></td>
      <td width="200px"><?php echo $row['PRENAME'],' ', $row['FNAME'],' ', $row['LNAME'];?></td>
      <td width="200px"><?php echo $row['DESIG']; ?></td>
      <td width="130px"><?php echo $row['PHONE']; ?></td>
      <td width="200px"><?php echo $row['E_MAIL']; ?></td>
	  <td width="200px"><?php echo $row['LAND_PH']; ?></td>
      <td width="200px"><?php echo $row['OFFICIAL_ADDRESS']; ?></td>
      <td width="100px"><?php echo "<a href='delhistory.php?USER_ID=$id' onClick=\"return confirm('Are you Sure you want to RECOVER this Contact??')\" >Recover</a>"; ?></td>
    </tr>
 
<?php }?>
 </thead>
</table>
<p>&nbsp;</p>
         </div> 
            <?php include 'footer.php';?>