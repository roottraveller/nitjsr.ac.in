<?php include 'auth.inc.php'; ?>
<?php include 'loggedin.php' ; ?>
<?php
// Start a session for error reporting

session_start();
if ($_FILES["img"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["img"]["error"] . "<br>"."no image selected";
    }
  else
    {
    if (file_exists("../../galleria/themes/classic/images/" . $_FILES["img"]["name"]))
      {   
	   echo "<script type=text/javascript>alert('Image already exists !!!! change Image name or upload another Image...');
	     window.history.back(); </script>";
   
      }
    else
      {
      move_uploaded_file($_FILES["img"]["tmp_name"],
      "../../galleria/themes/classic/images/". $_FILES["img"]["name"]);
      echo "Stored in: " . "../../galleria/themes/classic/images/" . $_FILES["img"]["name"];
      
	
	 
$text=$_POST['text'];
$name= $_FILES["img"]["name"];
$type=  $_FILES["img"]["type"];
$link= "images/". $_FILES["img"]["name"];
$sql="INSERT INTO image (text,link) VALUES ('$text','$link')";

if (mysql_query($sql)){
echo  "<script type=text/javascript>alert('Image uploaded successfully !! click to upload another Image....');
 window.history.back(); </script>";
  
  }

else {echo "error<br>" . mysql_error();}} }

  //show list
 ?>