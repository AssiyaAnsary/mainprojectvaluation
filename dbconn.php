<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="spc";
mysql_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysql_select_db($dbname) or die(mysql_error());
?>