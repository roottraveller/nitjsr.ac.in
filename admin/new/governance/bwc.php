<?php
error_reporting(0);
$root='../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="Description" content="Official Website: Information about programs offered, departments, activities, research, consultancy, admissions, events, and contacts." />
<meta name="Keywords" content="nit jamshedpur, nit jsr, nit, jamshedpur, technology, competitions, events, workshop, exhibition, science, fest, technical, ojass, utkarsh, robotics" />
<meta name=Author content="Nishant Kumar" />
<meta http-equiv="contact" content="nishantkumar35@gmail.com" />
<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />   
<title>NIT Jamshedpur</title>  

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
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>
<div id="wrapper_sec" >


<div class="main_content">
<div class="pageheading">
  <span>Building & Works Committee</span>
  </div>
<div class="pagecontent">

<p>
    
</p>
    <table class="pagetablecontentbwc" border="0" width="100%">
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <tr class="tablehead">
    	<td>Sl. No.</td>
        <td>Name</td>
        <td>Designation</td>
    </tr>
            <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;1.</td>
            <td>
            Prof . Rambabu Kodali , <br/>
            Director</label></td>
            <td> Ex-Officio Chairman</td>
        </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;2.</td><td>
                
            Additional Secretary/Joint Secretary In-charge, <br/>
            dealing with Technical Education, Department Of higher Education,<br/>
            Ministry of Human Resource Development , Government of India </label></td>         
            <td> Member              </td>
        </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;3.</td>
            <td>
             Financial Adviser, <br/>
             Department of Higher Education, <br/>
             Ministry of Human Resource Development, Government of India </label></td>                        
            <td>Member</td>
        </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;4.</td>
            <td>
            Prof. M. M. Prasad, <br/>
            Dean (Planning &amp; Development) </label></td>                  
            <td>Member</td>
        </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;5.</td>
            <td>
            Er. M . K . Mallik, <br/>
            Superintending Engineer, Ranchi Central Circle, CPWD, Ranchi
            </label></td>
            <td>Member
            </td>
        </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>&nbsp;6.</td>
            <td>
             Er. D. Chaudhary, <br/>
             Executive Engineer(E), Ranchi Central ElectricalCircle, CPWD, Ranchi
            </label></td>
            <td>Member</td>
        </tr> 
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    <td>&nbsp;7.</td>
    <td>
      Prof. Shalendra Kumar , <br/>
      Registrar (I/C)
            </label></td>
            <td>Ex-officio Secretary</td>
        </tr>       
    </table>   
<p></p>


 </div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>