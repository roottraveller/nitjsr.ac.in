<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php';
$limit=(int)$_POST['limit'];
 
		$objResult = sprintf("SELECT * FROM placement WHERE batch='2013' LIMIT ".$limit." , 10");
		$result=mysql_query($objResult);
		if(!$result)
		{
			echo 'ERROR';
		}
		echo '<table  class="table-short" width="700px" cellpadding="5px">';
		while($row = mysql_fetch_array($result))
		{
			echo '<tr class="odd" >
					<td class="col-first" id="'.$row['slno'].'first" >'.$row['name'].'</td>
					<td class="col-second" id="'.$row['slno'].'second">'.$row['no_student'].'</td>
					<td></td>
					<td class="row-nav"><a id="'.$row['slno'].'edit" href="javascript:edit(\''.$row['slno'].'\')" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">Edit</a>   <a href="javascript:deleterow(\''.$row['slno'].'\')" style=" position:absolute;margin-top:-10px; margin-left:30px" id="'.$row['slno'].'delete" class="table-delete-link">&nbsp;Delete</a> <a id="'.$row['slno'].'update" href="javascript:update(\''.$row['slno'].'\')" class="table-edit-link" style="display:none; position:absolute;margin-top:-10px; margin-left:-15px">Update</a>  <a id="'.$row['slno'].'cancel" href="javascript:cancel(\''.$row['slno'].'\')"  style="display:none; position:absolute; margin-top:-10px; margin-left:30px" class="table-edit-link">&nbsp;Cancel</a> </td> </tr>';
			
		}
				echo '</table>';
	?>