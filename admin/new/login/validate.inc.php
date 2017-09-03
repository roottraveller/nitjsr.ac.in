<?php
session_start();
if(isDOCTYPE !== 1375) // Not identical to 1375
{
    include"error.php";
}

define('SALT', '2dAtaghReSP0xw23uLP');
function generate_code($length = 10)
{
 
    if ($length <= 0)
    {
        return false;
    }
 
    $code = "";
    $chars = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
    srand((double)microtime() * 1000000);
    for ($i = 0; $i < $length; $i++)
    {
        $code = $code . substr($chars, rand() % strlen($chars), 1);
    }
    return $code;
 
}

function sendMail($to, $subject, $message, $from)
{
 
 
    $from_header = "From: $from";
 
    if (mail($to, $subject, $message, $from_header))
    {
        return true;
    } else
    {
		return false;
		//change to false when use on server**********************************************************
    }
    return false;
}
 


function isLoggedIn()
{
	global $secret_word;
        global $id;
        //echo $_COOKIE['id'];
	// receiving and verifying the cookie
	list($cookie_id,$cookie_hash) = explode('-',$_COOKIE['id']);
	
	//echo decrypt($_SESSION['emcMd'])." -- ".decrypt($_SESSION['cmkLo']);
	
	if (md5($secret_word.$cookie_id) == $cookie_hash) 
	{
 	   $id = $cookie_id;
	} 
	else 
	{
  	  return false;
	}	
	 
	
    if (session_is_registered('cmkLo') && session_is_registered('emcMd'))
    {
    	if(($_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT']) && ($_SESSION['user_IP'] == $_SERVER['REMOTE_ADDR']))
    	{
		if(user_check_login(decrypt($_SESSION['emcMd']),decrypt($_SESSION['cmkLo']),decrypt($_SESSION['user_uid']),decrypt($_SESSION['user_group'])))
		{
			
	
			//session_name("CdmLog");
			
			session_regenerate_id(TRUE);
			//echo "i m at 1";
        		return true; // the user is loged in
		}
		else
		{
		//echo "i m at 2";
			return false;
		}
	}
	else
	{
	//echo "i m at 3";
		return false;
	}
			
    } else
    {
    //echo "i m at 4";
        return false; // not logged in
    }
// echo "i m at 5";
   // return false;
 
}
 
function checkLogin($user, $p)
{
global $seed; // global because $seed is declared in the header.php file
global $fake;
  //echo"check 1";
    if (!valid_user($user) || !valid_password($p) || !user_exists_login($user))
    {
   // echo"check 2";
        return false; // the name was not valid, or the password, or the username did not exist
    }

    else
	{
			
	//Now let us look for the user in the database.
    $query = sprintf("SELECT loginid,groupName,uid FROM user WHERE uname = '%s' AND pass = '%s' AND activated = 1 LIMIT 1;", mysql_real_escape_string($user), mysql_real_escape_string(sha1($p . $seed)));
    
    $result = mysql_query($query);
    // If the database returns a 0 as result we know the login information is incorrect.
    // If the database returns a 1 as result we know  the login was correct and we proceed.
    // If the database returns a result > 1 there are multple users
    // with the same username and password, so the login will fail.
	     
    	if (mysql_num_rows($result) != 1)
    	{
			
     	   return false;
   	 }
   	 else
   	 {
		
		// Login was successfull
		
        	$row = mysql_fetch_array($result);
        	
        	// Save the login ID for use later
        	$_SESSION['cmkLo'] = encrypt($row['loginid']+$fake);
        	
        	// Save the email for use later
        	$_SESSION['emcMd'] =encrypt($user);
        	
        	// save user agent
        	$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
        	
        	// save user IP
        	$_SESSION['user_IP']=$_SERVER['REMOTE_ADDR'];
			//save group
			$_SESSION['user_group']=encrypt($row['groupName']);
			//save uid
			$_SESSION['user_uid']=encrypt($row['uid']);
			
        	$date=date(" d/m/Y   g:i:s a ");
        	
        	$query = sprintf("UPDATE user SET ip='%s', time='%s' where loginid='%s' LIMIT 1;", mysql_real_escape_string($_SERVER['REMOTE_ADDR']), mysql_real_escape_string($date),mysql_real_escape_string($row['loginid']));
        	$result=mysql_query($query);
        	if(!$result)
        	{
        		echo 'error in updating ip';
        	}
        	// set cookies
        	global $secret_word;
        	global $id;
			$hash = md5($secret_word.$id);
			setcookie('id',$id.'-'.$hash);
			
			//echo $_COOKIE['id']."  ---   ".$hash;
			//echo decrypt($_SESSION['emcMd'])." -- ".decrypt($_SESSION['cmkLo']);
			//redirect to user page
			if($row['groupName']=="admin")
			{
				
				
				header('Location: admin/index.php');
				return true;
			}
			else
			{
				if($row['groupName']=="faculty")
				{
					header('Location: faculty/index.php?id='.$row['uid']);
					// Now we show the userbox
					return true;
				}
			}
    	}
	}
    return false;
}

function find_uid($email)
{
	$find_uid = mysql_fetch_array(mysql_query("select loginid from user where email='$email' and activated=1 LIMIT 1"));
	$uid = $find_uid['loginid'];
	return $uid;
}

function sendLostPasswordEmail($email, $newpassword)
{
 
    global $domain;
    $message = "
You have requested a new password on http://www.$domain/,
 
Your new password information:
 
password:  $newpassword
 
 
Regards
$domain Administration
";
 
    if (sendMail($email, "Your password has been reset.", $message, "admin@$domain"))
    {
        return true;
    } else
    {
        return false;
    }
 
 
}

function valid_email($email)
{    //echo"check 3";
	$email=htmlentities(trim($email));
	
	if(!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $email)))
	{
		return false;
	}
	else if(empty($email))
	{
		return false;
	}
	else
	{
		return true;
	}
}
function valid_user($user)
{    
	$user=htmlentities($user);
	
	if(strlen($user) < 6 )
	{
		return false;
	}
	else if(empty($user))
	{
		return false;
	}
	else if(preg_match('/[^0-9A-Za-z/._\-\s]/',$user))
	{
		return false;
	}
	else
	{//echo"check 4";
		return true;
	}
}

