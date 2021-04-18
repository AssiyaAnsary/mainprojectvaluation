<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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

		
if($_SERVER["REQUEST_METHOD"] == "POST")	
{

$sql="select * from login  where loginid=$id and type='Student'";// echo $sql;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$password = $row["password"];
	
	$un=$_POST['un'];
	if($un != $password)
		{
		$err = "Something went wrong.. Plz Try again.....";
		$status="true";
		}
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	if($password != $cpassword)
		{
		$cpasswordErr="Passwords does not match";
		$status="true";
		}
	
	if(!isset($status))
	{
		
		$sql="update login set password='$password' where loginid=$id and type='Student'";
		//echo $sql;
		mysql_query($sql) or die();
		
		$msg = "Password Changed Successfully ";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
	
}


	?>
<body>

<center>
  <div class="services-heading">
				<h2>Change Password</h2>
  </div>

<?php
 if(isset($msg)) { ?>
 <div style="background-color:#66CC99; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $msg; ?></div>
 <?php } ?>
 
 <?php
 if(isset($err)) { ?>
 <div style="background-color:#FF3333; color:#FFFFFF; font-size:16px;  padding:20px; margin:0px 200px;"><?php echo $err; ?></div>
   <?php } ?>
<form  name="form1" method="post" >
  <table width="449" height="213">
    <tr>
      <th width="138" scope="row"> <div align="left">Old Password </div></th>
      <td width="17">:</td>
      <td width="278"><label>
        <input type="text" name="un"  required />
        <span style="color:#FF0000;">
       
        </span></label></td>
    </tr>
   
    <tr>
      <th scope="row"><div align="left">New Password</div></th>
      <td>:</td>
      <td><label>
        <input type="password" name="password" required="required" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Re-Enter Password</div></th>
      <td>:</td>
      <td><label>
        <input type="password" name="cpassword" required="required" />
        <span style="color:#FF0000;">
        <?php if(isset($cpasswordErr)) echo $cpasswordErr; ?>
      </span></label></td>
    </tr>
  </table>
  <p>
    <label>
    <input type="submit" name="Submit" value="Update Profile" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
</center>
	
	
</body>
</html>
