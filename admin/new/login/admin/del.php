<?php 
include 'head.php';
include 'auth.inc.php';?>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">
<div class="test">
<?php
  mysql_connect ($dbhost, $dbuser, $dbpass)  or die (mysql_error());
mysql_select_db ("nit");  
$id =$_REQUEST['USER_ID'];
mysql_query("UPDATE contact SET FLAG='0' WHERE FLAG='1' AND USER_ID = '$id'") or die(mysql_error());
echo  "<script type=text/javascript>alert('Your contact has been deleted successfully !! click to go back');
	  </script>";  ?>
<script type="text/javascript">
document.location.href="searchcontact.php";
</script>"; 
             
            