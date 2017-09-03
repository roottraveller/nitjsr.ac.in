<?php
error_reporting(0);
define('isDOCTYPE',1375);
include '../admin/auth.inc.php'; 
include '../validate.inc.php';

$root='../../';
?>
<?php include $root.'department/auth.php' ?>
<?php
if(!$_GET['id'])
{
	include "../error.php";
	exit();
	//header('Location:../error.php');
}
$id=$_GET['id'];

$objResult = sprintf("select * from COURSE where ID='%s'",
    		mysql_real_escape_string($id));
			$result=mysql_query($objResult);
			




?>
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
var assistvisible=false;
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
function assistants()
{
	if(assistvisible){
		document.getElementById('assist').style.display='none';
		document.getElementById('assist1').style.display='none';
		assistvisible=false;
	}
	else{
		document.getElementById('assist').style.display='table';
		document.getElementById('assist1').style.display='block';
		assistvisible=true;
	}
}
</script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/innerpage.css" />
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	function init(){
	tinyMCE.init({
		// General options
		
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "autolink,lists,style,table,advhr,advimage,advlink,iespell,inlinepopups,insertdatetime,preview,searchreplace,print,contextmenu,paste,directionality,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 :"bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,|,cut,copy,paste",
		theme_advanced_buttons2 : "search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,code,|,insertdate,inserttime",
		theme_advanced_buttons3 : "tablecontrols,|,charmap,iespell,advhr,|,styleprops",
		theme_advanced_button4 : "forecolor,backcolor,|,hr,removeformat,|,sub,sup",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,
		width:"700",
		height:"500",

		// Example content CSS (should be your site CSS)
		content_css : "../../css/innerpage.css",

		// Drop lists for link/image/media/template dialogs		
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",

		formats : {
			alignleft : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
			aligncenter : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
			alignright : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
			alignfull : {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
			bold : {inline : 'span', 'classes' : 'bold'},
			italic : {inline : 'span', 'classes' : 'italic'},
			underline : {inline : 'span', 'classes' : 'underline', exact : true},
			strikethrough : {inline : 'del'}
		}
	});
	}
</script>
<script type="text/javascript" src="js/jquery.1.4.3.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>



<script type="text/javascript" >
 $(document).ready(function() { 
		init();
            $('#photoimg').live('change', function()			{ 
			           $(".preview").html('');
			    $(".preview").html('<img src="images/ajax-loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '.preview',
						  success:    insert
		}).submit();
			
			});
			
			//function to replace txttoplink
			$('a.txttoplink').eq(2).attr('href','../logout.php').html('Logout');
			$('span.txttoplink').find('img').eq(2).attr('src','../../images/logout.png');
			val=<?php if(decrypt($_SESSION['user_group'])!="admin"){echo decrypt($_SESSION['user_uid']);}else echo $_GET['id']; ?>;
			$('a.txttoplink').eq(1).attr('href','settings.php?id='+val).html('Settings').attr('target','_self');
			$('span.txttoplink').find('img').eq(1).attr('src','../../images/settings.png');
        }); 
 function insert()
 {
	 filename=$(".preview").html();
	 if(filename=="file uploaded click on close n fill form and save changes.")
	 {
		 value2=document.getElementById('photoimg').value;
		 file=value2.split('\\');
		 filename=file[file.length-1];
		content= $("#elm1").html();
		content="<p><img class='facultyimg' src='../../faculty/images/"+filename+"' align='left'></p><p>&nbsp;</p>";
		$("#elm1").html("");
		tinyMCE.execCommand('mceReplaceContent',false,content);
		return false;
	 }
	 else
	 {
		 alert(filename);
	 }
 }
 


</script>

<style>

body
{
font-family:arial;
}
.preview
{
text-align:center;
width:400px;
height:50px;
padding:10px auto;
color:#cc0000;
font-size:12px;
margin:20px auto;
}

</style>
</head>
<body>

<div id="wrapper_top" >
<?php include '../header1.php' ?>
</div>
<div id="wrapper" >
<!--sidetab starts here-->
<div id="sidetab"><div class="sidetab_title">
<div id="title">
  <div class="txtheading" align="left">Account

  </div>
