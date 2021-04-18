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
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	
		$sql="select * from login where un1='$email'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record > 1)
			{
				$emailErr="Already Registered EmailId..!";
				$status="true";
			}
	$phone=$_POST['phone'];
	if(!preg_match("/^[0-9]{10}$/",$phone))
		{
			$phnErr="Phone Number contain 10 digits";
			$status="true";
		}
		$sql="select * from login where un2='$phone'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record > 1)
			{
				$phnErr ="Already Registered Mobile Number..!";
				$status="true";
			}

	
	if(!isset($status))
	{
		$sql="update student set name='$name',email='$email',phone='$phone' where sid=$id";
		//echo $sql;
		mysql_query($sql) or die();
		
		$sql="update login set un1='$email',un2='$phone' where loginid=$id and type='Student'";
		//echo $sql;
		mysql_query($sql) or die();
		
		$msg = "Successfully updated your details";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
	
}
$sql="select * from student where sid=$id";// echo $sql;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);

	?>
<body>

<center>
  <div class="services-heading">
				<h2>Update Profile</h2>
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
      <th width="138" scope="row"> <div align="left">Name</div></th>
      <td width="17">:</td>
      <td width="278"><label>
        <input type="text" name="name" value="<?php echo $row["name"]; ?>" required />
        <span style="color:#FF0000;">
        <?php if(isset($nameErr)) echo $nameErr; ?>
        </span></label></td>
    </tr>
   
    <tr>
      <th scope="row"><div align="left">Email Id </div></th>
      <td>:</td>
      <td><label>
      <input type="email" name="email" value="<?php echo $row["email"]; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($emailErr)) echo $emailErr; ?>
      </span></label></td>
    </tr>
	 <tr>
      <th scope="row"><div align="left">Phone Number </div></th>
      <td>:</td>
      <td><label>
      <input type="text" name="phone" value="<?php echo $row["phone"]; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($phnErr)) echo $phnErr; ?>
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
