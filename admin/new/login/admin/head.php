<?php 
error_reporting(0);
define('isDOCTYPE',1375);
include 'auth.inc.php'; 
include '../validate.inc.php';
if(!isLoggedIn())
{
	
	header('Location: ../index.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin Panel : <?php echo $page; ?> | Edit</title>
<style type="text/css">
div.wysiwyg ul.panel li {padding:0px !important;} /**textarea visual editor padding override**/
</style>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="js/jquery.ui.js" type="text/javascript"></script>
<script src="js/jquery.corners.min.js" type="text/javascript"></script>
<script src="js/bg.pos.js" type="text/javascript"></script>
<script src="js/jquery.wysiwyg.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tabs.pack.js"></script>
<script src="js/cleanity.js" type="text/javascript"></script>
 <!-- datetime picker--> 
   
	<script src="js/jquery-1.7.1.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
	 <!-- end datetime picker--> 
   
<style type="text/css">
	
	#jq-books{width:200px;float:right;margin-right:0}
	#jq-books li{line-height:1.25em;margin:1em 0 2.8em;clear:left}
	#home-content-wrapper #jq-books a.jq-bookImg{float:left;margin-right:10px;width:55px;height:70px}
	#jq-books h3{margin:0 0 .2em 0}
	#home-content-wrapper #jq-books h3 a{font-size:1em;color:black;}
	#home-content-wrapper #jq-books a.jq-buyNow{font-size:1em;color:white;display:block;background:url(http://static.jquery.com/files/rocker/images/btn_blueSheen.gif) 50% repeat-x;text-decoration:none;color:#fff;font-weight:bold;padding:.2em .8em;float:left;margin-top:.2em;}
	
	</style>   
     <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.css" rel="stylesheet" type="text/css">
    <link type="text/css" media="screen" rel="stylesheet" href="css/colorbox.css">
    <link type="text/css" media="screen" rel="stylesheet" href="css/colorbox-custom.css">
    <!-- datetime picker--> 
    
    <link rel="stylesheet" href="css/jquery.ui.all.css"/>
    <link rel="stylesheet" href="css/demos.css"/>
	 <!--end  datetime picker--> 
   
    	<style type="text/css">
        div.wysiwyg ul.panel li {padding:0px !important;} /**textarea visual editor padding override**/
        </style>
        <!--[if IE 6]>
        <link rel="stylesheet" href="ie.css" type="text/css" />
        <![endif]-->
        <!--[if IE]>
                    <link type="text/css" media="screen" rel="stylesheet" href="js/colorbox-custom-ie.css" title="Cleanity" />
        <![endif]-->
    

</head>
<body>
<div id="container">
    <div class="hidden"><!-- the modal box container - this div is hidden until it is called from a modal box trigger. see cleanity.js for details -->
    <div id="sample-modal"><h2 style="font-size:160%; font-weight:bold; margin:10px 0;">Modal Box Content</h2><p>Place your desired modal box content here</p></div>
    </div><!-- end of hidden -->
    <div id="header">
      <div id="top">
      <h1 style="color:#FFFFFF">Admin Panel</h1>
      <p id="userbox"> <strong> Hello Admin</strong> &nbsp;| &nbsp;<a href="settings.php">Settings</a> &nbsp;| &nbsp;<a href="../logout.php">Logout</a> <br>
      <small></small></p>
      <span class="clearFix">&nbsp;</span>
      </div>
      <ul id="menu">
          <li class="selected"> <a style="background-position: 0pt 0pt;" href="index.php">Dashboard</a></li>
          <li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Pages <span>&nbsp;</span></a>
           <ul>
            <li><a style="background-position: 0pt 0pt;" href="upload1.php">Notifications Upload</a></li>
            <li><a style="background-position: 0pt 0pt;" href="results1.php">Main Notice Board</a></li>
          <!--	<li><a style="background-position: 0pt 0pt;" href="conference.php">Conferences and Seminars</a></li>-->
	        <li><a style="background-position: 0pt 0pt;" href="tender1.php">Tender</a></li>
           <li><a style="background-position: 0pt 0pt;" href="recruitment1.php">Recruitment</a></li>
        <!--    <li><a style="background-position: 0pt 0pt;" href="tender.php">Tenders</a></li>-->
           <!-- <li><a style="background-position: 0pt 0pt;" href="office.php">Office Orders</a></li>-->
           <li><a style="background-position: 0pt 0pt;" href="history1.php">History</a></li>
         </ul>
        </li>
		 <li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Phone Book <span>&nbsp;</span></a>
          <ul>
            <li><a style="background-position: 0pt 0pt;" href="addcontact.php">Add Faculty</a></li>
	        <li><a style="background-position: 0pt 0pt;" href="searchcontact.php">Search Contact</a></li>
			<li><a style="background-position: 0pt 0pt;" href="delhistory.php">Deleted History</a></li>
            </ul></li>
	<li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Calender<span>&nbsp;</span></a>
          <ul>
            <li><a style="background-position: 0pt 0pt;" href="addevent.php">Add Events</a></li>
	        <li><a style="background-position: 0pt 0pt;" href="listevent.php">List Events</a></li>
            </ul></li>
			 <li> <a style="background-position: 0pt 0pt;" class="top-level" href="#">Upload <span>&nbsp;</span></a>
			  <ul>
            <li><a style="background-position: 0pt 0pt;" href="imgadd.php">add images</a></li>
			</ul></li>
		<li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Curriculum<span>&nbsp;</span></a>
          <ul>
            <li><a style="background-position: 0pt 0pt;" href="addcurriculam.php">Add Curriculum</a></li>
	        <li><a style="background-position: 0pt 0pt;" href="searchcurriculam.php">Search Curriculum</a></li>
            </ul></li>
			<li><a style="background-position: 0pt 0pt;" class="top-level" href="#">add events<span>&nbsp;</span></a>
          <ul>
		<li><a style="background-position: 0pt 0pt;" class="top-level" href="event.php">add events </a></li>
		<li><a style="background-position: 0pt 0pt;" class="top-level" href="news.php">add news </a></li>
<li><a style="background-position: 0pt 0pt;" class="top-level" href="imp_list.php">update imp_links </a></li>

</ul>
		</li>
		
		<li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Faq's<span>&nbsp;</span></a>
          <ul>
		<li><a style="background-position: 0pt 0pt;" class="top-level" href="faq.php">add Faq </a></li>
		</ul>
      </ul>
	  
	  
	 <form action="" method="get" name="form1" id="form1">
      <fieldset>
      <legend>Search</legend>
        <label id="searchbox">
        <input name="s" id="s" type="text">
        </label>
        <input class="hidden" name="Submit" value="Search" type="submit">
      </fieldset>
      </form>
      <span class="clearFix">&nbsp;</span>
    </div><!-- end of #header -->

<div id="content">
	<div id="content-top">
    <h2>Dashboard</h2>
      <span class="clearFix">&nbsp;</span>
      </div><!-- end of div#content-top -->
      
      </div>
      <div id="mid-col">
      
      	
      	<div class="box">
      		<h4 style="padding: 0pt;" class="white rounded_by_jQuery_corners">
			
		<div style="padding: 5px 12px 12px; height:18px">
			<?php echo $page; if($page!="Home" && $page!="Settings"&& $page!="Add Faculty"&& $page!="placement" && $page!="add contact"); ?> <a href="http://demo.monofactor.com/cleanity/2-columns.html" class="heading-link"></a>
			</div></h4>
        <div style="padding: 0pt;" class="box-container rounded_by_jQuery_corners"><div style="padding: 10px 10px 5px;">  
</div>
