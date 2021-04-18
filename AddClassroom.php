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
$sql="select * from faculty where fid=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);

if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$subject=$_POST['subject'];
	$link=$_POST['link'];
	
	if(!isset($status))
	{
	$sql="insert into classroom(fid,subject,link) values ('$id','$subject','$link')";
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
<h1>Add Classroom  </h1>
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
      <th width="189" height="48" scope="row"><div align="left">Subject</div></th>
      <td width="16">:</td>
      <td width="378"><label>
      <input type="text" name="subject" value="<?php if(isset($subject)) echo $subject; ?>"  />
	 	</label>
        <span style="color:#FF0000;">        </span></td>
    </tr>
	 <tr>
      <th scope="row"><div align="left">Upload Note</div></th>
      <td>:</td>
      <td><label>
      <textarea name="link"><?php if(isset($link)) echo $link; ?></textarea>
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
