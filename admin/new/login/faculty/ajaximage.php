<?php
error_reporting(0);
if ((($_FILES["photoimg"]["type"] == "image/gif")
|| ($_FILES["photoimg"]["type"] == "image/jpeg")
|| ($_FILES["photoimg"]["type"] == "image/png")))
{
if ($_FILES["photoimg"]["error"] > 0)
{
echo "Return Code: " . $_FILES["photoimg"]["error"] . "<br />";
}
else
{
/*echo "Upload: " . $_FILES["photoimg"]["name"] . " &nbsp;";
echo "Type: " . $_FILES["photoimg"]["type"] . "&nbsp;";
echo "Size: " . ($_FILES["photoimg"]["size"] / 1024) . " Kb&nbsp;";
echo "Temp file: " . $_FILES["photoimg"]["tmp_name"] . "&nbsp;";
*///check the file into its room
if (file_exists("../../faculty/images/".$_FILES["photoimg"]["name"]))
  {
 	 echo 'Filename already exists, Change file-name and upload ';
  }
else
  {
  		move_uploaded_file($_FILES["photoimg"]["tmp_name"],"../../faculty/images/".$_FILES["photoimg"]["name"]);
//  echo "Stored in: " . "uploads/" . $_FILES["photoimg"]["name"];
 		echo 'File uploaded. Fill form and save changes.';
		 
		 
		
		
		
  }
  }
  }
 else
 {
 echo "Check format and size (<1MB))";
 }

?>
