<?php
error_reporting(0);
$root='../';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="">
<head>

<link rel="SHORTCUT ICON" href="<?php echo $root;?>images/logo.ico" type="image/x-icon" />

 <link rel="stylesheet" type="text/css" href="<?php echo $root?>new/css/style1.css" />      		               
														

</head>


<body>
<!--head included here-->
<div id="bg">
<?php include $root.'header.php' ?>
<!--head inclusion ends--> 
</div> 
<!-- Stylesheet -->

<script>
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






<script type="text/javascript">
$(function() {
	
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>

<div id="wrapper_sec" >
<div class="main_content">
<div class="pageheading">
  <span>Sitemap</span>
 
  
</div>
<div class="pagecontent" style= "width:100%">
<div class="box1">
<h4>Institute</h4>
 <ul>
  <li><a href="<?php echo $root?>institute/about_us.php">About us</a></li>
  <li>Governance</li>
  <ul>
<li><a href="<?php echo $root?>governance/visitor1.php">Visitor</a></li>
<li><a href="<?php echo $root?>governance/nitcouncil.php">NIT's Council</a></li>
<li><a href="<?php echo $root?>governance/chairman.php">Chairman</a></li>
<li><a href="<?php echo $root?>governance/director.php">Director</a></li>
<li><a href="<?php echo $root?>governance/bog.php">Board of Governors</a></li>
<li><a href="<?php echo $root?>uploads/Minutes of 18th BOG.pdf">Minutes of 18th BOG</a></li>
<li><a href="<?php echo $root?>governance/senate.php">The Senate</a></li>
<li><a href="<?php echo $root?>governance/fc.php">Finance Committee</a></li>
<li><a href="<?php echo $root?>governance/cwc.php">Civil Works Committee</a></li>
<li><a href="<?php echo $root?>governance/bwc.php">Building and Works Committee</a></li>
<li><a href="<?php echo $root?>governance/ic.php">Institue Governance</a></li>
<li><a href="<?php echo $root?>governance/ha.php">Hostel Governance</a></li>
</ul>

<li><a href="<?php echo $root?>institute/campus.php">Vision and Mission</a></li>
<li><a href="<?php echo $root?>institute/goals.php">Goals and Objectives</a></li>
<li><a href="<?php echo $root?>institute/output.php">Output Indicators</a></li>
<li><a href="<?php echo $root?>institute/acts.php">Acts and Statutes</a></li>
<li><a href="<?php echo $root?>institute/birdseye.php">Institute Map</a></li>
<li><a href="<?php echo $root?>institute/reach.php">How to Reach</a></li>



</div>
<div class="box2">
<h4>Academics</h4>
<ul><li>
Departments</li>
<ul>
<li><a href="<?php echo $root?>department/index.php?dept=chemistry&page=home">Chemistry</a></li>
<li><a href="<?php echo $root?>department/index.php?dept=civil&page=home">Civil</a></li>
<li><a href="<?php echo $root?>department/index.php?dept=mca&page=home">Computer Applications</a></li>
<li><a href="<?php echo $root?>department/index.php?dept=cse&page=home">Computer Science</a></li>
 <li><a href="<?php echo $root?>department/index.php?dept=eee&page=home">Electrical &amp; Electronics </a></li>
<li><a href="<?php echo $root?>department/index.php?dept=ece&page=home">Electronics &amp; Comm. </a></li>
<li><a href="<?php echo $root?>department/index.php?dept=humanities&page=home">Humanities</a></li>
<li><a href="<?php echo $root?>department/index.php?dept=prod&page=home">Manufacturing</a></li>
<li><a href="<?php echo $root?>department/index.php?dept=maths&page=home">Mathematics</a></li>
 <li><a href="<?php echo $root?>department/index.php?dept=me&page=home">Mechanical</a></li>
 <li><a href="<?php echo $root?>department/index.php?dept=meta&page=home">Metallurgical &amp; Materials</a></li>
 <li><a href="<?php echo $root?>department/index.php?dept=physics&page=home">Physics</a></li>
 </ul>
 <li>Programmes</li>
                                                 <ul>
        	                                        <li><a href="<?php echo $root?>academics/programmes/btech.php">B.Tech (Hons.)</a></li>
                                                    <li><a href="<?php echo $root?>academics/programmes/mtech.php">M.Tech</a></li>
                                                    <li><a href="<?php echo $root?>academics/programmes/mca.php">MCA</a></li>
                                                    <li><a href="<?php echo $root?>academics/programmes/phd.php">PhD</a></li>
                                                    <li><a href="<?php echo $root?>academics/programmes/other.php">CEP</a></li>
                                                 </ul>
                                              <li>Admissions
        	                                     <ul>
                                                    <li><a href="<?php echo $root?>academics/admissions/ug.php">UG</a></li>
                                                    <li><a href="<?php echo $root?>academics/admissions/pg.php">PG</a></li>
                                                    <li><a href="<?php echo $root?>academics/admissions/phd.php">Phd</a></li>
           	                                     </ul>
                                              </li>
											  <li><a href="<?php echo $root?>academics/curriculum.php">Curriculum</a></li>
 						 <li><a href="<?php echo $root?>calendar/calendar.php">Academic Calendar</a></li>
    </ul>
         
</div>
<div class="box1">
<h4>Student Welfare</h4>
<ul>
                                       
   		                                          <li><a href="<?php echo $root?>sw/dosw.php">Dean(SW)</a></li>
		                                          <li><a href="<?php echo $root?>sw/stud_council.php">Student Council</a></li>
		                                          <li><a href="<?php echo $root?>scc/index.php">Student Counselling</a></li>
		                                          <li>Student Activities
		                                            <ul>
			                                             <li><a href="<?php echo $root?>sw/activities/bajasae.php">Baja SAE</a></li>
			                        	                 <li><a href="<?php echo $root?>sw/activities/cds.php">CDS</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/csi.php">CSI</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/faces.php">FACES</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/fsae.php">Formula SAE</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/lds.php">LDS</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/ncc.php">NSS</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/phoenix.php">Phoenix</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/sss.php">Soft Skills Society</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/sports.php">Sports</a></li>
			                                             <li><a href="<?php echo $root?>sw/activities/topguns.php">Topguns</a></li>
		                                          </ul>
        	                                    </li>
		                                        <li><a href="<?php echo $root?>sw/ojass.php">Ojass</a></li>
		                                        <li><a href="<?php echo $root?>sw/utkarsh.php">Utkarsh</a></li>
		                                        <li><a href="<?php echo $root?>sw/hostels.php">Halls of Residence</a></li>
		                                        <li><a href="<?php echo $root?>sw/fee_str.php">Fee Structure</a></li>
                                            </ul>
											</ul>
                  


</div>
<div class="box2">

<h4>Faculty Welfare</h4>
<ul>
<li> <a href="<?php echo $root?>fw/index.php">Home</a> </li>
</br>
</ul>
<h4>Placements</h4>
<ul>
<li>Invitation</li>
                                                   <ul>
                                                     <li><a href="<?php echo $root?>tap/dirMsg.php">Director's Message</a></li>
                                                     <li><a href="<?php echo $root?>tap/chairmanMsg.php">Chairman's Message</a></li>
                                                     <li><a href="<?php echo $root?>tap/tapProfMsg.php">T &amp; P Professor Incharge</a></li>
                                                   </ul>
	                                          
	                                           <li><a href="<?php echo $root?>tap/stats.php">Placement Statistics</a></li>
	                                           <li><a href="<?php echo $root?>tap/companies.php">Past Recruiters</a></li>
	                                           <li><a href="<?php echo $root?>tap/contacts.php">Contact Us</a></li>
	                                          </ul>

<h4>
<h4>Research &amp; Consultancy</h4>
<ul>
<li><a href="<?php echo $root?>rnc/index.php">Home</a></li></ul></br>
<h4>Industry &amp; Alumni</h4>
<ul>
                                          <li><a class="last" href="<?php echo $root?>industrynalumni/index.php">Home</a>
</li>
</ul>
</br>
<h4>Notice</h4>
<ul><li><a href="<?php echo $root?>news_desk/news.php">Show All</a></li></ul>
</br>     
<h4>Header Links </h4>
<ul>
<li><a class="nobg" href="http://m.nitjsr.ac.in" target="_blank">Webmail</a></li>
<li><a href="<?php echo $root?>news_desk/news.php">News</a></li>
<li><a href="<?php echo $root?>quick_link/tender.php">Tenders</a></li>
</ul>	 
</div>
<div class="box1">
<h4>Quick Links</h4>
<ul >
<li>
<a href="<?php echo $root?>facility/library.php">Central Library</a></li>
<li> 
<a href="<?php echo $root?>facility/cc.php">Computer Center</a></li>
<li> 
<a href="<?php echo $root?>facility/index.php">Facilities</a></li>
<li> 
<a href="<?php echo $root?>facility/cc.php">Computer Center</a></li>
<li> 
<a href="<?php echo $root?>quick_link/recruitment.php">Jobs @ NITJSR</a></li>
<li> 
<a href="<?php echo $root?>facility/cc.php">Computer Center</a></li>
<li> 
<a href="<?php echo $root?>quick_link/officeorder.php">Office Orders</a></li>
<li> 
<a href="<?php echo $root?>contact/">Phonebook</a></li>
<li>
<a href="<?php echo $root?>quick_link/gallery.php">Photo Gallery</a></li>
<li><a href="<?php echo $root?>result/index.php">Results</a></li>
<li><a href="<?php echo $root?>quick_link/tender.php">Tender</a></li>
</ul></br>
<h4>Other Links</h4>
<ul>
<li><a href="<?php echo $root?>industrynalumni/">Alumni</a></li>
        			<li><a href="http://www.ojass.in" target="_blank">Ojass</a></li>
        			<li><a href="http://www.utk.co.in" target="_blank">Utkarsh</a></li>
        			<li><a href="http://www.acmnitjsr.org/" target="_blank"/>ACM Student Chapter</a></li>
        			<li><a href="http://www.csinitjsr.com/" target="_blank"/>CSI Student Chapter</a></li>
<li><a href="<?php echo $root?>quick_link/teqip.php">TEQIP</a></li>

<li><a href="<?php echo $root?>facility/library/journals.php">Online Journals</a></li>
 	                <li><a href="http://jeemain.nic.in" target="_blank">B. Tech. (JEE-Main)</a></li>
                                <li><a href="http://www.dasanit.org" target="_blank">B. Tech. (DASA 2013-14)</a></li>
                                <li><a href="http://www.ccmt.in" target="_blank">M. Tech. (CCMT 2013)</a></li>
                                <li><a href="http://nimcet2013.nitw.ac.in/home/index.php" target="_blank">MCA (NIMCET 2013)</a></li>
        			 <li><a href="<?php echo $root?>feedback.php" target="_blank">Feedback</a></li>
</ul>

</div>
</div>
</div>
</div>
<!--sidetab ends--> 
<?php $root='../';?>
<!--footer starts here -->
<div class="clear"></div>
</br>
<?php include '../footer.php'?>
</body>

</html>
