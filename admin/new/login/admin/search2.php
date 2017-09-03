<?php 
$page='search result';
include 'head.php';
include 'auth.inc.php';
?>
<script type="text/javascript" >
var page=<?php echo '"'.$page.'"';?>;
</script>
<div id="temp" style="display:none;position:absolute; background:#f3f3f3; padding:50px 50px; border:#000 thin groove; width:300px; height:30px; margin-left:150px; margin-top:30px; text-align:center; vertical-align:middle">
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<style type="text/css">
.tab22 {
 background:url(css/images/bg_tableRow.gif)  repeat-x;
 padding-bottom:10px;
 }
</style>
</div>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">

<div class="test">


<?php
mysql_connect ($dbhost, $dbuser, $dbpass)  or die (mysql_error());
mysql_select_db ("nit");
$term = empty($_POST['term'])? die ("ERROR : Please Enter Search Criteria<br/><br/>") : mysql_escape_string($_POST['term']); 
 $term = $_POST['term'];
 $var=$_POST['var'];
 if($var=='FirstName')
{$sql = mysql_query("select * from contact where FNAME like '%$term%' AND FLAG='1'");
$sq=mysql_query("select * from contact where FNAME like '%$term%' AND FLAG='1'");}
else if($var=='LastName')
{$sql = mysql_query("select * from contact where LNAME like '%$term%' AND FLAG='1'");
$sq=mysql_query("select * from contact where LNAME like '%$term%' AND FLAG='1'");}
else if($var=='Email')
{$sql = mysql_query("select * from contact where EMAIL like '%$term%' AND FLAG='1'");
$sq=mysql_query("select * from contact where EMAIL like '%$term%' AND FLAG='1'");}
else 
{$sql = mysql_query("select * from contact where DEPT_ID like '%$term%' AND FLAG='1'");
$sq=mysql_query("select * from contact where DEPT_ID like '%$term%' AND FLAG='1'");}

?>
<?php
mysql_connect ($dbhost, $dbuser, $dbpass)  or die (mysql_error());
mysql_select_db ("nit");
$temp=mysql_fetch_array($sq);
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
<p>&nbsp;</p>
    

            </div>
             
            <?php include 'footer.php';?>