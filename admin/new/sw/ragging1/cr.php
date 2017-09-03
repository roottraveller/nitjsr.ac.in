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

<?php include '../header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheading">
  <span>Recommendations approved by the Honourable Supreme Court</span>
</div> 

<div class="pagecontent">
<p><b> The Recommendations approved by the Supreme Court are outlined below:</b></p></br></br>
<p>1.	The punishment to be meted out has to be exemplary and justifiably harsh to act as a deterrent against recurrence of such incidents.</p>
<p>2.	Every single incident of ragging where the victim or his parent/guardian or the Head of the institution is not satisfied with the institutional arrangement for action, a<b> First Information Report</b> must be filled without exception by the institutional authorities with the local police authorities. Any failure on the part of the institutional authority or negligence or deliberate delay in lodging the FIR with the local police shall be construed to be an act of culpable negligence on the part of the institutional authority. If any victim or his parent/guardian of ragging intends to file FIR directly with the police, that will not absolve the institutional authority from the requirement of filing the FIR.</p>
<p>3.	In the prospectus to be issued for admission by educational institutions, it shall be clearly stipulated that in case the applicant for the admission is found to have indulged in ragging in the past or if it is noticed later that he/she has indulged in ragging, admission may be refused or he/she <b>shall be expelled from the educational institution</b>.</p>
<p>4.	It shall be collective responsibility of the authorities and functionaries of the concerned institution and their role shall also be open to scrutiny for the purpose of finding out whether they have taken effective steps for preventing ragging and in case of their failure, action can be taken, for example, denial of any grant-in-aid or assistance from the State Governments.</p>
<p>5.	Anti-ragging committee’s and squads shall be forthwith formed by the institutions and it shall be the job of the committee or the squad, as the case may be, to see that the Committee’s recommendations, more particularly those noted above, are observed without exception and if it is noticed that there is any deviation, the same shall be forthwith brought to the notice of this Court.</p>
<p>6.	The committee constituted pursuant to the order of this Court shall continue to monitor the functioning of the anti-ragging committees and the squads to be formed. They shall also monitor the implementation of the recommendations to which reference has been made above.</p>
<p>7.	It is necessary that<b> parents/guardians of freshers assume responsibility for promptly bringing to the notice of the Director any instance of ragging</b>.</p>


</div>
</div>
</div>
<!--sidetab starts here-->
<div class="col2">
<?php include '../raggingsidepanel.php'?>
</div>
<!--sidetab ends-->
<div class="clear"></div>
<!--footer starts here -->
<?php include '../footer.php' ?>
<!-- footer ends here -->

</body></html>
