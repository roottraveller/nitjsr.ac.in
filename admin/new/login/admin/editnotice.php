<head>
 
   <meta http-equiv="Content-Type" content="text/html;">
   <script language="javaScript" 
    type="text/javascript" src="calendar.js"></script>
   <link href="calendar.css" rel="stylesheet" type="text/css">
</head>
<?php 
$page='Notice Update';
include 'head.php';
include 'auth.inc.php';
?>

<script type="text/javascript" src="scripts/jquery.form.js"></script>


<style type="text/css">
.formsty {
 font-size:16px;
 height:30px;
 width:100%;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 font-weight: 500;
 border-collapse:separate;
 border-spacing:10px;
 }
 .tab22 {
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:17px;
 width:150px;
 height:auto;
 }
 .tabrow{
 width:100%;
 height:40px;
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:16px;
 
 }
 
</style>

<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">

<?php

$no =$_REQUEST['no'];

$result = mysql_query("SELECT * FROM notifications WHERE no = '$no'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}       
				$no=$test['no'] ;
									
				$notification=$test['notification'] ;
				$link=$test['link'] ;
				
				$main=$test['main'] ;
				$tender=$test['tender'] ;
				$recruitment=$test['recruitment'] ;
				$new=$test['new'] ;
				$time=$test['time'] ;
				//$exdate=$test['expiry_date'];
?>
<form method="post" action="succedit.php?no=<?php echo $no;?>"  enctype="multipart/form-data">
<center>
<table width="500px" height="auto" >
	<tr class="tabrow">
		<td class="tab22">Notification</td>
		<td><input class="formsty" type="text" name="notification" id="notification" value="<?php echo $notification ?>"/></td>
	</tr>
	<tr class="tabrow" >
		<td class="tab22">Link</td>
		<td><input class="formsty" type="text" name="link" id="link" value="<?php echo $link ?>"/></td>
	</tr>
    <tr class="tabrow">
		<td class="tab22">Main</td>	
		<td> <input class="formsty"  type="checkbox"  name="main"  <?php	if($main==1)
				echo 'checked';
				?>/> </td>
	</tr>
	<tr class="tabrow">
		<td class="tab22">Tender</td>
		<td><input class="formsty"  type="checkbox" name="tender" <?php	if($tender==1)
				echo 'checked';
				?>  /></td>
	</tr>
    <tr class="tabrow">
		<td class="tab22">Recruitment</td>
		<td ><input class="formsty"  type="checkbox" name="recruitment" <?php	if($recruitment==1)
				echo 'checked';
				?> /></td>
	</tr>
	<tr class="tabrow">
		<td class="tab22">new</td>
		
		<td><input class="formsty" type="checkbox"name="new" <?php if($new==1)
				echo 'checked';
				?>  /></td>	
	</tr>
	</table>
<p>&nbsp;</p><p>&nbsp;</p>
<input type="submit" name="save" id="save" value="save" />
</center></form>

<p>&nbsp;</p><p>&nbsp;</p>

            
             
            <?php include 'footer.php';?>
