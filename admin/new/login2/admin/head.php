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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <h1><a href="#">Admin Panel</a></h1>
      <p id="userbox">Hello <strong>Admin</strong> &nbsp;| &nbsp;<a href="settings.php">Settings</a> &nbsp;| &nbsp;<a href="../logout.php">Logout</a> <br>
      <small></small></p>
      <span class="clearFix">&nbsp;</span>
      </div>
      <ul id="menu">
        <li class="selected"><a style="background-position: 0pt 0pt;" href="index.php">Dashboard</a></li>
        <li><a style="background-position: 0pt 0pt;" class="top-level" href="#">Pages <span>&nbsp;</span></a>
          <ul>
            <li><a style="background-position: 0pt 0pt;" href="notifications.php">Notifications</a></li>
            <li><a style="background-position: 0pt 0pt;" href="results.php">Results</a></li>
          	<li><a style="background-position: 0pt 0pt;" href="conference.php">Conferences and Seminars</a></li>
	        <li><a style="background-position: 0pt 0pt;" href="academics.php">Academics</a></li>
            <li><a style="background-position: 0pt 0pt;" href="recruitment.php">Recruitment</a></li>
            <li><a style="background-position: 0pt 0pt;" href="tender.php">Tenders</a></li>
            <li><a style="background-position: 0pt 0pt;" href="office.php">Office Orders</a></li>
            <li><a style="background-position: 0pt 0pt;" href="addfaculty.php">Add faculty</a></li>
            <li><a style="background-position: 0pt 0pt;" href="placement.php">Placements</a></li>
         </ul>
        </li>
        <li><a style="background-position: 0px 0px;" class="top-level" href="settings.php">Settings <span>&nbsp;</span></a>
         </li>
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
      <div id="left-col">
          <div class="box">
              <h4 style="padding: 0pt;" class="yellow rounded_by_jQuery_corners"><div style="font-size: 1px; background-color: rgb(232, 232, 221);"><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(145, 148, 144);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="padding: 5px 10px 10px;">Side Menu</div></h4>
          <div style="padding: 0pt;" class="box-container rounded_by_jQuery_corners"><div style="padding: 10px 10px 5px;"><!-- use no-padding wherever you need element padding gone -->
              <ul role="tablist" class="list-links ui-accordion ui-widget ui-helper-reset">
                  <li class="ui-accordion-li-fix" onclick="document.location.href='index.php';" style="cursor:pointer"><a tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-active ui-corner-all" href="index.php"><span class="ui-icon ui-icon-triangle-1-s"></span>Dashboard</a>
                  
                  </li>
                  <li class="ui-accordion-li-fix"><a tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" href="#"><span class="ui-icon ui-icon-triangle-1-e"></span>Edit Pages</a>
                  		<ul role="tabpanel" style="height: 202px; display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                        <li><a href="notifications.php">Notifications</a></li>
                        <li><a href="results.php">Results</a></li>
                        <li><a href="conference.php">Seminars and Conferences</a></li>
                        <li><a href="academics.php">Academics</a></li>
                        <li><a href="recruitment.php">Recruitment</a></li>
                        <li><a href="office.php">Office Orders</a></li>
                        <li><a href="tender.php">Tenders</a></li>
                        <li><a href="addfaculty.php">Add faculty</a></li>
                        <li><a href="placement.php">Placements</a></li>
                        </ul>
                  </li>
                  <li class="ui-accordion-li-fix" onclick="document.location.href='settings.php';" style="cursor:pointer"><a tabindex="-1" aria-expanded="false" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" href="settings.php"><span class="ui-icon ui-icon-triangle-1-e"></span>Settings</a></li>
              </ul>
          </div><div style="font-size: 1px; background-color: rgb(232, 232, 221);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(254, 254, 253);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(249, 249, 246);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(239, 239, 231);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(244, 244, 238);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(239, 239, 231);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(249, 249, 246);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(254, 254, 253);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div></div></div></div></div><!--end of div.box-container -->
          </div><!-- end of div.box -->
          
          <div class="box">
          		<h4 style="padding: 0pt;" class="light-grey rounded_by_jQuery_corners"><div style="font-size: 1px; background-color: rgb(232, 232, 221);"><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(145, 148, 144);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="padding: 5px 10px 10px;">Date &amp; Calendar</div></h4>
         <div style="padding: 0pt;" class="box-container rounded_by_jQuery_corners"><div style="padding: 10px 10px 5px;">
		  		<div id="date-container">
		  		 <span class="hour"><?php echo date("h:i A");  ?></span> <span class="date"><?php echo date(' jS F Y ');  ?> <br><?php echo date('l'); ?></span>
                 <span class="clearFix">&nbsp;</span>
		  	</div><!-- end of div#box-date -->
		  	
		  	<div id="calendar-container">
		  		<h5>Calendar</h5>
				<div class="hasDatepicker" id="calendar"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery.datepicker._adjustDate('#calendar', -1, 'M');" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery.datepicker._adjustDate('#calendar', +1, 'M');" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span> <span class="ui-datepicker-year">2012</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">1</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">2</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">3</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">4</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">5</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">7</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">8</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">9</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">10</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">11</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">12</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">14</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">15</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">16</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">17</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">18</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">19</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">21</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">22</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">23</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">24</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">25</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">26</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">28</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">29</a></td><td class=" " onclick="DP_jQuery.datepicker._selectDay('#calendar',3,2012, this);return false;"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
		  	    	<div class="inner-nav">
                		<div class="align-left"><a href="#"><span>+ add event</span></a></div>
                		<div class="align-right"><a href="#"><span>? list events</span></a></div>
                        <span class="clearFix">&nbsp;</span>
                	</div> 
		  	</div><!-- end of div#calendar-container -->
          </div><div style="font-size: 1px; background-color: rgb(232, 232, 221);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(254, 254, 253);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(249, 249, 246);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(239, 239, 231);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(244, 244, 238);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(239, 239, 231);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(249, 249, 246);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(254, 254, 253);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"></div></div></div></div></div></div></div>
         
     </div> <!-- end of div#left-col -->
      </div>
      <div id="mid-col">
      
      	
      	<div class="box">
      		<h4 style="padding: 0pt;" class="white rounded_by_jQuery_corners"><div style="font-size: 1px; background-color: rgb(232, 232, 221);"><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(145, 148, 144);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(181, 183, 176);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(103, 108, 107);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(67, 72, 75);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(58, 64, 67);"></div></div></div><div style="padding: 5px 10px 10px;"><?php echo $page; if($page!="Home" && $page!="Settings"&& $page!="Add Faculty"&& $page!="placement") echo '<p align="right" style="margin-top:-17px;" id="lk"><a href="javascript:changestatus()"> show old</a></p>'; ?> <a href="http://demo.monofactor.com/cleanity/2-columns.html" class="heading-link"></a></div></h4>
        <div style="padding: 0pt;" class="box-container rounded_by_jQuery_corners"><div style="padding: 10px 10px 5px;">  
