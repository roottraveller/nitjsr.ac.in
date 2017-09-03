<?php 
$page="Add Faculty";
include 'head.php';?>
<style>

body
{
font-family:arial;
}

</style>

<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<form action="../faculty/new.php" method="post">
Enter the id of the Faculty member : <input type="text" name="id" /><br><br>
Enter the emailid of the Faculty member : <input type="text" name="mail" /><br><br>
Enter the new password : <input type="password" name="pass" /><br><br>
<input type="submit" value="Add Faculty" />
</form>
<?php include 'footer.php'; ?>
