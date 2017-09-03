<?php 
$page='SEARCH';
include 'head.php';
include 'auth.inc.php';?>
<script type="text/javascript" >
var page=<?php echo '"'.$page.'"';?>;
</script>
<div id="temp" style="display:none;position:absolute; background:#f3f3f3; padding:50px 50px; border:#000 thin groove; width:300px; height:30px; margin-left:150px; margin-top:30px; text-align:center; vertical-align:middle"> <a href="javascript:close2()" style="float:right; margin-top:-40px; margin-right:-30px">close</a>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<style  type="text/css">
.tabrow {
 width:100%;
 height:35px;
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-size:18px;
 font-weight:medium;
 }
 .inputfld {
 width:80%;
 height:25px;
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:17px;
 font-weight: 600;
 }

</style>
</div>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<BODY bgcolor="">

<div class="test">

   <p>&nbsp;</p>
     <center>
      <form method="post" action="search.php" >
	  <table  width="500px" height="auto" >
      <tr class="tabrow ">
    <td>  Search </td> 
	<td><select name="var" id="var" class="inputfld"/> 
	 <option value="FirstName">First Name </option>
	 <option value="LastName">Last Name </option>
	 <option value="Email">Email </option>
	 <option value="Dept">Department</option>
	 </select></td></tr>
	 <tr class="tabrow ">
	 <td>Search Value: </td>
	 <td><input type='text' id="term"  name="term" class="inputfld"/></td>
	 </tr></table>
	 <p>&nbsp;</p>
	 <input type="submit" name="submit" value="Search" />
    </form>
	  </center>
	  
	  

  

 </div>
             
 <?php include 'footer.php';?>
