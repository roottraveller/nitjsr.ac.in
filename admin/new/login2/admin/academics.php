<?php 
$page='academics';
include 'head.php';?>
<script type="text/javascript" >
var files;
var status='1';
var limit=0;
var total,total2;
var page=<?php echo '"'.$page.'"';?>;
function init()
{
	if(status=='0')
	{
		<?php 
	$num=mysql_num_rows(mysql_query("select * from ".$page." where status='1' ORDER BY `time` DESC"));?>
	}
	else
	{<?php	
		$num2=mysql_num_rows(mysql_query("select * from ".$page." where status='0' ORDER BY `time` DESC")); ?>
	}
	total=<?php echo $num;?>;
	total2=<?php echo $num2;?>;
	
	str="value="+page+"&status="+status+"&limit="+limit;
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
		
		xmlhttp.open("POST",'content.php',true);
		
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
function changestatus()
{
	if(status=='1')
	{
		document.getElementById("lk").innerHTML='<a href="javascript:changestatus()">show new</a>';
		status='0';
		
	}
	else
	{
		if(status=='0')
		{
		document.getElementById("lk").innerHTML='<a href="javascript:changestatus()">show old</a>';
		status='1';
		
		
		}
	}
	limit=0;
	init();
	
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
var prev,first,second,oldfirst,oldsecond,oldthird,newfirst,newsecond,newthird;
function edit(id)
{
	oldfirst=document.getElementById(id+"first").innerHTML;
	
	oldsecond=document.getElementById(id+"second").innerHTML;
	oldthird=document.getElementById(id+"third").innerHTML;
	if(flag==0)
	{
		first=document.getElementById(id+"first").innerHTML;
   		second=document.getElementById(id+"second").firstChild.innerHTML;
   		document.getElementById(id+"edit").style.display="none";
		document.getElementById(id+"delete").style.display="none";
		document.getElementById(id+"update").style.display="block";
		document.getElementById(id+"cancel").style.display="block";
		document.getElementById(id+"first").innerHTML='<input id="'+id+'firsttext_box" class="txtbox-middle" value="'+first.toString()+'"  ></input>';
		document.getElementById(id+"second").innerHTML='<input id="'+id+'secondtext_box" class="txtbox-long" value="'+second.toString()+'"></input> <a href="javascript:show()">upload</a>';
		flag=1;
		prev=id;
	}
	else
	{
		document.getElementById(prev+"first").innerHTML=first.toString();
		document.getElementById(prev+"second").innerHTML='<a href="'+second.toString()+'">'+second.toString()+'</a>';
		document.getElementById(prev+"edit").style.display="block";
		document.getElementById(prev+"delete").style.display="block";
		document.getElementById(prev+"update").style.display="none";
		document.getElementById(prev+"cancel").style.display="none";
		second=document.getElementById(id+"second").firstChild.innerHTML;
   		first=document.getElementById(id+"first").innerHTML;
		document.getElementById(id+"edit").style.display="none";
		document.getElementById(id+"delete").style.display="none";
		document.getElementById(id+"update").style.display="block";
		document.getElementById(id+"cancel").style.display="block";
		document.getElementById(id+"first").innerHTML='<input id="'+id+'firsttext_box" class="txtbox-middle" value="'+first.toString()+'"  ></input>';
		document.getElementById(id+"second").innerHTML='<input id="'+id+'secondtext_box" class="txtbox-long" value="'+second.toString()+'"></input> <a href="javascript:show()">upload</a>';
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
	if(confirm('are u sure to delete the notification?'))
	{
		if(status=='0')
		{	
		var str="table="+page+"&status=1&id="+id;
		}
		else{
			var str="table="+page+"&status=0&id="+id;
		}
		addDetails(str,"delete.php");
	}
}
function deleteall()
{
	if(confirm('are u sure to delete everything?'))
	{
		if(status=='0')
		{	
		var str="table="+page+"&status=1";
		}
		else{
			var str="table="+page+"&status=0";
		}
		addDetails(str,"deleteall.php");
	}
}
function add()
{
		
		cancel(prev);
		
	oldfirst=document.getElementById("addfirst").innerHTML;
	
	oldsecond=document.getElementById("addsecond").innerHTML;
	oldthird=document.getElementById("addthird").innerHTML;
	var value1=document.getElementById('addfirsttext_box').value;
	var value2;
	
	if(files)
	{
		file=files[0].name.split('\\');
			filename="uploads/"+file[file.length-1];
			value2=filename;
			link2='<a href="../../'+filename+'">'+filename+'</a>';
		for(i=1;files[i];i++)
		{
			file=files[i].name.split('\\');
			filename="uploads/"+file[file.length-1];
			value2+="#"+filename;
			link2+='<br><a href="../../'+filename+'">'+filename+'</a>';
			
		}
		document.getElementById('addsecondtext_box').value=value2;
	}
	else
	{
		value2=document.getElementById('addsecondtext_box').value;
	}
	var value3;
	if(document.getElementById("addnew").checked)
	{
		value3=1;
		newthird='<input type="checkbox" id="addnew" checked="checked"/>' ;
	}
	else
	{
		value3=0;
		
		newthird='<input type="checkbox" id="addnew"/>' ;
	}
	newfirst=value1;
	
	newfirst=value1;
	newsecond=link2;
	
	if(filename=="")
	{
		filename="undefined";
	}
	if(value1=="")
	{
		document.getElementById("notification").innerHTML="plz check the enteries before submission";
		
	}
	else
	{
	var str='value='+value1.toString()+'&link='+value2+'&new='+value3+'&table='+page;
	addDetails(str,"insert.php");
	}
}
function update(id)
{
	var value1=document.getElementById(+id+'firsttext_box').value;
	var value2;
	if(document.getElementById('photoimg').value)
	{
		value2=document.getElementById('photoimg').value;
		
		document.getElementById(id+'secondtext_box').value=value2;
	}
	else
	{
		value2=document.getElementById(id+'secondtext_box').value;
	}
	var value3;
	if(document.getElementById(id+"new").checked)
	{
		value3=1;
		newthird='<input type="checkbox" id="'+id+'new" checked="checked"/>' ;
	}
	else
	{
		value3=0;
		
		newthird='<input type="checkbox" id="'+id+'new"/>' ;
	}
	newfirst=value1;
	newsecond='<a href="../../'+value2+'">'+value2+'</a>';
	if(value1=="" || value2=="")
	{
		document.getElementById("notification").innerHTML="plz check the enteries before submission";
	}
	else
	{
	var str='value='+value1.toString()+'&link='+value2+'&new='+value3+'&table='+page+'&id='+id;
	updateDetails(str,id,"update.php");
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
					document.getElementById(id+'third').innerHTML = newthird;
				}
				else {
					document.getElementById('notification').innerHTML = "Sorry! Something went Wrong.<br>Please Try again.";
					document.getElementById(id+'first').innerHTML = oldfirst;
					document.getElementById(id+'second').innerHTML = oldsecond;
					document.getElementById(id+'third').innerHTML = oldthird;
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
</script>
<div id="temp" style="display:none;position:absolute; background:#f3f3f3; padding:50px 50px; border:#000 thin groove; width:300px; height:30px; margin-left:150px; margin-top:30px; text-align:center; vertical-align:middle"> <a href="javascript:close2()" style="float:right; margin-top:-40px; margin-right:-30px">close</a>


<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		init();
            $('#photoimg').live('change', function()
						{ 
			files=document.getElementById('photoimg').files;
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



<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload your file <input type="file" name="photoimg[]" id="photoimg" multiple="multiple"/>
</form>
<div id='preview'>
</div>

<div id='preview'>
</div></div>
<div class="notification" id="notification" style="width:100%; background-color:#FF0; color:#F00; text-align:center"></div>
<table class="table-short" width="700px">
<tfoot>
<tr><td colspan="4" align="right" id="next"><a href="javascript:prev()">Prev</a>&nbsp;|&nbsp;<a href="javascript:next()">Next</a></td></tr>
</tfoot></table>
           <table class="table-short" width="700px">
              <thead>
                <tr>
                  <td width="200px">title</td>
                  <td width="340px">link</td>
                  <td width="44px">new</td>
                  <td>options</td>
                </tr>
              </thead>
              </table>
<table class="table-short" width="700px">
<tfoot>
        <tr>
            <td class="col-first" id="addfirst" ><input id="addfirsttext_box" type="text" class="txtbox-middle" size="100" /></td>
      		<td class="col-first" id="addsecond" ><input id="addsecondtext_box" type="text" class="txtbox-long" /><a href="javascript:show()">upload</a> </td>
      		<td class="col-third" id="addthird"><input id="addnew"checked="checked"type="checkbox"></td>
      					<td class="row-nav"><a id="add" href="javascript:add()" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">add</a>   <a href="javascript:deleteall()" style=" position:absolute;margin-top:-10px; margin-left:30px" id="adddelete" class="table-delete-link">&nbsp;Delete ALL</a> </td>
                </tr>
              </tfoot>
              </table>
              <div id="tb">
              <table  class="table-short" width="700px" cellpadding="5px">
            
              
              
                <?php $result=mysql_query("select * from ".$page);
			while($row = mysql_fetch_array($result))
			{
				echo '<tr class="odd" >
      					<td class="col-first" id="'.$row['no'].'first" >'.$row['notification'].'</td>
      					<td class="col-second" id="'.$row['no'].'second"><a href="'.$row['link'].'">'.$row['link'].'</a></td>
      					<td class="col-third" id="'.$row['no'].'third"><input id="'.$row['no'].'new"';
				if($row['new']==1)
				echo' checked="checked"';
				echo 'type="checkbox"></td>
      					<td class="row-nav"><a id="'.$row['no'].'edit" href="javascript:edit(\''.$row['no'].'\')" style=" position:absolute;margin-top:-10px; margin-left:-15px" class="table-edit-link">Edit</a>   <a href="javascript:deleterow(\''.$row['no'].'\')" style=" position:absolute;margin-top:-10px; margin-left:30px" id="'.$row['no'].'delete" class="table-delete-link">&nbsp;Delete</a> <a id="'.$row['no'].'update" href="javascript:update(\''.$row['no'].'\')" class="table-edit-link" style="display:none; position:absolute;margin-top:-10px; margin-left:-15px">Update</a>  <a id="'.$row['no'].'cancel" href="javascript:cancel(\''.$row['no'].'\')"  style="display:none; position:absolute; margin-top:-10px; margin-left:30px" class="table-edit-link">&nbsp;Cancel</a> </td>
      				</tr>';
				
				$title=$row['title'];
				$content=$row[$page];
				
			}?>
            </table>
            </div>
             <table class="table-short" width="700px">
            
              <tfoot>
                <tr><td colspan="4" align="right" id="next"><a href="javascript:prev()">Prev</a>&nbsp;|&nbsp;<a href="javascript:next()">Next</a></td></tr>
              </tfoot>
              </table>
            <?php include 'footer.php'; ?>
