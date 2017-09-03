<?php include 'auth.inc.php'; ?>
<?php include 'loggedin.php' ; ?>
<?php
	$title =$_POST['title'];
	//$d=$_POST['datum1'];
	$main = (isset($_REQUEST['main']));
	//assigning value to main checkbox
    if ($main == 1 )
      {
        $main = 1;
      }
    else
     {
       $main = 0;
     }
	 //assigning value to tender
	 $tender = (isset($_REQUEST['tender']));
    if ($tender == 1 )
      {
        $tender = 1;
      }
    else
     {
       $tender = 0;
     }
	//assigning value to recruitment checkbox
	$recruitment = (isset($_REQUEST['recruitment']));
    if ($recruitment == 1 )
      {
        $recruitment = 1;
      }
    else
     {
       $recruitment = 0;
     }
	 //assigning value foe NEW checkbox
	 $new = (isset($_REQUEST['new']));
    if ($new == 1 )
      {
        $new = 1;
      }
    else
     {
       $new = 0;
     }
	 if($main==1 || $tender==1 || $recruitment==1 )
	{ 
	    $status=1;
	}
	else
	{
	  $status=0;
	  }
	 
	 
	/*$main=$_POST['main'];
	$tender=$_POST['tender'];
	$recurit=$_POST['recurit'];
	$new=$_POST['new'];
/*$allowedExts = array("gif", "jpeg", "jpg", "png","pdf", "doc","ppt", "docx","msword");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "application/rtf")
|| ($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "text/pdf")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/zip")
|| ($_FILES["file"]["type"] == "application/rar")
|| ($_FILES["file"]["type"] == "application/doc")
|| ($_FILES["file"]["type"] == "application/docx")
|| ($_FILES["file"]["type"] == "application/ppt")
|| ($_FILES["file"]["type"] == "application/tgz")
|| ($_FILES["file"]["type"] == "application/txt")
|| ($_FILES["file"]["type"] == "application/psd")
|| ($_FILES["file"]["type"] == "application/ppt")
|| ($_FILES["file"]["type"] == "application/wps")
|| ($_FILES["file"]["type"] == "application/ai")  //Adobe Illustrator document
|| ($_FILES["file"]["type"] == "application/ascii")
|| ($_FILES["file"]["type"] == "application/utf-8")
|| ($_FILES["file"]["type"] == "application/rtf"))
&& ($_FILES["file"]["size"] < 50485760)/*file max size 50MB       
&& in_array($extension, $allowedExts))
  {*/

     $number_of_file_fields = 0;
    $number_of_uploaded_files = 0;
    $number_of_moved_files = 0;
    $uploaded_files = array();
    $upload_directory = '../../uploads/'; //set upload directory
    /**
     * we get a $_FILES['images'] array ,
     * we procee this array while iterating with simple for loop
     * you can check this array by print_r($_FILES['images']);
     */
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        $number_of_file_fields++;
        if ($_FILES['file']['name'][$i] != '') { //check if file field empty or not
		    $number_of_uploaded_files++;
            $uploaded_files[] ="uploads/".$_FILES['file']['name'][$i];
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $upload_directory.$_FILES['file']['name'][$i])) {
                $number_of_moved_files++;
            }
 
        }
 
    }
	$link= implode('#', $uploaded_files);


$sql="INSERT INTO notifications (notification,link,main,tender,recruitment,new,time,status) VALUES ('$title','$link','$main','$tender','$recruitment','$new',now(),'$status')";

if (mysql_query($sql)){
echo  "<script type=text/javascript>alert('your Notification has been uploaded successfully !! click to upload another file....');
 window.history.back(); </script>";
  
  }

else {echo "error<br>" . mysql_error();}

  //show list
 ?>