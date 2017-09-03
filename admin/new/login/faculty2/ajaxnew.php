
<?php

include('../../department/auth.php');

session_start();
$session_id='1'; //$session id
$path = "../../faculty/images/";
$path1 = "../faculty/images/";
$id=$_GET['id'];

    $valid_formats = array("jpg", "png", "gif", "bmp");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];
            
			$path2 = $path1.$name;
            if(strlen($name))
                {
                    
                    if($size<(1024*1024))
                        {
  // $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;

          $tmp = $_FILES['photoimg']['tmp_name'];

           if(move_uploaded_file($tmp, $path.$name))
                                {
//echo  $path.$actual_image_name;
                   mysql_query("UPDATE qual SET path = '$path2' WHERE user_id='$id'" ) or die(mysql_error());
				   
				   echo 'uploaded successfully';
                                }
                            else
                                echo "failed";
                        }
                        else
                        echo "Image file size max 1 MB";                    
                        }
                        else
                        echo "Invalid file format..";   
                }
                
            else
                echo "Please select image..!";
                
 exit;
 
?>
