<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<?php
session_start();
 if($_SESSION['status']!="Active")
{
    header("location:../login.php");
}
 
include("header.php"); 
include 'dbconn.php';
$id =$_SESSION["id"];
$sql="select * from student where sid=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);

if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$feedback=$_POST['feedback'];
	
	if(!isset($status))
	{
	$sql="insert into feedbacks(userid,feedback,type) values ('$id','$feedback','Student')";
	//echo $sql;
		mysql_query($sql) or die();
		// clear
		$msg = "Successfully Inserted ";
		$complaint="";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
}
	?>
<body>

<center>
<h1>Add Feedback </h1>
<?php
 if(isset($msg)) { ?>
 <div style="background-color:#66CC99; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $msg; ?></div>
 <?php } ?>
 
 <?php
 if(isset($err)) { ?>
 <div style="background-color:#FF3333; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $err; ?></div>
   <?php } ?>
<p>&nbsp;</p>
<form  name="form1" method="post"  enctype="multipart/form-data" >
  <table width="599" height="118" >
	<tr>
      <th width="189" height="48" scope="row"><div align="left">Name</div></th>
      <td width="16">:</td>
      <td width="378"><label>
      <input type="text" name="name" value="<?php  echo $r["name"]; ?>" readonly="" />
	 	</label>
        <span style="color:#FF0000;">        </span></td>
    </tr>
	 <tr>
      <th scope="row"><div align="left">Feedback</div></th>
      <td>:</td>
      <td><label>
        <textarea name="feedback" cols="25" rows="5" required><?php if(isset($feedback)) echo $feedback;  ?></textarea>
      </label></td>
    </tr>
  </table>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
</center>

</body>
</html>