function valid_password($pass)
{    
	$pass=htmlentities($pass);
	
	if(strlen($pass) < 6 )
	{
		return false;
	}
	else if(empty($pass))
	{
		return false;
	}
	else if(preg_match('/[^0-9A-Za-z/._\-\s]/',$pass))
	{
		return false;
	}
	else
	{//echo"check 42";
		return true;
	}
}

function email_exists_login($email)
{   // echo"check 5";
    if (!valid_email($email))
    {
		
        return false;
    }
 
    $query = sprintf("SELECT loginid FROM user WHERE email = '%s' and activated =1 LIMIT 1",
        mysql_real_escape_string($email));
 
    $result = mysql_query($query);
 
    if (mysql_num_rows($result) > 0)
    {
        return true;
    }
    else
    {
		
        return false;
    }
 
    return false;
 
}

function user_exists_login($user)
{    
//echo"check 62";
    
    $user=htmlentities(trim($user));
 
    $query = sprintf("SELECT * FROM user WHERE uname = '%s' and activated =1 LIMIT 1",
        mysql_real_escape_string($user));
 
    $result = mysql_query($query);
 
    if (mysql_num_rows($result) > 0)
    {
    
        return true;
    }
    else
    {
		
        return false;
    }
 
    return false;
 
}
function curPageURL()
{
	$pageURL='http';
	if($_SERVER['HTTPS']=="on")
		$pageURL.="s";
	$pageURL.="://";
	if($_SERVER['SERVER_PORT']!=80)
	{
		$pageURL.=$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	}
	else
	{
		$pageURL.=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	}
	return $pageURL;
}
function checkURL($group,$uid)
{
	$url=curPageURL();
	
		if($group=="faculty")
		{
			if(strpos($url,$group))
			{
				if(encrypt($_GET['id'])==$_SESSION['user_uid'])
					return true;
				else
					return false;
			}
			else
				return false;
		}
		if($group=="admin")
			return true;
		return false;
		
	
	
}
function user_check_login($user,$loginid,$uid,$group)
{   // echo"check 6";

	global $fake;
	
		
    if (!valid_user($user))
    {
		return false;
    }
    if (!checkURL($group))
    {
		return false;
    }
    $loginid=htmlentities(trim($loginid))-$fake;
 
    $query = sprintf("SELECT * FROM user WHERE uname = '%s' and loginid= '%s' and groupName = '%s' and uid = '%s' and activated =1 LIMIT 1",
        mysql_real_escape_string($user), mysql_real_escape_string($loginid),mysql_real_escape_string($group),mysql_real_escape_string($uid));
 
    $result = mysql_query($query);
 
    if (mysql_num_rows($result) > 0)
    {
        return true;
    }
    else
    {
		
        return false;
    }
 
    return false;
 
}

function encrypt($text)
{
        return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, SALT, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
}

function decrypt($text)
{
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, SALT, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
}

function defend()
{
// First, make sure the form was posted from a browser.
// For basic web-forms, we don't care about anything
// other than requests from a browser:    
if(!isset($_SERVER['HTTP_USER_AGENT'])){
   //echo("Forbidden 1- You are not authorized to view this page");
   return false;
}

// Make sure the form was indeed POST'ed:
//  (requires your html form to use: action="post") 
if(!$_SERVER['REQUEST_METHOD'] == "POST"){
   //echo("Forbidden 2- You are not authorized to view this page");
   return false;   
}

// Host names from where the form is authorized
// to be posted from: 
$authHosts = array("127.0.0.1", "nitjsr.ac.in");

// Where have we been posted from?
$fromArray = parse_url(strtolower($_SERVER['HTTP_REFERER']));

// Test to see if the $fromArray used www to get here.
$wwwUsed = strpos($fromArray['host'], "www.");

// Make sure the form was posted from an approved host name.
if(!in_array(($wwwUsed === false ? $fromArray['host'] : substr(stristr($fromArray['host'], '.'), 1)), $authHosts)){    
   //logBadRequest();
   //header("HTTP/1.0 403 Forbidden");
   //echo("Forbidden 3- You are not authorized to view this page");
     return false;    
}

// Attempt to defend against header injections:
$badStrings = array("Content-Type:",
                     "MIME-Version:",
                     "Content-Transfer-Encoding:",
                     "bcc:",
                     "cc:");

// Loop through each POST'ed value and test if it contains
// one of the $badStrings:
foreach($_POST as $k => $v){
   foreach($badStrings as $v2){
       if(strpos($v, $v2) !== false){
           //logBadRequest();
          // header("HTTP/1.0 403 Forbidden");
          //echo("Forbidden 4- You are not authorized to view this page");
            return false;
       }
   }
}    

// Made it past spammer test, free up some memory
// and continue rest of script:    
unset($k, $v, $v2, $badStrings, $authHosts, $fromArray, $wwwUsed); 
return true;
}

?>
