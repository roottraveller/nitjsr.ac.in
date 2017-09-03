<?php 
session_start();
if( session_unregister('cmkLo') == true && session_unregister('emcMd')==true && session_unregister('user_IP')==true ) 
{
    	session_destroy();
	header('Location: index.php');
	exit;
} 
  
else 
{
   unset($_SESSION['cmkLo']);
   unset($_SESSION['emcMd']);
   unset($_SESSION['user_IP']);
   session_destroy();
   header('Location: index.php');
   exit;
}
 session_destroy();
 header('Location: index.php');
 exit;
?>

