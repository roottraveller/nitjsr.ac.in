<?php 
$page='Contact added';
include 'head.php';
include 'auth.inc.php'?>
<script type="text/javascript" >
var page=<?php echo '"'.$page.'"';?>;
</script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<style type="text/css">
.tab22 {
 background:url(css/images/bg_tableRow.gif)  repeat-x;
 padding-bottom:10px;
 }
</style>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">
<div class="test">
<?php
if(isset($_POST['add']))
{
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

//<!--special character input----------->
if(! get_magic_quotes_gpc() )
{
   $FNAME = addslashes ($_POST['FNAME']);
   $LNAME = addslashes ($_POST['LNAME']);
   $OFFICIAL_ADDRESS = addslashes ($_POST['OFFICIAL_ADDRESS']);
}
else
{
   $FNAME = $_POST['FNAME'];
   $LNAME = $_POST['LNAME'];
   $OFFICIAL_ADDRESS = $_POST['OFFICIAL_ADDRESS'];

}

$DEPT = $_POST['DEPT_ID'];
$PRENAME = $_POST['PRENAME'];
$DESIG = $_POST['DESIG'];
$PHONE = $_POST['PHONE'];
$E_MAIL = $_POST['E_MAIL'];
$LAND_PH = $_POST['LAND_PH'];
$OFFICIAL_ADDRESS = $_POST['OFFICIAL_ADDRESS'];
$ip=$_SERVER['REMOTE_ADDR'];
global $seed; // global because $seed is declared in the auth.inc.php file

	
	$pass = $_POST['PASSWORD'];
	$encryptpass = sha1($pass.$seed);
$sql= mysql_query("select * from contact where  DEPT_ID ='$DEPT'");

$a=0;

while($row = mysql_fetch_array($sql))
{
$d=$row['USER_ID'];

if($a<$row['ID'])
{
$a=$row['ID'];
}
}
$a++;

$reg=0;
if ( preg_match('/[a-zA-Z]+/', $d, $reg) ){
    $str = $reg[0];
	
	}


if($a<10)
{$a="0".$a;}

$USERID=$str.$a;

$ID=$a;
$PATH="../faculty/index.php?id=".$USERID;
$sql = "INSERT INTO contact(USER_ID,ID,DEPT_ID,FNAME,LNAME,PRENAME,DESIG,PHONE,E_MAIL,LAND_PH,OFFICIAL_ADDRESS,PROFILE) VALUES('$USERID','$ID','$DEPT',  '$FNAME','$LNAME','$PRENAME' ,'$DESIG', '$PHONE','$E_MAIL','$LAND_PH','$OFFICIAL_ADDRESS','$PATH')";
$sql1 = "INSERT INTO user(uname,email,pass,activated,groupname,uid,ip) VALUES('$E_MAIL','$E_MAIL','$encryptpass',  '1','faculty','$USERID' ,'$ip')";
if($DEPT=='chemistry')
$DEPT="Chemistry";
if($DEPT=='cse')
$DEPT="Computer Science &amp; Engineering";
if($DEPT=='civil')
$DEPT="Civil Engineering";
if($DEPT=='ece')
$DEPT="Electronics &amp; Communication Engineering";
if($DEPT=='eee')
$DEPT="Electrical &amp; Electronics Engineering";
if($DEPT=='humanities')
$DEPT="Humanities";
if($DEPT=='me')
$DEPT="Mechanical Engineering";
if($DEPT=='physics')
$DEPT="Physics";
if($DEPT=='maths')
$DEPT="Mathematics";
if($DEPT=='meta')
$DEPT="Metallurgical &amp; Materials Engineering";
if($DEPT=='prod')
$DEPT="Manufacturing Engineering";



 	


$path1="../faculty/images/not_available.JPG";
mysql_select_db('nit');
$sql2 = "INSERT INTO qual(user_id,path,dept,qual) VALUES('$USERID','$path1','$DEPT','')";
$result2=mysql_query($sql2);
if(! $result2)
echo mysql_error();
echo  "<script type=text/javascript>alert('Faculty has been added successfully !! click to go back.');
	  </script>";
mysql_select_db('nit');
$retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not Enter data: ' . mysql_error());
}
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not Enter data: ' . mysql_error());
}
mysql_close($conn);
}
?>
<p>&nbsp; </p>
<table class="table-short" >
  <thead >
    <tr align="center" style="font-size:18px";>
      <td width="100px">Dept</td>
      <td width="200px"align="center">Name</td>
      <td width="200px">Designation</td>
      <td width="130px">Phone</td>
      <td width="200px">E-mail</td>
      <td width="200px">Office-Address</td>
       <td width="200px">Landline</td>
	   <td width="200px">Options</td>
    </tr>
  </thead>
</table>
<hr color="#DDDDDD" width="99%" size="2px" />

<table class="table-short"  cellpadding="10px">
  <thead>
    <tr align="center" style="font-size:14px"; class="tab22">
      <td width="100px"><?php echo $DEPT; ?></td>
      <td width="200px"><?php echo $PRENAME.' '. $FNAME.' '.$LNAME;?></td>
      <td width="200px"><?php echo $DESIG; ?></td>
      <td width="130px"><?php echo $PHONE; ?></td>
      <td width="200px"><?php echo $E_MAIL; ?></td>
      <td width="200px"><?php echo $OFFICIAL_ADDRESS; ?></td>
	  <td width="200px"><?php echo $LAND_PH; ?></td>
   <td width="100px"><?php echo "<a href ='edit.php?USER_ID=$USERID' onClick=\"return confirm('Do you Really want to Edit ??')\"> Edit </a>"; ?> </td>
   <td width="100px"><?php echo "<a href='del.php?USER_ID=$USERID' onClick=\"return confirm('Are You Sure, You Want to DELETE ??')\" >Delete</a>"; ?></td>
   </tr>
   </thead>
  </table>
</br>
</br>
<p>
<a href="addcontact.php"> Add more contacts</a>
  </p>    
<p></p>
<p></p>  
  </div>
             
            <?php include 'footer.php'; ?>
