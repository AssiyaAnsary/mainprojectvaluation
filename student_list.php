
<?php
	include("header.php"); 
	session_start();
	$id =$_SESSION["id"];

	 if($_SESSION['status']!="Active")
	{
		header("location:logout.php");
	}
	
	include 'dbconn.php';
	if($_SERVER["REQUEST_METHOD"] == "POST")	
		{
			$value=$_POST['value'];
			$sql="select * from student where (name='$value' or email='$value' or phone='$value' or class='$value' or division='$value') and status=0"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			
			if($m < 1) { $msg ="No results found..!";}
			
		}
	else
		{
			$sql="select * from student"; //echo $sql;
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$m = mysql_num_rows($result);
			if($m < 1) { $msg ="No results found..!";}
		}
	
?>

<body>
<div id='body'>
<center>
  <h1>Student List </h1>
	  <form  name="form1" method="post" >
		  <table >
			<tr>
			  
			  <td ><label>
				  
				<input type="text" name="value" value="<?php if(isset($value)) echo $value; ?>" placeholder="Enter text here.." /><input name="" type="submit" value="Search">
			  <a href="studentList.php">Clear search</a></label></td>
			 
			</tr>
		</table>
  </form>
<?php if(!isset($msg)) { ?>
	</div>
<table id="customers">
  <tr>
		<th><strong><em>#</em></strong></th>
		<th><strong>Name</strong></th>
		<th><strong><em>Email</em></strong></th>
		<th><strong>Phone Number </strong></th>
		<th><strong><em> Class </em></strong></th>
		
  </tr>
  <?php
  include 'dbconn.php';
  
  $res = mysql_query($sql);
  $sl=0;
  while($r=mysql_fetch_array($res))
  { $sl+=1;
  ?>
  <tr>
    <td><?php echo $sl; ?>&nbsp;</td>
	<td><?php echo $r["name"]; ?>&nbsp;</td>
	<td><?php echo $r["email"]; ?>&nbsp;</td>
	<td><?php echo $r["phone"];  ?>&nbsp;</td>
	<td><?php echo $r["class"];  ?> - <?php echo $r["division"];  ?>&nbsp;</td>
	
  </tr>
  <?php } ?>
</table>
<?php } ?>
<?php if(isset($msg)) { ?>
<h3 style="color:#999999;"><?php echo $msg; ?></h3>
<?php } ?>
	
	<input type="submit" style="margin-left:600px" id="btn" value="Print" style="background:tomato" onclick="myFunction()">

</center>


<script>
function myFunction() {
	debugger;
  document.getElementById("body").style.display = "none";
  document.getElementById("btn").style.display = "none";
  document.getElementById("customers").style.display = "block";
  window.print();
  window.location.href = "student_list.php";
}
</script>
</body>
</html>
