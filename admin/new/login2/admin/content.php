<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$table=$_POST['value'];
$status=$_POST['status'];
$limit=(int)$_POST['limit'];
 
$objResult = sprintf("SELECT * FROM `%s` WHERE status='%s' ORDER BY `time` DESC LIMIT ".$limit." , 10",
    		mysql_real_escape_string($table),
			mysql_real_escape_string($status));
$result=mysql_query($objResult);
if(!$result)
{
	echo 'ERROR';
}
echo '<table  class="table-short" width="700px" cellpadding="5px">';
while($row = mysql_fetch_array($result))
			{
				echo '<tr class="odd" >
      					<td class="col-first" id="'.$row['no'].'first" >'.$row['notification'].'</td>
      					<td class="col-second" width="340px" id="'.$row['no'].'second"><a href="../../'.$row['link'].'">'.$row['link'].'</a></td>
      					<td class="col-third" id="'.$row['no'].'third"><input id="'.$row['no'].'new"';
				if($row['new']==1)
				echo' checked="checked"';
				echo 'type="checkbox"></td>
      					<td class="row-nav"><a id="'.$row['no'].'edit" href="javascript:edit(\''.$row['no'].'\')" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">Edit</a>   <a href="javascript:deleterow(\''.$row['no'].'\')" style=" position:absolute;margin-top:-10px; margin-left:30px" id="'.$row['no'].'delete" class="table-delete-link">&nbsp;Delete</a> <a id="'.$row['no'].'update" href="javascript:update(\''.$row['no'].'\')" class="table-edit-link" style="display:none; position:absolute;margin-top:-10px; margin-left:-15px">Update</a>  <a id="'.$row['no'].'cancel" href="javascript:cancel(\''.$row['no'].'\')"  style="display:none; position:absolute; margin-top:-10px; margin-left:30px" class="table-edit-link">&nbsp;Cancel</a> </td> </tr>';
				
			}
			echo '</table>';
			



?>
