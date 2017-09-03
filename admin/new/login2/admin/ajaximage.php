<?php
error_reporting(0);
$count=0;
echo '<ol type="1" style="text-align:left">';
if(count($_FILES['photoimg'])) {
	$file=$_FILES['photoimg'];
for ($i=0;$file['name'][$i];$i++) {
if ((($file["type"][$i] == "image/gif")
|| ($file["type"][$i] == "image/jpeg")
|| ($file["type"][$i] == "image/jpg")
|| ($file["type"][$i] == "image/pjpeg")
|| ($file["type"][$i] == "application/pdf")
|| ($file["type"][$i] == "application/msword")))
{
if ($file["error"][$i] > 0)
{
echo "<li>Return Code: " . $file["error"][$i] . "</li>";
}
else
{
/*echo "Upload: " . $_FILES["photoimg"]["name"] . " &nbsp;";
echo "Type: " . $_FILES["photoimg"]["type"] . "&nbsp;";
echo "Size: " . ($_FILES["photoimg"]["size"] / 1024) . " Kb&nbsp;";
echo "Temp file: " . $_FILES["photoimg"]["tmp_name"] . "&nbsp;";
*///check the file into its room

      
   if (file_exists("../../uploads/" . $file["name"][$i]))
  {
  echo "<li>".$file["name"][$i] . " already exists. change file name and upload</li>";
  }
else
  {
  move_uploaded_file($file["tmp_name"][$i],
  "../../uploads/" . $file["name"][$i]);
//  echo "Stored in: " . "uploads/" . $_FILES["photoimg"]["name"];
 echo "<li>".$file['name'][$i].' uploaded click on close n fille form and save changes.</li>';
  }
    
  

  }
  }
 else
 {
 echo "<li>".$file['name'][$i]." check format and size (<1MB))</li>";
 }
 }
}
?>
