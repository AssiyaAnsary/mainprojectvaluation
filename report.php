<?php
session_start();
$fid =$_SESSION["id"];


	include 'dbconn.php';
	$sid = $_REQUEST["id"];
		$sql="insert into report(fid,sid) values ('$fid','$sid')";
	//echo $sql;
		mysql_query($sql) or die();
	$res = mysql_query($sql);
	header("location:studentList.php");
?>
<?php /*
<body>

<center>

<?php
 if(isset($msg)) { ?>
 <div style="background-color:#66CC99; color:#FFFFFF; font-size:16px; padding:10px;"><?php echo $msg; ?></div>
 <?php } ?>
 
 <?php
 if(isset($err)) { ?>
 <div style="background-color:#FF3333; color:#FFFFFF; font-size:16px; padding:10px;"><?php echo $err; ?></div>
 <p>
   <?php } ?>
 </p>
 </center>
 </body>
 */
 ?>