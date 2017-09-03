
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$conn=mysql_connect('localhost','root','');
	$db= mysql_select_db('nit');
	$title=$_POST[title];
	
	$link=$_POST[link];
	
	$view = (isset($_REQUEST['view']));
	//assigning value to view checkbox
    if ($view == 1 )
      {
        $view = 1;
      }
    else
     {
       $view = 0;
     }
	 
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
	   
	   echo "<script type=text/javascript>alert('Image already exists! change image name or upload another image');
	     window.history.back(); </script>";
   
      }
	  
	  
    else
      
	  
	  {
		    
            $thum ="upload/".$_FILES['file']['name'];
             move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/". $_FILES["file"]["name"]);
     
	  $sql="INSERT INTO tabs (thumbnails,link,events,news,important_links,title,date,view) VALUES ('$thum','$link',0,0,1,'$title',NOW(),'$view')" ;
	 

	  }
  
	
		if (mysql_query($sql)){
echo  "<script type=text/javascript> alert('your Notification has been uploaded successfully !! click to upload another file....');
 window.history.back(); </script>";
  
  }

else { echo "error<br>" . mysql_error();}
	?>
</body>
</html>
