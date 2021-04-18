
<?php
	include("header.php"); 
	session_start();
	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	
			$sql="select * from notes"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		
?>

<body>
<center>
  <h1>Notes </h1>
	
  <?php if(!isset($msg)) { ?>

<table id="customers">
  <tr>
		<th><strong><em>#</em></strong></td>
		<th><strong>Faculty</strong></td>
		<th><strong>Subject</strong></td>
		<th><strong><em> Note </em></strong></td>
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
	<td><?php $fid = $r["fid"];
	
	$ss="select * from faculty where fid= $fid"; //echo $sql;
			$re=mysql_query($ss);
			$rw=mysql_fetch_array($re);
			echo $rw["name"];
	
	 ?>&nbsp;</td>
	<td><?php echo $r["subject"]; ?>&nbsp;</td>
	<td><a href="../Note/<?php echo $r["note"]; ?>" download >Download Note</a>&nbsp;</td>
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
