<?php
error_reporting(0);
$root='../';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 8]> <html class="ie8"> <![endif]--> 
<!--[if !IE]><!--> <html>             <!--<![endif]-->  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="Nishant Kumar" />
<meta http-equiv="contact" content="nishantkumar35@gmail.com" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title>  


<script language="javascript">
  function writeFlash(title, w, h) {
    document.write('<object  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9.0.0.0" width="' + w + '" height="' + h + '" ID="sf" VIEWASTEXT>')
    document.write('  <param name="movie" value="' + title + '.swf" />')
    document.write('  <param name="quality" value="high" />')
    document.write('  <param name="wmode" value="transparent" />')
    document.write('  <param name="allowScriptAccess" value="always" />')
    document.write('  <param name="allowFullScreen" value="true" />')
    document.write('  <embed src="' + title + '.swf" quality="high" name="nit" allowScriptAccess="always" allowFullScreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"  width="' + w + '" height="' + h + '"></embed>')
    document.write('</object>')
  }
</script>



<script type="text/javascript">
var idd=1;
function vsbl(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
var b=document.getElementById("chk_butn"+idd);
var dv1=document.getElementById("chk"+id);
var dv2=document.getElementById("chk"+idd);
dv2.style.visibility='hidden';
dv1.style.visibility='visible';
a.style.background='#4F99C5';
a.style.color='#fff';
b.style.background='#ffffff';
b.style.color='#C02630';
idd=id;
}
}
function btn(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#4F99C5';
}
}
function btn_r(id)
{
if(id!=idd)
{
var a=document.getElementById("chk_butn"+id);
a.style.color='#C02630';
}
}

</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">

</head>
<body onLoad="javascript: sf.focus()">
<div id="bg" >

<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">
  <span>Photo Gallery</span>
</div>
<div class="pagecontent">
	

        <div class="gallery">
          <script language="javascript">
            writeFlash("nit", 600, 400)
          </script>
        </div>
      
	
	
	
</div>
</div>

</div>
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>