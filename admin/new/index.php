<?php
error_reporting(0);
define('isDOCTYPE',1375);
include 'login/admin/auth.inc.php'; 
$root='';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="" />
<meta http-equiv="contact" content="" />
<link rel="SHORTCUT ICON" href="images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title> 
<!-- Stylesheet -->
<link href="new/css/style1.css" rel="stylesheet" type="text/css" />
<link href="new/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="new/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="new/css/jquery.fancybox-1.3.4.css" media="screen" />

<!-- Javascript -->
<script src="new/js/jquery.min.js" type="text/javascript"></script>
<script src="new/js/ddsmoothmenu.js" type="text/javascript"></script>
<script src="new/js/contentslider.js" type="text/javascript"></script>
<script type="text/javascript" src="new/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="new/js/jquery.easing.1.1.js"></script>
<script type="text/javascript" src="new/js/cufon-yui.js"></script>
<script type="text/javascript" src="new/js/DIN_500.font.js"></script>
<script type="text/javascript" src="new/js/menu.js"></script>
<script type="text/javascript" src="new/js/tabs.js"></script>
<script type="text/javascript" src="new/js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="new/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="new/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 8,
		auto:500,
		speed:800,
	    btnNext: ".next",
        btnPrev: ".prev",
	});
});
</script>
</head>
<body >
<div id="bg">
	<div id="wrapper_sec">
	<?php include "headerindex.php";?>
         <div class="clear"></div>
    <div class="col2">
    <?php include 'sidepanel.php';?>
   </div>		 

 <div class="clear"></div>
 
 <div class="clear"></div>
    <?php include "noticeboard.php";?>	
        <div classs="clear"></div>
    <?php include "tabs.php";?>	
         <div class="clear"></div>
    </div>
</div>
<!-- Footer Section -->
<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
