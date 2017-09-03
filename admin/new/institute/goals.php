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
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo $root;?>new/css/style1.css">

</head>
<body>
<div id="bg" >

<?php include $root.'header.php' ?>
</div>


<div id="wrapper_sec">
<div class="main_content">
<div class="pageheadingimg">
  <span>Goals and Objectives</span>
</div> 
<div class="pagecontent"><img class="page_images"  src="images/goals.jpg" width="100%" /><p></br></p>
	<div class="pagesubheading">Goals</div>
    <img  src="<?php echo $root?>images/h2.png" width="100%" />

    <ul>
    	<li>To offer effective teaching-learning to students </li>
		<li> To Provide the knowledge, skills and attitudes to UG and PG students for their being able to be distinguished globally and be socially responsible</li>
		<li> To train the students to learn to meet changing needs due to rapid technological advancement, to offer the society the necessary technology and to actively participate in all round socio-economic development programmes</li>
<li> To provide facilities, infrastructure, inspiration and resources to conduct the meaningful research along with development of understanding of social relevance including that of indigenous materials, capacities and technologies</li>
<li> To act as centres of excellence in technical education catalysing absorption, innovation, diffusion and transfer of high technologies for improved productivity & quality of life at national and global level</li>
<li> To have regional consideration as regards to local needs, relevance, strength and limitations and the community services</li>
	</ul>

    
   
    <div class="pagesubheading">Objectives</div>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	
	<ul>
    <li>To Create an environment for effective teaching-learning by encouraging the students and faculty to nurture their intellectual curiosity, 		        and scientific and research temper</li>
	<li>Induction of highly qualified, talented, competent & motivated faculty, and trained & dedicated supporting technical and administrative staff</li>
	<li>Establishment of excellent academic support facilities (laboratory, library, Internet etc) required for good education on continuous basis</li>
	<li>Provide opportunities for continuous updating the knowledge of faculty through faculty exchange from premier institutions and industry</li>
	<li>Establishment of procedures and methodologies for regular monitoring and control of quality of all academic programmes</li>
	<li>Reforms in regulations and curriculum-greater flexibility to students</li>
	<li>IT enabled management of all activities of institute</li>
	<li>Have strong linkage with industries</li>
	<li>Technology up-gradation, development and transfer</li>
	<li>Active participation of alumni in resource generation and planning and development</li>
	<li>Organizing and participation of staff and students in in-house and outside training programs, seminars, conferences and workshops on continuous basis</li>
	<li>Increase research and consultancy activity, with options for incentives and encouragement to motivate staff and students to actively involve in research activities in collaboration with industry and R&D Centres</li>
	<li>Increase the number of continuing education programmes</li>
	<li>Exchange faculty and working personnel from industry</li>
	<li>Providing the society with necessary consultancy and training to solve local problems on a con by organising community development programs	</li>
	<li>Increase demand and pay packages of the student</li>
	<li>Increase Institute-Industry interaction</li>
	<li>Entrepreneurship development</li>
	<li>Increased interaction with educational and other research institutes</li>
</ul>

 <span class="pagesubheading">Methodologies</span>
    <img src="<?php echo $root?>images/h2.png" width="100%" />
	<span class="pagecontent"><ul>
    <li>Identify the particular areas of technology needed</li>
	<li>Identify the problems of particular region</li>
	<li>SWOT analysis (Examining of the existing facilities</li>
	<li>Submit concrete proposals to funding agencies for necessary grant</li>
	<li>Establish/strengthen R&D facilities in the institute in collaboration with industries</li>
	<li>Develop more research-oriented labs and centres</li>
	<li>Involve students in innovative technology projects</li>
	<li>Research & development oriented education</li>
	<li>Create national/international collaborative programmes</li>
	<li>Introduce need based more number of UG, PG & research programmes</li>
	<li>Networking among NITs for resource and expertise sharing</li>
	<li>Improve in service conditions of faculty members and technical staff commensurate to that of the industry to attract best faculty and staff</li>
	<li>Introduction of award of merit, recognition and sabbatical leave to performing faculty and staff</li>
	
</ul></span>

</div>
</div>
</div>

<!--sidetab starts here-->
<div class="col2">
<?php include '../sidepanel.php'?>
</div>
<!--sidetab ends-->

<div class="clear"></div>
<!--footer starts here -->
<?php include '../footer.php' ?>
<!-- footer ends here -->

</body></html>
