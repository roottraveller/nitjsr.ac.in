<?php 
$page='add event to calender';

include 'head.php';?>
<!-----**************************************-------->
<?php include 'auth.inc.php'; ?>
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
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
.formsty {
 font-size:16px;
 height:30px;
 width:95%;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-weight: 500;
 border-collapse:separate;
 border-spacing:10px;
 
 }
 .formsty1{
 font-size:16px;
 height:27px;
 width:65%;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-weight: 500;
 border-collapse:separate;
 border-spacing:10px;
 
 }
 </style>
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
 <script language="javaScript" 
    type="text/javascript" src="calendar.js">
</script>
 <link href="calendar.css" rel="stylesheet" type="text/css">
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<center>
<form  action="cal.php" method="post" >
<table class="table-short" cellspacing="10px" cellpadding="10px">
  <thead >
    <tr style="font-size:18px; font-weight:bold;" align="center">
      <td width="300px">Start Date</td>
      <td width="350px">End Date</td>
      <td width="300px">Event Name</td>
      <td width="100px">Holidays</td>
    </tr>
  </thead>
</table></center>
<hr width="99%"  color="#999999"/>
<center>
<table class="data_fech" id="table1" name="table1"  width="90%"> 
 <tr>
<td  width="300px"><input class="formsty1" type="text" name="start" id="start" /><a href="#" onClick="setYears(2000, 2030); showCalender(this, 'start');">
      <img src="calender.png"></a></td>
<td  width="300px"><input class="formsty1" type="text" name="end" id="end"/><a href="#" onClick="setYears(2000, 2030); showCalender(this, 'end');">
      <img src="calender.png"></a></td></td>
<td  width="400px"><input class="formsty" type="text" name="event" id="event" /></td>
<td  width="auto"><input class="formsty" type="text" name="holiday" id="holiday" /></td>
</tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<center><input name="add" type="submit" id="add" value="add">
</form>
</center>

<!-- Calender Script  --> 

    <table id="calenderTable">
       <tbody id="calenderTableHead">
         <tr>
           <td colspan="4" align="center">
	     <select onChange="showCalenderBody(
                   createCalender(document.getElementById('selectYear').value,
	           this.selectedIndex, false));"
                   id="selectMonth">
	              <option value="0">Jan</option>
	              <option value="1">Feb</option>
	              <option value="2">Mar</option>
	              <option value="3">Apr</option>
	              <option value="4">May</option>
	              <option value="5">Jun</option>
	              <option value="6">Jul</option>
	              <option value="7">Aug</option>
	              <option value="8">Sep</option>
	              <option value="9">Oct</option>
	              <option value="10">Nov</option>
	              <option value="11">Dec</option>
	          </select>
            </td>
            <td colspan="2" align="center">
	    <select onChange="showCalenderBody(createCalender(this.value, 
	      document.getElementById('selectMonth').selectedIndex, false));"
              id="selectYear">
	    </select>
			</td>
           <td align="center">
	    <a href="#" onClick="closeCalender();">
              <font color="#003333" size="+1">X</font>
            </a>
	   </td>
	</tr>
       </tbody>
       <tbody id="calenderTableDays">
         <tr style="">
           <td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td>
           <td>Thu</td><td>Fri</td><td>Sat</td>
         </tr>
       </tbody>
       <tbody id="calender"></tbody>
    </table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>


<!-- End Calender Script  --> 

<center><div class="formsty1">Recent 10 added events</div>
</center>
<hr width="96%"  color="#999999"/>
<table class="data_fech1" cellspacing="10px" cellpadding="10px">
<?php
    mysql_select_db(nit); 
    $objResult = sprintf("select * from events WHERE status=1 order by id DESC LIMIT 10");
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
	<td width="300px"><?php echo $event_date;?></td>
	<td width="300px"><?php echo $event_end_date;?></td>
	<td  width="300px"><?php echo $event;?></td>
	<td width="100px"><?php echo $holiday;?></td>
	<td width="auto">
	<?php echo "<a href ='#.php?id=$id' onClick=\"return confirm('this service is currently not available ...will be update soon??')\"> Edit </a>";?>&nbsp;
  <?php echo "<a href='addevent.php?id=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this event ??')\" >Unpublish</a>"; ?></td>
	 </tr>
	<?php }?>
	</table><center>
<p>&nbsp;</p><p>&nbsp;</p>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>