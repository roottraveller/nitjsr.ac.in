
<?php 
$page='Upload Image';

include 'head.php';?>
<!-----**************************************-------->
<?php 
	$id =$_REQUEST['no'];
	//$ppt=$_REQUEST['no'];
	// sending query
	mysql_query("UPDATE image SET status=0 WHERE no='$id'") or die(mysql_error()); 
	/*if($ppt)
	echo "<script type=text/javascript>
	alert('your Notice has been Removed Successfully!...')</script>";
	$ppt=0;*/
	 ?>
	 
<style type="text/css">
.tab00 {
   width:500px;
   height:auto; 
}
.tab00 tr{
     height:45px;
   text-align:center;
   font-family: Verdana, Arial, Helvetica, sans-serif;
   font-size:22px;
   font-weight:bold;
}
.input00 {
   width:90%;
   height:35px;
   border:;
   border-bottom-color:#000000;
   font-size:18px;
   font-family:Arial, Helvetica, sans-serif, Andalus, halvetica;
  }

</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<p>&nbsp;</p>
<form action="imgupload.php"  method="post"  enctype="multipart/form-data">
<center>
<table class="tab00">
<tr >
<td> Text</td>
<td><textarea id="text" name="text" class="input00" ></textarea></td>
</tr>
<tr>
<td>Image </td>
<td><input type="file" id="img" name="img" class="input00" /></td>
</tr>
</table><p>&nbsp;</p>
<input type="submit" value="add">
</center>
</form>
 <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<table class="img_fech" >
  <thead >
    <tr style="font-size:18px" align="center">
	  <td width="70px">sl.no</td>
      <td width="300px">text</td>
      <td width="400px">image-link</td>
      <td width="auto">&nbsp;options</td>
    </tr>
  </thead>
</table>
 <hr width="99%"  color="#CCCCCC"/><p>&nbsp;</p>
 <table class="img_fech" cellspacing="10px" cellpadding="10px">   
          <?php
		   $result=mysql_query("select * from image WHERE status='1' order by no DESC ");
			while($row = mysql_fetch_array($result))
			{
               	      $id=$row['no'];  ?>
				     <tr class="odd" >
					 <td width="70px"><?php echo $row['no'] ?></td>
      					<td width="270px"><?php echo $row['text'] ?></td>
      					<td width="350px"><a href="../../<?php  echo $row['link']; ?>"><?php echo $row['link'] ?></a></td>
                       <td class="row-nav" >
		<?php echo "<a href='#.php?no=$id' onClick=\"return confirm('this service is currently not available ...will be updated soon ')\">Edit</a>";?> &nbsp;
						 
	<?php echo "<a href='imgadd.php?no=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this image ??')\">Unpublish</a>"; ?>
			</td>
      				</tr>
				
		<?php	}?>
</table>
 
 <p>&nbsp;</p> <p>&nbsp;</p>
<!---botoom link-------------->
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>