<?php 
session_start();

$id =$_SESSION["id"];
$y= date('Y-m-d');
$sql="update houseowner set last_log='$y' where id=$id";
		echo $sql;
		mysql_query($sql);

session_destroy();
header("location:../login.php");
?>