</div>
</div>
<div class="containerrr">

<div class="lists">
<ul>
<li><a href="index.php?id=<?php echo $id;?>" class="txtdarkgrey">Home</a></li>

<li><a href="update1.php?id=<?php echo $id;?>" class="txtdarkgrey">Update Profile</a></li>
<li><a href="add.php?id=<?php echo $id;?>" class="txtdarkgrey">Add Details</a></li>
<li><a href="course.php?id=<?php echo $id;?>" class="txtdarkgrey">Courses Taught</a></li>
<li><a href="settings.php?id=<?php echo $id;?>" class="txtdarkgrey">Change Password</a></li>
<li><a href="../logout.php" class="txtdarkgrey">Logout</a></li>
<!-- for new result with flashing new icon
<li><a href="" class="txtdarkgrey">Results <img src="images/new.gif" align="bottom"  width="35" height="13"></a></li> -->
<!--<li><a href="<?php echo $root;?>quick_link/community.php" class="txtdarkgrey">Communities</a></li>-->

  </ul>
</div>
<img src="<?php echo $root;?>images/sidetab_btm.jpg" >
</div>

  
  
  <div class="spacer"></div>
  <div class="spacer"></div>
    <div class="spacer"></div>
	  <div class="spacer"></div>
<!-- side links starts -->
 <!-- side links ends -->
   <div class="spacer"></div>
</div>

<!--sidetab ends-->
<div class="main_content">
<div class="pageheading">
<span style="text-transform:capitalize;">Upload Courses Handout</span>
</div>  
<div class="pagecontent">




<form id="imageform" method="post" enctype="multipart/form-data" action='courseprocess.php?id=<?php echo $id; ?>'>
<table class="pageftablecontent">

            
            	
                
								
		
		
        <table width="665">
	<?php
$COURSE=array();
$COURSEPDF=array();
$S_NO=array();
$i=1;
$k=0;
?>
			   <?php  while ($row = mysql_fetch_array($result))
{?>
<?php
if($k==0)
{
echo('<span class="pagesubheading">Update Course Handout</span>');
echo('<img src="../../images/h2.png" width="100%" />');
}
?>		
<input type="hidden" name="S_NO[]" value="<?php echo $row['S_NO'];?>">
    <tr>
        
        <td align="center">Course Name
         </br> 
																								
        	  </td>
			  <td><input  type="text" name="COURSE[]" id="COURSE[]" value="<?php echo $row['COURSE'];?>" style=" width:200px"  maxlength="20" />
        
			  
		 </td>
		 <td><input type="file" name="COURSEPDF[]" id="COURSEPDF[]" value="<?php echo $row['COURSEPDF'];?>">
			 </td> 
<?PHP
		 $S_NO[$k]=  $row['S_NO'];
		 ?>
		 <?php $k++;} ?></br>
</table>
	
	
			<?php if ($k!=0) {	?>																							
			<input name="Upload" type="submit" id="upload" value="update"  style="margin-top:10px;" ></br>
                <?php } ?>
		</form>
<span class="pagesubheading">Insert Courses Handout</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />

<form id="imageform" method="post" enctype="multipart/form-data" action='courseprocess1.php?id=<?php echo $id; ?>'>
<table class="pageftablecontent">

            
            	
                
								
		
		
        <table width="665">
			   
    <tr>
        
        <td align="center">Course Name
         </br> 
																								
        	  </td>
			  <td><input  type="text" name="COURSE" id="COURSE"  style=" width:200px"  maxlength="20" />
        
			  
		 </td>
		 <td><input type="file" name="COURSEPDF" id="COURSEPDF">
			 </td> 

</table>
	
	
																							
			<input name="Upload" type="submit" id="upload" value="upload"  style="margin-top:10px;" ></br>
                
		</form>


<a href="<?php echo $root; ?>faculty/index.php?id=<?php echo $id; ?>" target="_blank" style="text-decoration:underline; font-weight:bold;">Preview this page</a><div class="preview" ></div>
</div>
</div>
</div>
<?php include '../footer1.php' ?>
</body>
</html>

