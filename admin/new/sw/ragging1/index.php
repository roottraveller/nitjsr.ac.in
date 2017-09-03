<?php
error_reporting(0);
$root='../../';
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
var assistvisible=false;
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
function assistants()
{
	if(assistvisible){
		document.getElementById('assist').style.display='none';
		document.getElementById('assist1').style.display='none';
		assistvisible=false;
	}
	else{
		document.getElementById('assist').style.display='table';
		document.getElementById('assist1').style.display='block';
		assistvisible=true;
	}
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">



</head>
<body>

<div id="bg" >

<?php include '../../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
 <!-- <span>Anti-Ragging Committee</span>-->
</div> 

<div class="pagecontent">
<p><img src="<?php echo $root?>images/ragging.jpg" width="100%" /></br>In compliance of directives of Hon'ble Supreme Court of India, the institute has constituted an anti-ragging committee to curb the menace of ragging.These include:</p><ul>
<li><b>Institute level Anti-ragging Committee(Comprising of faculty members)</b></li>
<li><b>Hostel level Anti-ragging Commitee(Comprising of Wardens/Senior Wardens)</b></li>
<li><b>student level Anti-ragging Commitee(Comprising of final year students)</b></li>
</ul></br><p><b>1.Monitoring Committee:</b>A monitoring Committee is also constituted with the responsibility of overseeing the implementation of the verdict, and functioning of various Anti-ragging committees.</p></br>
<p><b>2.Counselling of freshers and senoirs:</b>A Team Comprising of Dean (SW), Cheif warden , Proctor ,Co-ordinator (Training and placement) will coordinate this activity.</p></br>
<p><b>3.Affidavit & undertakings from the students and parent:</b>Each student of the the institute ,his/her parents and each guardian are required to submit an Affidavit (as per the guidelines 	of the UGC Regulations) and a set of Undertaings (as per the directives of supreme court of India) to prevent and control the ragging.</p></br>
<p><b>4.Complaint boxes:</b>Complaint Boxes in all hostels in general and hostels C & D in particular are kept for reporting the incidence of ragging, if any.These boxes are also installed at also installed at two places in the institute building,Library & Computer Centre.Dean(SA) will ensure that the complaint boxes are also kept in the hostel C & D where 1st year students are to be accomodated.</p></br>
<p><b>5.Information to Local Administration & Police station:</b> The Local administration and the police station of the area(RIT police station)have been informed and requested to keep constant vigil/patrolling around first year hostels particularly to prevent any untoward incidence/ragging. The Local administration have been requested to intensify the regular patrolling in the NIT campus area in view of the presence of new students and disturbance caused by the local elements. This is all the more necessary due to fact that the institute has not having the boundary wall and the security agency for the reason beyond control of the institute Administration</p></div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../../sidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../../footer.php' ?>
<!-- footer ends here -->

</body></html>
