<?php 
$page='tender notice board notifications';
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
	alert('your Notice has been Removed Successfully!....')</script>";
	$ppt=0;*/
	 ?>

 <link href="css/style.css" rel="stylesheet" type="text/css">
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

<table class="table-short" cellspacing="10px" cellpadding="10px">
  <thead >
    <tr style="font-size:14px" align="center">
      <td width="300px">title</td>
      <td width="320px">link</td>
      <td width="50px">main</td>
      <td width="50px">tender</td>
      <td width="50px">recruit</td>
      <td width="50px">new</td>
	  <td width="130px">added-date</td>
      <td width="130px">last-modification</td>
      <td width="auto">options</td>
    </tr>
  </thead>
</table>
<hr width="2px"  color="#000000"/>
 <table class="data_fech" cellspacing="10px" cellpadding="10px">   
          <?php
		   $result=mysql_query("select * from notifications where tender='1' and status='1' order by time DESC");
			while($row = mysql_fetch_array($result))
			{
			      $id=$row['no'];  ?>
				     <tr class="odd" >
      					<td width="290px"><?php echo $row['notification'] ?></td>
      					<td width="290px"><a href="../../<?php  echo $row['link']; ?>"><?php echo $row['link']; ?></a></td>
      <td width="50px"><input type="checkbox"
			<?php	if($row['main']==1)
				echo 'checked';
				?> /></td>
		 <td width="50px"><input type="checkbox"
			<?php	if($row['tender']==1)
				echo 'checked';
				?> /></td>
	    <td width="50px"><input type="checkbox"
			<?php	if($row['recruitment']==1)
				echo 'checked';
				?> /></td>
	    <td width="30px"><input type="checkbox"
			<?php	if($row['new']==1)
				echo 'checked';
				?> /></td>
				<td width="130px"><?php echo $row['time'] ?></td>
				<td width="130px"><?php echo $row['modify'] ?></td>
				<!--edit and delete option-->
      	<td class="row-nav" >
		<?php echo "<a href='editnotice.php?no=$id' onClick=\"return confirm('Are You Sure, You Want to Edit ??')\">Edit</a>";?>
		 &nbsp;
						 
	<?php echo "<a href='tender1.php?no=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this Notification??')\">Unpublish</a>"; ?>
			</td>
      				</tr>
				
		<?php	}?>
</table>
<!---botoom link-------------->
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>