<?php
error_reporting(0);
$root='../';
include($root.'department/auth.php');
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
batch=document.getElementsByTagName("select");
window.onload = init();
function init() {
	//alert(batch);
	batch.selectedIndex = 0;
}
function displayStat(){
	var batch = document.getElementById('batch').value;
	switch(batch) {
		case '2009-10' :
						document.getElementById('2010stats').style.display = "table-row";
						document.getElementById('2011stats').style.display = "none";
						document.getElementById('2012stats').style.display = "none";
						document.getElementById('2013stats').style.display = "none";
						return false;
		case '2010-11' :
						document.getElementById('2010stats').style.display = "none";
						document.getElementById('2011stats').style.display = "table-row";
						document.getElementById('2012stats').style.display = "none";
						document.getElementById('2013stats').style.display = "none";
						return false;
		case '2011-12' :
						document.getElementById('2010stats').style.display = "none";
						document.getElementById('2011stats').style.display = "none";
						document.getElementById('2012stats').style.display = "table-row";
						document.getElementById('2013stats').style.display = "none";
						return false;
		case '2012-13' :
		default:
						document.getElementById('2010stats').style.display = "none";
						document.getElementById('2011stats').style.display = "none";
						document.getElementById('2012stats').style.display = "none";
						document.getElementById('2013stats').style.display = "table-row";
						return false;
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


<!--<div class="main_content">-->
<div class="pageheading">
  <span>Placement Statistics</span>
</div>
<div class="pagecontent">
<p><b>Please select the Batch :</b>
<select name="batch" onchange="displayStat();" id="batch">
	<option value="2012-13">2012-13</option>
	<option value="2011-12">2011-12</option>
	<option value="2010-11">2010-11</option>
	<option value="2009-10">2009-10</option>
</select>
</p>
<div id="2010stats" style="display:none;">
<span class="pagesubheading">2010 Passout Batch</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<?php
$i=0;
?>
	<table class="pagetablecontent">
    	<tr class="tablehead"><td class="companyName">Name of the Company</td>	<td class="noStudent">No. of Students</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Adani Group</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ador Welding</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Arcelor Mittal</td>		<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ashok Leyland</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Belzabar</td>			<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Bharti Infratel</td>	<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Bhushan Steel</td>		<td class="noStudent">16</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Bollineni Castings &amp; Steel Ltd.</td>	<td class="noStudent"></td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">BPCL</td>				<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">CCCL</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">CIL</td>				<td class="noStudent">18</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">CSC</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">DRDO</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Essar Steel</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Gammon India</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Gati Infra</td>			<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">HDIL</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Hindalco</td>			<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">HPCL</td>				<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IBM</td>				<td class="noStudent">35</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Incture Technologies</td>	<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Infosys</td>			<td class="noStudent">51</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IOCL</td>				<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ISPAT Industries</td>	<td class="noStudent">11</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JAL</td>				<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JSL</td>				<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JUSCO</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">KEC</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T ECC</td>		<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T Limited</td>	<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T IES</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mahindra (FES)</td>		<td class="noStudent">11</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Maruti</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mu Sigma</td>			<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NMDC</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NTPC</td>				<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Punj Lloyd</td>			<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Reliance Infra</td>		<td class="noStudent">17</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung (SEL)</td>		<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Simplex Infrastructure</td>	<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Soma Enterprise</td>	<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Auto Components</td>	<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TATA Motors</td>		<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Power</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TATA STEEL</td>			<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TATA STEEL (GS)</td>	<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Steel IT Division</td>	<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Tinplate</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TCE</td>				<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TCS</td>				<td class="noStudent">49</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tech Mahindra</td>		<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TEGA Industries</td>	<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Telcon</td>				<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TRF Ltd.</td>			<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TVS Motors</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Usha Martin</td>		<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Vedanta</td>			<td class="noStudent">20</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">VISA STEEL</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Wipro VLSI</td>			<td class="noStudent">2</td></tr>
        <tr style="font-weight:bold; border-top:groove; background-color:#CCCCCC;"><td>Total</td>				<td class="noStudent">457</td></tr>
    </table>
    <table class="pagetablestyle">
    
    <tr><td style="font-weight:bold;">*Placement Session started on 15th July 2009.</td></tr>
    </table>
</div>
<div id="2011stats" style="display:none;">
<span class="pagesubheading">2011 Passout Batch</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<?php
$i=0;
?>
	<table class="pagetablecontent">
    	<tr class="tablehead"><td class="companyName">Name of the Company</td>	<td class="noStudent">No. of Students</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ABB</td>				<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ACC Cements</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Adani Group</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Arcelor Mittal</td>		<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Aricent</td>			<td class="noStudent">40</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ashok Leyland</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Canara Bank</td>		<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">CCCL</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Cummins India</td>		<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ERA Group</td>			<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Essar Group</td>		<td class="noStudent">11</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">FMC Technologies</td>	<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Gammon India</td>		<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Gati Infrastructure</td><td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Head Strong</td>		<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Hindalco</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">HPCL</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IBM</td>				<td class="noStudent">29</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IDBI Bank</td>			<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Infosys</td>			<td class="noStudent">57</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IOCL</td>				<td class="noStudent">12</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ISWP</td>				<td class="noStudent"></td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JSL</td>				<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JSPL</td>				<td class="noStudent">13</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JSW</td>				<td class="noStudent">24</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">JUSCO</td>				<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T IES</td>		<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T ECC</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T Heavy</td>	<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Lafarge India</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">LANCO</td>				<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mahindra (FES)</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Maruti</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mecon</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Microsoft</td>			<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mu Sigma</td>			<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NMDC</td>				<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NTPC</td>				<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">One97</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Rancore</td>			<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Reliance Power</td>		<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Renault-Nissan</td>		<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung (SEL)</td>		<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Sankalp Semiconductors</td>	<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Sapient</td>			<td class="noStudent">18</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Simplex Infra</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Suzuki Powertrain</td>	<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Auto Components</td>	<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Motors</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Power</td>			<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Steel</td>			<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Technologies</td>	<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Tinplate</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tayo Rolls Ltd.</td>	<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tech Mahindra</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Telcon</td>				<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TRF</td>				<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TVS Motors</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Usha Martin</td>		<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Virtusa</td>			<td class="noStudent">14</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Visa Steel</td>			<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Vizag Steel</td>		<td class="noStudent">14</td></tr>
        <tr style="font-weight:bold; border-top:groove; background-color:#CCCCCC;"><td>Total</td>				<td class="noStudent">464</td></tr>
    </table>
    <table class="pagetablestyle">
    
    <tr><td>&nbsp;</td></tr>
    <tr><td style="font-weight:bold;">*Placement Session started on 20th July 2010.</td></tr>
    </table>
</div>
<div id="2012stats" style="display:none;">
	<span class="pagesubheading">2012 Passout Batch</span>
<img src="<?php echo $root?>images/h2.png" width="100%" /><?php
$i=0;
?>
	<table class="pagetablecontent">
    	<tr class="tablehead"><td class="companyName">Name of the Company</td>	<td class="noStudent">No. of Students</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ACC Cements</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Adani Group</td>		<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Adhunik Group</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Afcons</td>				<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Airvana</td>			<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Allgo Systems</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Amazon</td>				<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Amdocs</td>				<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Aricent</td>			<td class="noStudent">17</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ashiana Builders</td>	<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ashok Leyland</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Atos Origin</td>		<td class="noStudent">13</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Belzabar</td>			<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Coal India Limited</td>	<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Comviva</td>			<td class="noStudent">11</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Cummins India Ltd.</td>	<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Deloitte</td>			<td class="noStudent">20</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">DVC</td>				<td class="noStudent">12</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Electro Steel</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Ericsson</td>			<td class="noStudent">17</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Essar Group</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Gammon</td>				<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Hindalco</td>			<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IBM</td>				<td class="noStudent">13</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IDBI Bank</td>			<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IDT Cementation</td>	<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Indian Navy</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Infosys</td>			<td class="noStudent">78</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">IOCL</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ISMT</td>				<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">ITW Signode</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Jamshedpur CAPCPL</td>	<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Jindal South West</td>	<td class="noStudent">21</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Jindal Stainless Limited</td>	<td class="noStudent">11</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Jindal Steel &amp; Power Limited</td>	<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">KK Builders</td>		<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Kony Labs</td>			<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T ECC</td>		<td class="noStudent">6</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">L &amp; T Limited</td>	<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mahindra &amp; Mahindra</td>	<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Maruti Suzuki</td>		<td class="noStudent">16</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Matix Fertilisers</td>	<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Metalsa</td>			<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Microsoft</td>			<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Mu Sigma</td>			<td class="noStudent">8</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NAGRA</td>				<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">NECO Jaiswal</td>		<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Pradeep Phospate</td>	<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Rancore</td>			<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Rashtriya Ispat Nigam Ltd.</td>	<td class="noStudent">7</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">RPSG-CESC</td>			<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung Heavy</td>		<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung I S C</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung I S O</td>		<td class="noStudent">15</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Samsung Labs</td>		<td class="noStudent">9</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Siemens</td>			<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Simplex Infra</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Sony</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">SPML</td>				<td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Suzuki Powertrain India Ltd.</td>	<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Taco</td>				<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Motors</td>		<td class="noStudent">14</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Power</td>			<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Projects</td>		<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Steel</td>			<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Steel ITS</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Technologies</td>	<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tata Tinplate</td>		<td class="noStudent">3</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Tayo Rolls Ltd.</td>	<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TCE</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Telcon</td>				<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Thyssen Krupp Steel</td><td class="noStudent">2</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TRF</td>				<td class="noStudent">4</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">TVS</td>				<td class="noStudent">0</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Unisys</td>				<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Usha Martin</td>		<td class="noStudent">5</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Virtusa</td>			<td class="noStudent">10</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">Welspun</td>			<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">WIPRO BPO</td>			<td class="noStudent">1</td></tr>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>"><td class="companyName">WIPRO</td>				<td class="noStudent">12</td></tr>
        
        <tr style="font-weight:bold; border-top:groove; background-color:#CCCCCC;"><td>Total</td>				<td class="noStudent">541</td></tr>
    </table>
    <table class="pagetablestyle">

    <tr><td>&nbsp;</td></tr>
    <tr><td style="font-weight:bold;">*Placement Session started on 19th July 2011.</td></tr>
    <tr><td style="font-weight:bold;">**Placement Data till 5th May 2012.</td></tr>
    </table>
</div>

<div id="2013stats">
<span class="pagesubheading">2013 Passout Batch</span>
<img src="<?php echo $root?>images/h2.png" width="100%" />
<table class="pagetablecontent">
    	<tr class="tablehead"><td class="companyName">Name of the Company</td>	<td class="noStudent">No. of Students</td></tr>
<?php
$i=0;
$students=array();
$sql="select * from placement where batch='2013' ORDER BY name ASC;";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{	
?>
        <tr class="table<?php echo (++$i%2)?"light":"dark"; ?>">
        	<td class="companyName"><?php echo $row['name'];?></td>
            <td class="noStudent"><?php echo $row['no_student']; array_push($students,$row['no_student']);?></td>
        </tr>
<?php
}
$totalstudents=	array_sum($students);
$sql1="select * from placement where slno='0' LIMIT 1";
$result1 = mysql_query($sql1);
$row1=mysql_fetch_array($result1);
$doublestudents= $row1['no_student'];
$triplestudents= $row1['batch'];
$date= $row1['name'];
$nostudents= $totalstudents-$doublestudents-(2*$triplestudents);
?>
        <tr style="font-weight:bold; border-top:groove; background-color:#CCCCCC;">
        	<td>Total</td>
        	<td class="noStudent"><?php echo $totalstudents;?></td>
        </tr>
    </table>
    <table class="pagetablestyle">
    
    <tr><td style="font-weight:bold;">*Placement Session started on 25th July 2012.</td></tr>
    <tr><td style="font-weight:bold;">**Placement Data till <?php echo $date;?>.</td></tr>
    </table>
</div>
</div>
</div>

<div class="col2">
<?php include 'sidepanel.php'?>
</div>

<div class="clear">
<!--footer starts here -->
<?php include $root.'footer.php' ?>
<!-- footer ends here -->
</div></body></html>
