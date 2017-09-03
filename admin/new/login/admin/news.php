<head>
 
   <meta http-equiv="Content-Type" content="text/html;">
   <script language="javaScript" 
    type="text/javascript" src="calendar.js"></script>
   <link href="calendar.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php 
$page='news lists';

include 'head.php';?>
<!-----**************************************-------->
<?php include 'auth.inc.php'; ?>

  <?php 

	$id =$_REQUEST['no'];
	//$ppt=$_REQUEST['no'];
	// sending query
	mysql_query("UPDATE notifications SET status=0 WHERE no='$id'") or die(mysql_error()); 
	/*if($ppt)
	echo "<script type=text/javascript>
	alert('your Notice has been Removed Successfully!...')</script>";
	$ppt=0;*/
	 ?>
<style type="text/css">
.formsty {
 font-size:16px;
 height:40px;
 width:95%;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-weight: 500;
 border-collapse:separate;
 border-spacing:10px;
 }
</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<table class="table-short" >
  <thead >
    <tr style="font-size:16px" align="center">
      <td width="230px">title</td>
       <td width="230px">link</td>
	    <td width="230px">upload notice</td>

      <td width="230px">date</td>
      <td width="60px">viewed</td>
    </tr>
  </thead>
</table>
<hr size="2px"  color="#CCCCCC"/><p>&nbsp;</p>
<?php if(isset($_POST['submit'])){	
	include 'newssub.php' ;
	}
	?>
<form  action="<?php echo $_SERVER['PHP_SELF'];  ?>" enctype="multipart/form-data" method="post">
<table class="uploadtb" cellspacing="0px" cellpadding="10px" >
<tr height="50px">
 <!--<td  width="430px">&nbsp;<input class="formsty" type="text" name="title" id="title" maxlength="2000"/></td>-->
 <td width="230px">&nbsp;&nbsp;<textarea  class="formsty" type="text" name="title" id="title" maxlength="5000"></textarea>
   <td width="230px">&nbsp;&nbsp;<textarea  class="formsty" type="text" name="link" id="link" maxlength="5000"></textarea>
   <td  width="300px"><input class="formsty" type="file" name="file" id="file" multiple style="width:100%; height:25px;"/></td>

   
   
   
   <td width="430px"><select id="day" name="day" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Day&nbsp;&nbsp;</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>			</select> &nbsp;&nbsp;
			<select id="month" name="month" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Month&nbsp;&nbsp;</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option>			</select> &nbsp;&nbsp;<select id="year" name="year" class="show_item">
			<option selected="selected" value="0">&nbsp;&nbsp;Year&nbsp;&nbsp;</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option></select>
   
 
   
   
   <td width="60px"><input class="formsty" type="checkbox" value="1" name="view" /></td>
<td width="auto" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="add" ></td>
</tr></table>
</form>
 <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<center><font face="Helvetica, sans-serif, Andalus, halvetica" style="font-weight:bold; font-size:18px" >All Recent Notices</font>(order by time of publication)</center>
 <hr width="99%"  color="#CCCCCC"/><p>&nbsp;</p>
 <table class="data_fech" cellspacing="10px" cellpadding="10px">   
          <?php
		   $result=mysql_query("select * from tabs where news='1' order by time DESC  ");
			while($row = mysql_fetch_array($result))
			{
			     ?>
				     <tr class="odd" >
      					<td ><?php echo $row['title'] ?></td>
						<td ><?php echo $row['link'] ?></td>
						<td ><?php echo $row['date'] ?></td>
      						<td width="60px"><input type="checkbox"
			<?php	if($row['view']==1)
				echo 'checked';
				?> /></td>	
    
		
				<!--edit and delete option-->
      	<td class="row-nav" >
		<?php echo "<a href='editnotice.php?no=$id' onClick=\"return confirm('Are You Sure You Want to Edit ??')\">Edit</a>";?> &nbsp;&nbsp;&nbsp;
						 
	<?php echo "<a href='upload1.php?no=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this Notification ??')\">Unpublish</a>"; ?>
			</td>
      				</tr>
				
		<?php	}?>
</table>
  <p>&nbsp;</p> <p>&nbsp;</p>
<!---botoom link-------------->
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>