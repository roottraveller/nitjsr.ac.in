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
<meta name=Author content="" />
<meta http-equiv="contact" content="" />
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
  <span>The Senate</span>
  </div>
<div class="pagecontent">
<p>The proposed list of the Senate members of our Institute as per directives of <b>NIT ACT 2007</b> for the tenure of 2 years is furnished here under:</p>
<p>
    <table class="pagetablecontent_new" cellspacing="1" border="0" width="100%">
        <tr>
            <td>1. </td>
            <td>The Director</td>
            <td>Ex-Officio Chairman</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Professors of the institute </td>           
            <td> Members              </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Three Chairman Nominees   </td>                         
            <td>Members</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Heads of the Departments </td>                    
            <td>Members</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Special Invitees</td>
            <td>Members</td>
        </tr>
        <tr>
            <td valign="top">6.</td>
            <td>Student Representatives (for one year tenure only)
                <table>
                    <tr>
                        <td>(i)</td><td>Overall topper of 1st year</td>
                    </tr>
                    <tr>
                        <td>(ii)</td><td>Overall topper of 2nd year</td>
                    </tr>
                    <tr>
                        <td>(iii)</td><td>Overall topper of 3rd year</td>
                    </tr>
                    <tr>
                        <td>(iv)</td><td>Overall topper of 4th year</td>
                    </tr>
                </table>
            </td>
            <td>Members
            </td>
            <td></td>
        </tr>    
    </table>   
</p>


<?php $i=0;?>

<p><span class="pagesubheading">The Senate</span><img src="<?php echo $root?>images/h2.png" width="100%" /></p>
<table class="pagetablecontent_new" border="0"height="700px"width="100%">
	<tr class="tablehead"height="30px">
    	<td align="center">Sr. No</td>
        <td align="left">  Name</td>
        <td>Position</td>
        </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">1.</td><td>Prof. Rambabu Kodali</label></td><td>Chairman</td>
    </tr>
     <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">2.</td><td>Prof. Shambhu Sharan</label></td><td>Member</td>
    </tr>
     <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">3.</td><td>Prof. Shalendra Kumar</label></td><td>Secretary</td>
     </tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">4.</td><td>Prof. A. Choubey</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">5.</td><td>Prof. A. K. Khan</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">6.</td><td>Prof. A. K. L. Srivastava</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">7.</td><td>Shri. A. K. Mehta</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">8.</td><td>Prof. A. K. Singh</label></td><td>Member</td>
	</tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">9.</td><td>Prof. A. M. Tigga</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">10.</td><td>Prof. A. N. Thakur</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">11.</td><td>Prof. B. N. Prasad</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">12.</td><td>Prof. H. N. Singh</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">13.</td><td>Prof. J. N. Yadav</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">14.</td><td>Prof. M. K. Paswan</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">15.</td><td>Prof. M. M. Prasad</label></td><td>Member</td>
	</tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">16.</td><td>Dr. Niranjan Kumar</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">17.</td><td>Prof. R. J. Singh</label></td><td>Member</td>
	</tr> 
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">18.</td><td>Prof. R. K. Prasad</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">19.</td><td>Prof. R. N. Mahanty</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">20.</td><td>Prof. R. P. Singh</label></td><td>Member</td>
    </tr>  
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">21.</td><td>Prof. R. V. Sharma</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">22.</td><td>Prof. S. B. L. Seksena</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">23.</td><td>Prof. S. K. Sahay</label></td><td>Member</td>
    </tr> 
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">24.</td><td>Prof. S. N. Singh</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">25.</td><td>Prof. S. P. Sharma</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">26.</td><td>Prof. Sanjay</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">27.</td><td>Prof. U. Laha</label></td><td>Member</td>
    </tr>    
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">28.</td><td>Prof. Y. P. Yadav</label></td><td>Member</td>
	</tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">29.</td><td>Dr. S. Srikanth, Director, NML Jamshedpur</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">30.</td><td>Fr. E. Abraham S. J., Director, XLRI Jamshedpur</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">31.</td><td>Prof. Karuna Jain, Head, SJMSM, IIT Bombay</label></td><td>Member</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">32.</td><td>Prof. M. J. Xavier, Director, IIM-Ranchi</label></td><td>Special Invitee</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">33.</td><td>Prof. O. N. Mohanty, Ex-VC, Viju Patnaik Univ.</label></td><td>Special Invitee</td>
    </tr>
    <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">34.</td><td>Mr. Aman Singhal, Roll No. 60/09</label></td><td>Student Representative</td>
    </tr>
     <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">35.</td><td>Ms. Pinki Kumari, Roll No. 119/11</label></td><td>Student Representative</td>
    </tr>
     <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">36.</td><td>Mr. Prashant Kumar, Roll No. 324/12</label></td><td>Student Representative</td>
    </tr>
     <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
    	<td align="center">37.</td><td>Ms. Priti Kumari, Roll No. 356/10</label></td><td>Student Representative</td>
    </tr>
 </table>
</br></br>

</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
</div>
</div>

<div class="clear"></div>
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->

</body></html>
