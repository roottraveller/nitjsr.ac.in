<?php 
$page='event lists to calender';

include 'head.php';?>
<!-----**************************************-------->
<?php include 'auth.inc.php'; ?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
	$id =$_REQUEST['id'];
	//$ppt=$_REQUEST['id'];
	// sending query
	mysql_query("UPDATE events set status=0 WHERE id='$id'") or die(mysql_error());
	/*mysql_query("UPDATE events SET status=0 WHERE id='$id'") or die(mysql_error()); */
	/*if($ppt)
	echo "<script type=text/javascript>
	alert('your Notice has been Removed Successfully!...')</script>";
	$ppt=0;*/
	 ?>
	 
<style type="text/css">
.data_fech1 {
       width:95%;
	   height:auto;
}
.data_fech1 tr {
   font-family:Geneva, Arial, Helvetica, sans-serif;
   font-size:16px;
   text-align:left;
   background:url(css/images/bg_tableRow.gif) repeat-x;
   padding-bottom:30px;
   height:35px;
  }
</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<center>
<table class="table-short" cellspacing="10px" cellpadding="10px">
  <thead >
    <tr style="font-size:18px; font-weight:bold;" align="center">
      <td width="100px">Sl.no</t,d>
      <td width="200px">Start Date</td>
      <td width="200px">End Date</td>
      <td width="300px">Event Name</td>
      <td width="100px">Holidays</td>
	  <td width="auto">options</td>
    </tr>
  </thead>
</table>
<hr width="96%"  color="#999999"/>
<table class="data_fech1" cellspacing="10px" cellpadding="10px">
<?php
    mysql_select_db(nit); 
    $objResult = sprintf("select * from events WHERE status=1 order by id asc");
			$result=mysql_query($objResult);
    while($row = mysql_fetch_array($result))
			{
				$id=$row['id'];
				$event_date=$row['event_date'];
				$event_end_date=$row['event_end_date'];
				$event=$row['event'];
				$holiday=$row['HOLIDAYS']
			
    ?>
	 <tr>
	<td width="70px"><?php echo $id;?></td>
	<td width="200px"><?php echo $event_date;?></td>
	<td width="200px"><?php echo $event_end_date;?></td>
	<td  width="300px"><?php echo $event;?></td>
	<td width="100px"><?php echo $holiday;?></td>
	<td width="auto"><?php echo "<a href ='#.php?id=$id' onClick=\"return confirm('this service is currently not available ...will be update soon??')\"> Edit </a>";?>&nbsp;&nbsp;&nbsp;
  <?php echo "<a href='listevent.php?id=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this event ??')\" >Unpublish</a>"; ?></td>
	 </tr>
	<?php }?>
	</table><center>
<p>&nbsp;</p><p>&nbsp;</p>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>