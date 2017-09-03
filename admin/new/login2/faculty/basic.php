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
				$title=$row['name'];
				$image=$row['path'];
				$desig=$row['desig'];
				$dept=$row['dept'];
				$qual=$row['qual'];
				$add=$row['address'];
				$phone=$row['phone'];
				$mob=$row['mobile'];
				$email=$row['email'];	
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
    <form id="basic" method="post" action="process.php?id=<?php echo id?>">
    	<input type="text" name="name1" id="name1" width="100" value="<?php echo $title;?>" maxlength="40" /><br>
		<input type="text" name="designation" id="designation" value="<?php echo $desig;?>"  width="200" maxlength="100" />, <select id="dept" name="dept">
                                                                                                   <option value="Select" selected>Select Department</option>                                                                                                     
                                                                                                    <option value="Chemistry">Chemistry Department</option>
                                                                                                    <option value="Civil Engineering">Civil Engineering</option>                                                                                                    
                                                                                                    <option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering</option>
                                                                                                    <option value="Computer Applications">Computer Applications</option>
                                                                                                    <option value="Electrical &amp; Electronics Engineering">Electrical &amp; Electronics Engineering</option>
                                                                                                     <option value="Electronics &amp; Communication Engineering">Electronics &amp; Communication Engineering</option>
                                                                                                    <option value="Maths &amp; Humanities">Maths &amp; Humanities</option>
                                                                                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                                                                    <option value="Metallurgicalical &amp; Materials Engineering">Metallurgical &amp; Materials Engineering</option>
                                                                                                    <option value="Physics">Physics Department</option>
                                                                                                    <option value="Production &amp; Industrial Engineering">Production &amp; Industrial Engineering</option>
                                                                                                </select>
         <textarea class="txtarea" name="qualification" id="qualification" rows="5" cols="31"><?php echo $qual;?>
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
        <textarea class="txtarea txtarea2" name="residence" id="residence" rows="5" cols="31"><?php echo $add;?>
         </textarea>
        	  </td>
    </tr>
    <tr>
        <td>
            Phone Number
        </td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right">
            <input class="text" type="text" name="pnumber" id="pnumber" width="200" value="<?php echo $phone;?>" maxlength="20" />
        </td>
    </tr>
    <tr>
        <td>
            Mobile Number
        </td>
        <td width="5px" valign="top" align="center">:</td>
        <td align="right">
        	<input class="text" type="text" name="mnumber" id="mnumber" width="200" value="<?php echo $mob;?>" maxlength="15" />
        </td>
    </tr>                
    <tr>
        <td>
            Email
        </td>    
        <td width="5px" valign="top" align="center">:</td>                
        <td align="right">
        	<input class="text" type="text" name="email" id="email" value="<?php echo $email;?>" width="100" maxlength="30" />
        </td>
    </tr>    
</table>
</form>
