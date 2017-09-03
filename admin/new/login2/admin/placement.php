<?php 
$page='placement';
include 'head.php';?>
<script type="text/javascript" >
var status='1';
var limit=0;
var total;
var page=<?php echo '"'.$page.'"';?>;
function init()
{
	<?php $num=mysql_num_rows(mysql_query("select * from placement where batch='2013'"));?>
	total=<?php echo $num;?>;
	str="limit="+limit;
	if (window.XMLHttpRequest) {		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else {								// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==1) {
			}
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				if(xmlhttp.responseText == "ERROR") {
					document.getElementById('notification').innerHTML = "Sorry! Something went Wrong.<br>Please Try again.";
				}
				else {
					document.getElementById("tb").innerHTML=xmlhttp.responseText;
					document.getElementById("addsecondtext_box").value="";
					document.getElementById("addfirsttext_box").value="";
				}
				document.getElementById('notification').style.display = "block";
			}
		}
		
		xmlhttp.open("POST",'contentplacement.php',true);
		
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		
		xmlhttp.send(str);
}
function next()
{
	if(status=="1")
	{
	if((total-limit) > 10)
	{
		limit+=10;
		
		init();
	}
	}
	else
	{
		if((total2-limit) > 10)
	{
		limit+=10;
		
		init();
	}
	}
}
function prev()
{
	if(limit!=0)
	{
		limit-=10;
		init();
	}
}

function show()
{
	document.getElementById("temp").style.display="block";
}
function close2()
{
	document.getElementById("temp").style.display="none";
}

var flag=0;
var prev,first,second,oldfirst,oldsecond,newfirst,newsecond;
function edit(id)
{
	oldfirst=document.getElementById(id+"first").innerHTML;
	
	oldsecond=document.getElementById(id+"second").innerHTML;
	if(flag==0)
	{
		first=document.getElementById(id+"first").innerHTML;
   		second=document.getElementById(id+"second").innerHTML;
   		document.getElementById(id+"edit").style.display="none";
		document.getElementById(id+"delete").style.display="none";
		document.getElementById(id+"update").style.display="block";
		document.getElementById(id+"cancel").style.display="block";
		document.getElementById(id+"first").innerHTML='<input id="'+id+'firsttext_box" class="txtbox-middle" value="'+first.toString()+'"  ></input>';
		document.getElementById(id+"second").innerHTML='<input id="'+id+'secondtext_box" class="txtbox-long" value="'+second.toString()+'"></input> ';
		flag=1;
		prev=id;
	}
	else
	{
		document.getElementById(prev+"first").innerHTML=first.toString();
		document.getElementById(prev+"second").innerHTML=second.toString();
		document.getElementById(prev+"edit").style.display="block";
		document.getElementById(prev+"delete").style.display="block";
		document.getElementById(prev+"update").style.display="none";
		document.getElementById(prev+"cancel").style.display="none";
		second=document.getElementById(id+"second").innerHTML;
   		first=document.getElementById(id+"first").innerHTML;
		document.getElementById(id+"edit").style.display="none";
		document.getElementById(id+"delete").style.display="none";
		document.getElementById(id+"update").style.display="block";
		document.getElementById(id+"cancel").style.display="block";
		document.getElementById(id+"first").innerHTML='<input id="'+id+'firsttext_box" class="txtbox-middle" value="'+first.toString()+'"  ></input>';
		document.getElementById(id+"second").innerHTML='<input id="'+id+'secondtext_box" class="txtbox-long" value="'+second.toString()+'"></input>';
		flag=1;
		prev=id;
	}
}
function cancel(id)
{
	if(flag==1)
	{
		document.getElementById(prev+"first").innerHTML=oldfirst;
		document.getElementById(prev+"second").innerHTML=oldsecond;
		document.getElementById(prev+"edit").style.display="block";
		document.getElementById(prev+"delete").style.display="block";
		document.getElementById(prev+"update").style.display="none";
		document.getElementById(prev+"cancel").style.display="none";
	}
}
function deleterow(id)
{
	if(confirm('are u sure to delete the company?'))
	{
		var str="id="+id;
		addDetails(str,"deletecompany.php");
	}
}
function add()
{
		
	cancel(prev);
		
	var value1=document.getElementById('addfirsttext_box').value;
	var value2=document.getElementById('addsecondtext_box').value;;

	if(value1=="" || value2=="")
	{
		document.getElementById("notification").innerHTML="plz check the enteries before submission";
	}
	else
	{
	var str='name='+value1.toString()+'&nostudent='+value2;
	addDetails(str,"insertcompany.php");
	}
}
function update(id)
{
	oldfirst=document.getElementById(id+"first").innerHTML;
	oldsecond=document.getElementById(id+"second").innerHTML;
	newfirst=document.getElementById(+id+'firsttext_box').value;
	newsecond=document.getElementById(+id+'secondtext_box').value;
	if(newfirst=="" || newsecond=="")
	{
		document.getElementById("notification").innerHTML="plz check the enteries before submission";
	}
	else
	{
	var str='name='+newfirst.toString()+'&nostudent='+newsecond+'&id='+id;
	updateDetails(str,id,"updatecompany.php");
	}
}
function addDetails(str,file) {
		if (window.XMLHttpRequest) {		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else {								// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==1) {
				document.getElementById('notification').innerHTML = 'Please Wait...';
				document.getElementById('notification').style.display = "block";
			}
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				if(xmlhttp.responseText == "success") {
					document.getElementById('notification').innerHTML = "You Details have been updated Successfully.";
					init();
				}
				else {
					document.getElementById('notification').innerHTML = "Sorry! Something went Wrong.<br>Please Try again.";
					
				}
				document.getElementById('notification').style.display = "block";
			}
		}
		xmlhttp.open("POST",file,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(str);
	}
