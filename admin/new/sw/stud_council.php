

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
  <span>Student Council</span>
</div>
<div class="pagecontent">
	<p>Each year a group of eight students is selected by the administrative board in consultation with the Director, to constitute the Student Council. It comprises of President(Final Year),Vice President (Final year);General Secretary (Third Year);Joint Secretary (Second Year);PG Representative (PG).In addition it has also has an Executive Council, with Technical Secretary, Cultural Secretary, Sports Secretary and Clubs Secretary.</p></br>
    <p><b>OBJECTIVE:</b>A good administration and efficient student council is a part of an able institution. Student Council represents the opinions, ideas and proposals of the students.</p>
    
    <ol><li>To provide a link and improve communication between administration, students and parents.</li>
<li>To provide a forum for students to voice their opinions on relevant issues.</li>
<li>To encourage students to become self-confident, responsible and create a more caring atmosphere. </li>
<li>The Council functions to bridge the gap between students and administration, paving way to the healthy relationship between the two, thereby creating a conducive environment for their Academic and extracurricular excellence .</li>
<li>The administration is more approachable through the council, and also the demands and problems faced by the students are given a patient ear.</li>
<li>To maintain transparency in all types of students activities in the institute.</li></ol>
    <p></br><b>Present Student Council: </b></p>
<?php $i=0;?>
<table class="pagetablecontent_new" border="0" height="400px"width="100%">
	<tr class="tablehead">
            <td>Sl. No.</td>
            <td>Name</td>	
            <td> Will serve as </td>
            <td>Email </td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>1.</td>
            <td> Ashish Arora (098/10)</td>
            <td> President</td>
            <td><a href="mailto:president.sc@nitjsr.ac.in
">president.sc@nitjsr.ac.in
</a></td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>2.</td>
            <td> Amit Abhinav (269/11)</td>
            <td> Vice President</td>
            <td><a href="mailto:vp.sc@nitjsr.ac.in
">vp.sc@nitjsr.ac.in
</a></td>
    </tr>
  <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>3.</td>
            <td> Kunchakuri Mahesh (538/11)</td>
            <td>General Secretary </td>
            <td><a href="mailto:gensec.sc@nitjsr.ac.in
">gensec.sc@nitjsr.ac.in
</a> </td>
    </tr>
	 <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>4.</td>
            <td> Ajitesh Banerjee (273/12)</td>
            <td>Joint Secretary </td>
            <td> <a href="mailto:js.sc@nitjsr.ac.in
">js.sc@nitjsr.ac.in
</a></td>
    </tr>
	 <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>5.</td>
            <td> Poornika Awasthi (330/10)</td>
            <td>Club Secretary </td>
            <td><a href="mailto:clubsec.sc@nitjsr.ac.in
">clubsec.sc@nitjsr.ac.in
</a> </td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>6.</td>
            <td> Yogesh Kumar Gupta (561/10)</td>
            <td> Technical Secretary</td>
            <td><a href="mailto:techsec.sc@nitjsr.ac.in
">techsec.sc@nitjsr.ac.in
</a> </td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>7.</td>
            <td> Shruti Pasrija (528/11)</td>
            <td>Joint Technical Secretary</td>
            <td><a href="mailto:jtechsec.sc@nitjsr.ac.in
">jtechsec.sc@nitjsr.ac.in
</a> </td>
    </tr>
<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>8.</td>
            <td> K. Rohit (220/10)</td>
            <td> Cultural Secretary</td>
            <td> <a href="mailto:culsec.sc@nitjsr.ac.in
">culsec.sc@nitjsr.ac.in
</a></td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>9.</td>
            <td> Pranjali Debnath (090/11)</td>
            <td>Joint Cultural Secretary</td>
            <td> <a href="mailto:jculsec.sc@nitjsr.ac.in
">jculsec.sc@nitjsr.ac.in
</a></td>
    </tr>
 <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>10.</td>
            <td> Avinash Anand (121/10)</td>
            <td>Sports Secretary </td>
            <td> <a href="mailto:sportssec.sc@nitjsr.ac.in
">sportssec.sc@nitjsr.ac.in
</a></td>
    </tr>
	<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>11.</td>
            <td> Aditya Prabhakar (608/11)</td>
            <td>Joint Sports Secretary </td>
            <td><a href="mailto:jsportssec.sc@nitjsr.ac.in
">jsportssec.sc@nitjsr.ac.in
</a> </td>
    </tr>
                                    

<tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
            <td>12.</td>
            <td> Neil Biswas (069/13)</td>
            <td>1st Year Representative</td>
            <td> <a href="mailto:firstrep.sc@nitjsr.ac.in
">firstrep.sc@nitjsr.ac.in
</a></td>
    </tr></table>  
</br>  </br>
    
</div>
<!--<table class="pagecontent">
<tr><td><span class="pagesubheading">Office Orders</span><br /><img src="<?php echo $root?>images/h2.png" width="100%" /></td></tr></table>

<table class="pagetablestyle" border="0">
	<tr style="font-weight:bold;"><td>Attachment</td><td>Size</td></tr>
	<tr><td><a href="<?php echo $root;?>" target="_blank">order1.doc</a></td><td>569 KB</td></tr>
</table>-->
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
