<?php 
$page='faq';

include 'head.php';?>
<!-----**************************************-------->
<?php include 'auth.inc.php'; ?>

<?php 

	$id =$_REQUEST['QN'];
	//$ppt=$_REQUEST['QN'];
	// sending query
	mysql_query("DELETE from faq1 where QN='$id'") or die(mysql_error()); 
	/*if($ppt)
	echo "<script type=text/javascript>
	alert('your Notice has been Removed Successfully!...')</script>";
	$ppt=0;*/
	 ?>
<style type="text/css">
.formsty {
 font-size:17px;
 height:30px;
 width:95%;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-weight: 520;
 border-collapse:separate;
 border-spacing:10px;
 }
 .tabfaq {
    height:auto;
	width:100%;
}
.tabfaq tr {
    font:Georgia, "Times New Roman", Times, serif;
	height:50px;
	width:100%;
	text-align:left;
	font-size:18px;
}
tr.ans1 {
     height:50px;
	  padding-bottom:30px;
	 background:url(css/images/bg_tableRow.gif) repeat-x;
	  font: Geneva, Arial, Helvetica, sans-serif;
	  font-size:16px;
	  text-align:left;
  }
</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

<center>
<form action="faqadd.php" method="post" enctype="multipart/form-data">
<table class="tabfaq">
<tr>
<td width="100px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Que :</b></td>
<td width="auto"><input type="text" name="que" id="que" class="formsty" /></td>
</tr>
<tr>
<td width="100px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ans :</b></td>
<td width="auto"><input type="text" name="ans" id="ans" class="formsty" /></td>
</tr></table>
<p>&nbsp;</p><p>&nbsp;</p>
<input type="submit" value="add" />
</form>
</center>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<table width="100%">
<tr style="font-size:23px; font-weight:bold; font-family: Geneva, Arial, Helvetica, sans-serif">
<td width="500px">&nbsp;&nbsp;Question</td>
<td width="500px">Answer</td>
<td width="auto">options</td>
</tr>
</table>
<hr width="99%"  color="#CCCCCC"/><p>&nbsp;</p>
 <table width="100%">   
          <?php
		   $result=mysql_query("select * from faq1  order by QN DESC");
			while($row = mysql_fetch_array($result))
			{
			      $id=$row['QN'];  ?>
				     <tr class="ans1">
      					<td width="400px">&nbsp;<?php echo $row['Question'] ?></td>
						<td width="500px"><?php echo $row['Answer'] ?></td>
						<!--edit and delete option-->
      	<td class="row-nav" >
		<?php echo "<a href='#.php?QN=$id' onClick=\"return confirm('this service is currently not available ...will be update soon ')\">Edit</a>";?> &nbsp;
						 
	<?php echo "<a href='faq.php?QN=$id' onClick=\"return confirm('Are You Sure You Want to unpublish this Question. this will permanetly delete it...??')\">Unpublish</a>"; ?>
			</td>
      				</tr>
				
		<?php	}?>
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>

 <?php include 'footer.php'; ?>