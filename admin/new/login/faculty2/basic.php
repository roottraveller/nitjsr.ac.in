<?php
error_reporting(0);
$root='../../';
?>
<html>
<head>
<?php include $root.'department/auth.php' ?>
<?php
if(!$_GET['id'])
{
	echo '<script type="text/javascript">document.location.href="'.$root.'department/index.php?dept=cse&page=home";</script>';
}
$id=$_GET['id'];

$objResult = sprintf("select * from faculty where user_id='%s'",
    		mysql_real_escape_string($id));
			$result=mysql_query($objResult);
			while($row = mysql_fetch_array($result))
			{
				
				$image=$row['path'];
				$qual=$row['qual'];
		
			}
$objResult = sprintf("select * from contact where user_id='%s'",
    		mysql_real_escape_string($id));
			$result1=mysql_query($objResult);
			while($row = mysql_fetch_array($result1))
			{
				$PRENAME=$row['PRENAME'];
                                $FNAME=$row['FNAME'];
                                $LNAME=$row['LNAME'];
								$DESIG=$row['DESIG'];
								$DEPT_ID=$row['DEPT_ID'];
								$OFFICIAL_ADDRESS=$row['OFFICIAL_ADDRESS'];
								$LAND_PH=$row['LAND_PH'];
								$PHONE=$row['PHONE'];
								$E_MAIL=$row['E_MAIL'];
								

			}
			$image=str_replace("../", "../../", $image);
?>
<link href="<?php echo $root; ?>css/innerpage.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>css/innerpage.css" />

<script type="text/javascript" src="js/jquery.1.4.3.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		//init();
            $('#photoimg').live('change', function()			{ 
			           $(".preview").html('');
			    $(".preview").html('<img src="images/ajax-loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '.preview',
						  success:    insert
		}).submit();
			
			});
			$('select#dept option').each(function(index, element) {
                
				if($(element).attr('value')==<?php echo '"'.$dept.'"'; ?>)
				{
					$(element).attr('selected',"selected");
				}
            });
        }); 
 function insert()
 {
	 filename=$(".preview").html();
	 if(filename=="File uploaded. Fill form and save changes.")
	 {
		 value2=document.getElementById('photoimg').value;
		 file=value2.split('\\');
		 filename=file[file.length-1];
		 $('#preimg').attr('src','../../faculty/images/'+filename);
		/*content= $(".preview").html();
		content="<p><img class='facultyimg' src='../../faculty/images/"+filename+"' align='left'></p>";
		$(".preview").html('<img src="../../faculty/images/'+filename+'" class="facultyimg"');*/
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
	background-image:none;
font-family:arial;
}
.preview
{
width:150px;
padding:10px;
color:#cc0000;
display:none;
font-size:12px
}
.text{width:438px;}
.txtarea{width: 438px; height: 112px;max-width: 438px; max-height: 112px;min-width: 438px; min-height: 112px;}
.txtarea2{height: 100px;max-height: 100px;min-height: 100px;}
</style>
</head>
<body>

<table>
	<tr>	
    <td align="left">
    <div class='preview' >
		Upload your image         
    </div><br />
    <img id="preimg" src="<?php echo $image; ?>" class="facultyimg" />
	<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
		<input type="file" name="photoimg" id="photoimg" />
    </form>
    </td>
	<td colspan="2" align="left">
    <form id="basic" method="post" action="process.php?id=<?php echo $id?>">
    	<b><?php echo $PRENAME . ' ' . $FNAME . ' ' . $LNAME; ?></b>
		<h4><?php echo $DESIG;?></h4>
		<?php 
		if($DEPT_ID=='chemistry')
		{
		echo ('<b>Chemistry</b>') ;
		}
		if($DEPT_ID=='civil')
		{
		echo ('<b>Civil Engineering</b>') ;
		}
		if($DEPT_ID=='cse')
		{
		echo ('<b>Computer Science & Engineering</b>') ;
		}
				
		
		
		?>
		
		
         <textarea class="txtarea" name="qual" id="qual" rows="5" cols="31">
         </textarea>
    </td>
    </tr>
</table>
<h3>Contact Details</h3>
<table width="665">
    <tr>
        <td valign="top">
            Residential Address 
        </td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right">
        <textarea class="txtarea txtarea2" name="OFFICIAL_ADDRESS" id="OFFICIAL_ADDRESS" rows="5" cols="31"><?php echo $OFFICIAL_ADDRESS;?>
         </textarea>
        	  </td>
    </tr>
    <tr>
        <td>
            Phone Number
        </td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right">
            <input class="text" type="text" name="LAND_PH" id="LAND_PH" width="200"  maxlength="20" />
        </td>
    </tr>
    <tr>
        <td>
            Mobile Number
        </td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right">
        	<input class="text" type="text" name="PHONE" id="PHONE" width="200" value="<?php echo $PHONE;?>" maxlength="15" />
        </td>
    </tr>                
    <tr>
        <td>
            Email
        </td>    
        <td width="5px" valign="top" align="center">:</td>                
        <td align="right">
        	<input class="text" type="text" name="E_MAIL" id="E_MAIL" value="<?php echo $E_MAIL;?>" width="100" maxlength="30" />
        </td>
    </tr>    
</table>
</form>
