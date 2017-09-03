<?php 
$page='SEARCH Contact';
include 'head.php';?>
<?php include 'auth.inc.php'; ?>


<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style  type="text/css">
.tabrow {
 width:100%;
 height:35px;
 font-family: Geneva, Arial, Helvetica, sans-serif;
 font-size:17px;
 font-weight:500;
 }
.inputfld {
 width:80%;
 height:25px;
 font-family:Geneva, Arial, Helvetica, sans-serif;
 font-size:17px;
 font-weight: 600;
 }
</style>
<BODY>

<div class="test">

<p>&nbsp;</p>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var age = document.getElementById('age').value;
 var sel = document.getElementById('sel').value;

 var queryString = "?age=" + age ;
 queryString +=  "&sel=" + sel;
 ajaxRequest.open("GET", "n.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
<center> 
<form name='myForm'>
<table  width="500px" height="auto" >
<tr class="tabrow ">
    <td>  Search </td> 
	<td><select name="sel" id="sel" class="inputfld">
	 <option value="FirstName">First Name </option>
	 <option value="LastName">Last Name </option>
	 <option value="Email">Email </option>
	 <option value="Dept">Department</option>
	 </select></td></tr>
	 <tr class="tabrow ">
	 <td>Search Value: </td>
	 <td><input type='text' id='age' class="inputfld"/></td>
	 </tr></table>
	 <p>&nbsp;</p>
    <input type='button' onclick='ajaxFunction()' value='search contact'/>
    </form>
	</center>

<div id='ajaxDiv'></div></center>
	
    

            </div>
             
 <?php include 'footer.php';?>
