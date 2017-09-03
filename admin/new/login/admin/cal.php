


<?php 
$page='add event to calender';

include 'head.php';?>

<!-----**************************************-------->
 <?php include 'auth.inc.php'; 

                   /* $dbhost='localhost';
					$dbuser='root';
					$dbpass='250193';
					$obj=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
					mysql_select_db('nit', $obj);
					if(!$obj)
					{
						echo "an error occured while connecting";
						exit;
					}*/
					$start=$_POST['start'];
					$end=$_POST['end'];
					$event=$_POST['event'];
					$holy=$_POST['holiday'];
					$sql="insert into events (event_date,event_end_date,event,HOLIDAYS) values ('$start','$end','$event','$holy')"; 
			if (mysql_query($sql))
			{
echo  "<script type=text/javascript>alert('Event uploaded successfully !! click to upload another event....');
 window.history.back(); </script>";
 }
else {echo "error<br>" . mysql_error();}
?>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>