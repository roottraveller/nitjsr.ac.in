<?php 
$page='NOTIFICATIONS UPDATE';
include 'head.php';
?>
<?php include 'auth.inc.php'; ?>
<script type="text/javascript" src="scripts/jquery.form.js"></script>



<div class="idtification" id="idtification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">

<?php 
//$d=$_POST['datum1'];

$main = (isset($_REQUEST['main']));
	//assigning value to main checkbox
    if ($main == 1 )
      {
        $main = 1;
      }
    else
     {
       $main = 0;
     }
	 //assigning value to tender
	 $tender = (isset($_REQUEST['tender']));
    if ($tender == 1 )
      {
        $tender = 1;
      }
    else  
     {
       $tender = 0;
     }
	//assigning value to recruitmentment checkbox
	$recruitment = (isset($_REQUEST['recruitment']));
    if ($recruitment == 1 )
      {
        $recruitment = 1;
      }
    else
     {
       $recruitment = 0;
     }
	 //assigning value foe NEW checkbox
	 $new = (isset($_REQUEST['new']));
    if ($new == 1 )
      {
        $new = 1;
      }
    else
     {
       $new = 0;
     }
	 
	if($main==1 || $tender==1 || $recruitment==1 )
	{ 
	    $status=1;
	}
	else
	{
	  $status=0;
	  }
	  
	  //<!--special character input----------->
$no=$_GET['no'] ;

$notification = $_POST['notification'];
$link = $_POST['link'];


mysql_query("UPDATE notifications SET notification ='$notification',link='$link',main='$main' ,new='$new',tender='$tender',status='$status',recruitment='$recruitment' WHERE no='$no'")
				or die(mysql_error()); 
	echo  "<script type=text/javascript>alert('Your Notification has been saved successfully !! click to go back');
	  </script>";?>
	  
	<script type="text/javascript">
	   document.location.href="upload1.php";
	   </script>";
	 

 
            