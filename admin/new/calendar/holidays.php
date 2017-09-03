<?php 
error_reporting(0);
$con = mysql_connect('localhost','root','nitjsracin');

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("nit", $con);
?>
<?php session_start(); ?>
<?php $root='../'?>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
		
<link rel="stylesheet" type="text/css" href="default.css">


<script>

var xmlhttp
function loadContent(mnth,yr)
{
var year=yr;
var month=mnth;
document.getElementById('cal_evnt').innerHTML='';
document.getElementById('ldng').style.display='block';
var url='find_calendar.php';
if(!(year=='' || month==''))
url=url+'?year='+year+'&month='+month;

//alert(url);

 xmlhttp=GetXmlHttpObject();

  if (xmlhttp==null)
  {
   alert ("Your browser does not support Ajax HTTP");
   return;
  }

   
    xmlhttp.onreadystatechange=getOutput;
    xmlhttp.open("POST",url,true);
    xmlhttp.send(null);
}

function getOutput()
{

  if (xmlhttp.readyState==4)
  {
  var tmp=xmlhttp.responseText;
  //alert(tmp);
  	document.getElementById('ldng').style.display='none';
	document.getElementById('cal_evnt').innerHTML=tmp;
    }
}

function GetXmlHttpObject()
{
    if (window.XMLHttpRequest)
    {
       return new XMLHttpRequest();
    }
    if (window.ActiveXObject)
    {
      return new ActiveXObject("Microsoft.XMLHTTP");
    }
 return null;
}
</script>
					
</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="Nishant Kumar" />
<meta http-equiv="contact" content="nishantkumar35@gmail.com" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />



   
<title>NIT Jamshedpur</title>  

<script type="text/javascript">
var idd=1;
function vsbl(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
var b=document.getElementById("chk_butn"+idd);
var dv1=document.getElementById("chk"+id);
var dv2=document.getElementById("chk"+idd);
dv2.style.visibility='hidden';
dv1.style.visibility='visible';
a.style.background='#4F99C5';
a.style.color='#fff';
b.style.background='#ffffff';
b.style.color='#C02630';
idd=id;
}
}
function btn(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#4F99C5';
}
}
function btn_r(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#C02630';
}
}

</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">
 
</head>


<div id="bg" >

<?php include $root.'header.php' ?>
</div>

<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">

  <span>List of Holidays</br></span>
</div>
<div class="pagecontent">


<body onLoad="javascript:loadContent('','');">
<center>
<div id="ldng"><img src="../images/load.gif" width="30px" height="30px">Loading......</div>
<div id="cal_evnt"></div>
</br><a href="../calendar/calendar.php"><b>Click here</b> </a>to view the academic calendar.</br></br>
<a href="../calendar/holidays.php"><b>Click here </b> </a>to view the list of holidays.</br>
<table class="pagetablecontentcal" border="0"style="float:left"width="100%">
<tr class="tablehead"><td>S.no</td><td>Event </td><td>Event end</td><td>Event Name</td></tr></center>
	<?php $j=1;
    mysql_select_db(nit); 
    $objResult = sprintf("select * from events where holidays=1 order by id");
	
			$result=mysql_query($objResult);
    while($row = mysql_fetch_array($result))
			{
				$id=$row['id'];
				$event_date=$row['event_date'];
				$event_end_date=$row['event_end_date'];
				$event=$row['event'];
			
    ?>
	 <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
	<td><?php echo $j; $j++;?></td>
	<td><?php echo $event_date;?></td>
	<td><?php echo $event_end_date;?></td>
	<td><?php echo $event;?></td>
	 </tr>
	<?php }?>
	</table>
	

    
    
    

</div>
</div>

</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<?php include '../footer.php'?>
</body></html>
