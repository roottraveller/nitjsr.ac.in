<head>
 
   <meta http-equiv="Content-Type" content="text/html;">
   <script language="javaScript" 
    type="text/javascript" src="calendar.js"></script>
   <link href="calendar.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php 
$page='notifications upload';

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
      <td width="430px">title</td>
      <td width="330px">link</td>
      <td width="60px">main</td>
      <td width="60px">tender</td>
      <td width="60px">recruit</td>
      <td width="60px">new</td>
      <td width="auto">&nbsp;options</td>
    </tr>
  </thead>
</table>
<hr size="2px"  color="#CCCCCC"/><p>&nbsp;</p>
<form action="w.php" method="post" enctype="multipart/form-data">
<table class="uploadtb" cellspacing="0px" cellpadding="10px" >
<tr height="50px">
 <!--<td  width="430px">&nbsp;<input class="formsty" type="text" name="title" id="title" maxlength="2000"/></td>-->
 <td width="430px">&nbsp;&nbsp;<textarea  class="formsty" type="text" name="title" id="title" maxlength="5000"></textarea>
<td  width="330px"><input class="formsty" type="file" name="file[]" id="file" multiple style="width:100%; height:25px;"/></td>
<td  width="60px"><input class="formsty" type="checkbox"  name="main" value="1"/></td>
<td  width="60px"><input class="formsty" type="checkbox" value="1" name="tender" /></td>
<td  width="60px"><input class="formsty" type="checkbox" value="1" name="recruitment" /></td>
<td  width="60px"><input class="formsty" type="checkbox" value="1" name="new" /></td>
<td width="auto" align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="add" ></td>
</tr></table>
</form>
 <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<center><font face="Helvetica, sans-serif, Andalus, halvetica" style="font-weight:bold; font-size:18px" >All Recent Notices</font>(order by time of publication)</center>
 <hr width="99%"  color="#CCCCCC"/><p>&nbsp;</p>
 <table class="data_fech" cellspacing="10px" cellpadding="10px">   
          <?php
		   $result=mysql_query("select * from notifications where status='1' order by modify DESC ");
			while($row = mysql_fetch_array($result))
			{
			      $id=$row['no'];  ?>
				     <tr class="odd" >
      					<td width="400px"><?php echo $row['notification'] ?></td>
      					<td width="330px"><a href="../../<?php  echo $row['link']; ?>"><?php echo $row['link'] ?></a></td>
						
      <td width="60px"><input type="checkbox"
			<?php	if($row['main']==1)
				echo 'checked';
				?> /></td>
		 <td width="60px"><input type="checkbox"
			<?php	if($row['tender']==1)
				echo 'checked';
				?> /></td>
	    <td width="60px"><input type="checkbox"
			<?php	if($row['recruitment']==1)
				echo 'checked';
				?> /></td>
	    <td width="60px"><input type="checkbox"
			<?php	if($row['new']==1)
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