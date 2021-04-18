
<?php
	include("header.php"); 
	session_start();
	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	
			$sql="select * from feedbacks"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		
?>

</style>
<body>
<center>
  <h1>Feedbacks </h1>
	
  <?php if(!isset($msg)) { ?>

<table id="customers">
  <tr>
		<th><strong><em>#</em></strong></th>
		<th><strong>Name</strong></th>
		<th><strong>Feedback</strong></th>
		<th><strong><em> Type of User </em></strong></th>
  </tr>
  <?php
  include 'dbconn.php';
  //$sql= "select * from customer"; echo $sql;
  $res = mysql_query($sql);
  $sl=0;
  while($r=mysql_fetch_array($res))
  { $sl+=1;
  ?>
  <tr>
    <td><?php echo $sl; ?>&nbsp;</td>
	<td><?php $type = $r["type"];$userid = $r["userid"]; 
	if($type == "Police"){
	$ss="select * from police where pid= $userid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	}
	if($type == "Faculty"){
	$ss="select * from faculty where fid= $userid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	}
	if($type == "Student"){
	$ss="select * from student where sid= $userid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	}
	 ?>&nbsp;</td>
	<td><?php echo $r["feedback"]; ?>&nbsp;</td>
	<td><?php echo $r["type"];  ?>&nbsp;</td>
  </tr>
  <?php } ?>
</table>
<?php } ?>
<?php if(isset($msg)) { ?>
<h3 style="color:#999999;"><?php echo $msg; ?></h3>
<?php } ?>
	<?php //include("footer.php"); ?>

</center>
</body>
</html>
