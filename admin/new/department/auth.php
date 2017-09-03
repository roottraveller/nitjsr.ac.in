<?php
error_reporting(0);
$dbhost='localhost';
					$dbuser='root';
					$dbpass='';
					$obj=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
					mysql_select_db('nit', $obj);
					if(!$obj)
					{
						echo "an error occured while connecting";
						exit;
					}
?>