function updateDetails(str,id,file) {
		if (window.XMLHttpRequest) {		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else {								// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==1) {
				document.getElementById('notification').innerHTML = 'Please Wait...';
				document.getElementById('notification').style.display = "block";
			}
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				if(xmlhttp.responseText == "success") {
					document.getElementById('notification').innerHTML = "You Details have been updated Successfully.";
					document.getElementById(id+'first').innerHTML = newfirst;
					document.getElementById(id+'second').innerHTML = newsecond;
				}
				else {
					document.getElementById('notification').innerHTML = "Sorry! Something went Wrong.<br>Please Try again.";
					document.getElementById(id+'first').innerHTML = oldfirst;
					document.getElementById(id+'second').innerHTML = oldsecond;
				}
				document.getElementById('notification').style.display = "block";
				document.getElementById(prev+"edit").style.display="block";
		document.getElementById(prev+"delete").style.display="block";
		document.getElementById(prev+"update").style.display="none";
		document.getElementById(prev+"cancel").style.display="none";
			}
		}
		xmlhttp.open("POST",file,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(str);
	}
function process() {
	var double=document.getElementById('double').value;
	var triple=document.getElementById('triple').value;
	var date=document.getElementById('placementdate').value;
	var str="date="+date+"&double="+double+"&triple="+triple;
		if (window.XMLHttpRequest) {		// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else {								// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==1) {
				document.getElementById('notification2').innerHTML = 'Please Wait...';
				document.getElementById('notification2').style.display = "block";
			}
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				if(xmlhttp.responseText == "success") {
					document.getElementById('notification2').innerHTML = "You Details have been updated Successfully.";
				}
				else {
					document.getElementById('notification2').innerHTML = "Sorry! Something went Wrong.<br>Please Try again.";
				}
				document.getElementById('notification').style.display = "block";
			}
		}
		xmlhttp.open("POST","processplacement.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(str);
	}
</script>

<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
			});
        }); 
</script>

<style>

body
{
font-family:arial;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>


<div id='preview'>
</div></div>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
           <table class="table-short" width="700px">
              <thead>
                <tr>
                  <td width="450px">Name of the Company</td>
                  <td width="140px">No. of Students</td>
                  <td>options</td>
                </tr>
              </thead>
              </table>
              <div id="tb">
              <table  class="table-short" width="700px" cellpadding="5px">
            
              
              
                <?php $result=mysql_query("select * from placement where batch='2013'");
			while($row = mysql_fetch_array($result))
			{
				echo '<tr class="odd" >
      					<td id="'.$row['slno'].'first" >'.$row['name'].'</td>
      					<td id="'.$row['slno'].'second">'.$row['no_student'].'</td>
      					<td class="row-nav"><a id="'.$row['slno'].'edit" href="javascript:edit(\''.$row['slno'].'\')" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">Edit</a>   <a href="javascript:deleterow(\''.$row['slno'].'\')" style=" position:absolute;margin-top:-10px; margin-left:30px" id="'.$row['slno'].'delete" class="table-delete-link">&nbsp;Delete</a> <a id="'.$row['slno'].'update" href="javascript:update(\''.$row['slno'].'\')" class="table-edit-link" style="display:none; position:absolute;margin-top:-10px; margin-left:-15px">Update</a>  <a id="'.$row['slno'].'cancel" href="javascript:cancel(\''.$row['slno'].'\')"  style="display:none; position:absolute; margin-top:-10px; margin-left:30px" class="table-edit-link">&nbsp;Cancel</a> </td>
      				</tr>';
				
			}?>
              
            </table>
            </div>
             <table class="table-short" width="700px">
            
              <tfoot>
                <tr>
                  	<td class="col-first" id="addfirst" ><input id="addfirsttext_box" type="text" class="txtbox-long" /></td>
      				<td class="col-first" id="addsecond" ><input id="addsecondtext_box" type="text" class="txtbox-middle" /></td>
      					<td class="row-nav"><a id="add" href="javascript:add()" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">Add Company</a></td>
                </tr>
                <tr><td colspan="4" align="right" id="next"><a href="javascript:prev()">Prev</a>&nbsp;|&nbsp;<a href="javascript:next()">Next</a></td></tr>
              </tfoot>
              </table><p>&nbsp;</p>
<?php		$result=mysql_query("select * from placement where slno='0' LIMIT 1");
			while($row1 = mysql_fetch_array($result))
			{
				$double=$row1['no_student'];
				$triple=$row1['batch'];
				$date=$row1['name'];
			}
			?>
            <div class="notification" id="notification2" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
            <div style="padding:10px;">
No. of Double Placements : <input type="text" id="double" name="double" value="<?php echo $double;?>" /><br><br>
No. of Triple Placements : <input type="text" id="triple" name="triple" value="<?php echo $triple;?>"/><br><br>
Placement Statistics Till : <input type="text" id="placementdate" name="date" value="<?php echo $date;?>"/><br><br>
<a href="javascript:process()">UPDATE</a>
</div>
            <?php include 'footer.php'; ?>
