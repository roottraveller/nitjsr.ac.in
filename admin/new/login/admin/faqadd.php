<?php include 'auth.inc.php'; ?>
<?php include 'loggedin.php'; ?>
<?php
	$que =$_POST['que'];
	$ans=$_POST['ans'];
	$logic='1';
   
$sql="INSERT INTO faq1 (Question,Answer,logic) VALUES ('$que','$ans','$logic')";

if (mysql_query($sql)){
echo  "<script type=text/javascript>alert('your question has been uploaded successfully !! click to upload another question....');
 window.history.back(); </script>";  
  }

else {echo "error<br>" . mysql_error();}

 
 ?>