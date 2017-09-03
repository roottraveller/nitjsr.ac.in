
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

	$title_link=$_POST[link];
	
	$y=$_POST['year'];
$m=$_POST['month'];
$d=$_POST['day'];
$date=$d."th  ".$m."  ".$y;
	
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
		    
            $lin ="upload/".$_FILES['file']['name'];
             move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/". $_FILES["file"]["name"]);
     
	 
	 if($title_link == 0){
	 
	 $link= $lin;}
	 else
	 {
	  $link=$title_link; }
	 
	 
   
	$sql="INSERT INTO tabs (title,link,events,news,important_links,date,view) VALUES ('$title','$link',0,1,0,'$date','$view')" ;
		if (mysql_query($sql)){
echo  "<script type=text/javascript> alert('your Notification has been uploaded successfully !! click to upload another file....');
 window.history.back(); </script>";
  
  }

else { echo "error<br>" . mysql_error();
}
	?>
</body>
</html>
