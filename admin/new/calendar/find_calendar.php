<?php 
error_reporting(0);
$con = mysql_connect('localhost','root','1234');

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("nit", $con);
$arr1=array(31,28,31,30,31,30,31,31,30,31,30,31);
$arr2=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$month=mysql_real_escape_string($_GET['month']);
$year=mysql_real_escape_string($_GET['year']);

$pr_date = getdate();
$pr_mnth = $pr_date['mon'];
$pr_yr = $pr_date['year'];

if($month==null || $month=='' || $year==null || $year=='')
{
$month=date('m');
$year=date('Y');
}
if($month>12)
{
$month=1;
$year++;
}
if($month<1)
{
$month=12;
$year--;
}
$leap=0;
$day=01;
$evnt=array();
$evnt_dt=array();
$evnt_len=0;

$a = (int)((14 - $month) / 12);
$y = $year- $a;
$m = $month+ 12 * $a - 2;
$d = ($day + $y + (int)($y / 4) - (int)($y / 100) + (int)($y / 400) + (int)((31 * $m) / 12))  % 7;
//echo "***".$ar[$d]."***";
if($year%4==0)
{
$leap=1;
if($year%100==0 && $year%400!=0)
{
$leap=0;
}
}
if($leap==1)
{
$arr1[1]=29;
}
$month2=$month+1;
$year2=$year;
if($month2>12)
{
$month2=1;
$year2++;
}

$sql="select DAYOFMONTH(event_date),event,id from events where event_date between '".$year."-".$month."-01' and '".$year2."-".($month2)."-01' order by event_date asc";
//echo $sql;
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
//echo "<br>".$row[0]."    ".$row[1]."   ".$row[2]."<br>";
$evnt_dt[$evnt_len]=$row[0];
$evnt[$evnt_len]=$row[1];
$evnt_id[$evnt_len]=$row[2];
$evnt_len++;

}


?>
<?php
$tmp=1;
echo "<table class='month' width='235' align='center' border='0' style='margin-top:-10px;'>";
echo "<tr><td class='monthnavigation' colspan='2'>";
echo "<a href=javascript:loadContent('".($month-1)."','".$year."');><img src='h3-arrow-previous.png' alt='&lt;&lt;' border='0'></a>";
echo "</td><td class='monthname' colspan='3' border='0'>".$arr2[$month-1]." ".$year."</td>";
echo "<td class='monthnavigation' colspan='2'><a href=javascript:loadContent('".($month+1)."','".$year."');><img src='h3-arrow-next.png' alt='&gt;&gt;' border='0'></a></td>";
echo "</tr>";
echo "<tr>";
echo "<td class='dayname'>Su</td><td class='dayname'>Mo</td><td class='dayname'>Tu</td><td class='dayname'>We</td><td class='dayname'>Th</td><td class='dayname'>Fr</td><td class='dayname'>Sa</td>";
echo "</tr>";
echo "<tr>";
$tmp2=1;
$tmp_evnt_dt=0;
$cur_dt=date('d');

while($tmp<($d+1))
{
echo "<td class='nomonthday'></td>";
$tmp++;
}
while($tmp2<=$arr1[$month-1])
{
if($tmp_evnt_dt<$evnt_len && ($evnt_dt[$tmp_evnt_dt]==$tmp2))
{
echo "<td class='event'><a style='cursor:pointer;' href='../quick_link/all_events.php#".$evnt_id[$tmp_evnt_dt]."' target='_blank' title='".$evnt[$tmp_evnt_dt]."'>".$tmp2."</a></td>";
$tmp_evnt_dt++;
}
else
{
if($cur_dt==$tmp2 && $month==$pr_mnth && $year==$pr_yr)
{
echo "<td class='today' title='Today'>".$tmp2."</td>";
}
else
{
echo "<td class='monthday'>".$tmp2."</td>";
}
}
$tmp2++;
if($tmp%7==0)
{
echo "</tr><tr>";
}
$tmp++;
}
echo "</tr>";
echo "</table>";
?>
