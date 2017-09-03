<?php 
$page='notifications upload';

include 'head.php';?>
<!-----**************************************-------->
<?php include 'auth.inc.php'; ?>

  <?php 

	$id =$_REQUEST['no'];
	$ppt=$_REQUEST['no'];
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
 height:30px;
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
    <tr style="font-size:14px" align="center">
      <td width="260px">title</td>
      <td width="250px">link</td>
      <td width="300px">text</td>
      <td width="55">main</td>
      <td width="55">tender</td>
      <td width="65">recruit</td>
      <td width="auto">new</td>
      <td width="auto">&nbsp;options</td>
    </tr>
  </thead>
</table>
<hr size="2px"  color="#CCCCCC"/><p>&nbsp;</p>
<form action="u.php" method="post" enctype="multipart/form-data">
<table class="uploadtb" cellspacing="0px" cellpadding="10px" >
<tr>
 <td  width="270px">&nbsp;<input class="formsty" type="text" name="title" id="title" maxlength="2000"/></td>
<td  width="230px"><input class="formsty" type="file" name="file" id="file" style="width:100%; height:25px;"/></td>
<td  width="300px"><input class="formsty" type="text" name="text" id="text" maxlength="4000"/></td>
<td  width="55px"><input class="formsty" type="checkbox"  name="main" value="1"/></td>
<td  width="55px"><input class="formsty" type="checkbox" value="1" name="tender" /></td>
<td  width="55px"><input class="formsty" type="checkbox" value="1" name="recruit" /></td>
<td  width="85px"><input class="formsty" type="checkbox" value="1" name="new" /></td>
<td width="auto"><input type="submit" name="submit" value="add" ></td>
</tr></table>
</form>
 <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
 <hr width="99%"  color="#CCCCCC"/><p>&nbsp;</p>
 <table class="data_fech" cellspacing="10px" cellpadding="10px">   
          <?php
		   $result=mysql_query("select * from notifications where status='1' order by time DESC LIMIT 10");
			while($row = mysql_fetch_array($result))
			{
			      $id=$row['no'];  ?>
				     <tr class="odd" >
      					<td width="205px"><?php echo $row['notification'] ?></td>
      					<td width="205px"><a href="../../<?php  echo $row['link']; ?>"><?php echo $row['link'] ?></a></td>
						<td width="205px"><?php echo $row['text']?></td>
      <td width="51px"><input type="checkbox"
			<?php	if($row['main']==1)
				echo 'checked';
				?> /></td>
		 <td width="51px"><input type="checkbox"
			<?php	if($row['tender']==1)
				echo 'checked';
				?> /></td>
	    <td width="51px"><input type="checkbox"
			<?php	if($row['recruitment']==1)
				echo 'checked';
				?> /></td>
	    <td width="51px"><input type="checkbox"
			<?php	if($row['new']==1)
				echo 'checked';
				?> /></td>
				<!--edit and delete option-->
      	<td class="row-nav" >
		<?php echo "<a href='editnotice.php?no=$id' onClick=\"return confirm('Are You Sure You Want to Edit this notification ??')\">Edit</a>";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						 
	<?php echo "<a href='upload1.php?no=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this Notification ??')\">Unpublish</a>"; ?>
			</td>
      				</tr>
				
		<?php	}?>
</table>
  <p>&nbsp;</p> <p>&nbsp;</p>
<!---botoom link-------------->
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>