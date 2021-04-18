<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<?php
include("header.php"); 
	include 'dbconn.php';
if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$name=$_POST['name'];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$nameErr="Name contain lettters and white space";
			$status="true";
		}
	$school=$_POST['school'];
		if($school == '--Select--')
		{
			$schoolErr ="Select School";
			$status="true";
		}
	$designation=$_POST['designation'];
		if($designation == '--Select--')
		{
			$designationErr ="Select designation";
			$status="true";
		}
	$department=$_POST['department'];
		if($department == '--Select--')
		{
			$departmentErr ="Select department";
			$status="true";
		}
	$gender=$_POST['gender'];
	
	$age=$_POST['age'];
		if(!preg_match("/^[0-9]{2}$/",$age))
		{
			$ageErr ="Enter age in digit";
			$status="true";
		}
		if($age < 20)
		{
			$ageErr ="Age Limit error";
			$status="true";
		}
	$email=$_POST['email'];
	
			$sql="select * from login where un1='$email'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record == 1)
			{
				$emailErr="Already Registered EmailId..!";
				$status="true";
			}
	
	$phone=$_POST['phone'];
		if(!preg_match("/^[0-9]{10}$/",$phone))
		{
			$phoneErr ="Invaild Mobile Number";
			$status="true";
		}
			$sql="select * from login where un2='$phone'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record == 1)
			{
				$phoneErr ="Already Registered Mobile Number..!";
				$status="true";
			}
	$password=$_POST['password'];
	$created_at= date('Y-m-d');
	
	if(!isset($status))
	{
	
	
	$sql="insert into faculty(name,school,designation,department,gender,age,email,phone,created_at,status) values ('$name','$school','$designation','$department','$gender','$age','$email','$phone','$created_at',1)";
		//echo $sql;
		mysql_query($sql) or die();
		$sql="select max(fid) from faculty";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$id=$row[0];
			$sql="insert into login(un1,un2,password,loginid,type) values ('$email','$phone','$password','$id','Faculty')";
		//echo $sql;
		mysql_query($sql) or die();
		// clear
		$msg = "Successfully Registered ";
		$name=$email=$phone=$age=$password=$cpassword="";
	}
	else 
		$err = "Something went wrong.. Plz Try again.....";
}
	?>
<body>

<center>
<h1>&nbsp;</h1>
<h3 class="h3-w3l">Faculty Registration</h3>
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
  <table width="488" height="218" >
    <tr>
      <th width="167" scope="row"><div align="left">Name</div></th>
      <td width="40">:</td>
      <td width="265"><label>
        <input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>" required />
        <span style="color:#FF0000;">
        <?php if(isset($nameErr)) echo $nameErr; ?>
        </span></label></td>
    </tr>
   
    <tr>
      <th scope="row"><div align="left">School</div></th>
      <td>:</td>
      <td><select name="school">
	  <option>--Select--</option>
	  <?php
	  $sql="select * from school"; //echo $sql;
		$result=mysql_query($sql);
		while($r=mysql_fetch_array($result)){
		
	   ?>
	   <option value="<?php echo $r['id']; ?>"><?php echo $r["schoolname"]; ?></option>
	   <?php } ?>
	  </select><span style="color:#FF0000;">
        <?php if(isset($schoolErr)) echo $schoolErr; ?>
        </span>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Designation</div></th>
      <td>:</td>
      <td><select name="designation">
	  <option>--Select--</option>
	  <?php
	  $sql="select * from designation"; //echo $sql;
		$result=mysql_query($sql);
		while($r=mysql_fetch_array($result)){
		
	   ?>
	   <option value="<?php echo $r['id']; ?>"><?php echo $r["design"]; ?></option>
	   <?php } ?>
	  </select><span style="color:#FF0000;">
        <?php if(isset($designationErr)) echo $designationErr; ?>
        </span>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Department</div></th>
      <td>:</td>
      <td><select name="department">
	  <option>--Select--</option>
	  <?php
	  $sql="select * from department"; //echo $sql;
		$result=mysql_query($sql);
		while($r=mysql_fetch_array($result)){
		
	   ?>
	   <option value="<?php echo $r['id']; ?>"><?php echo $r["dept"]; ?></option>
	   <?php } ?>
	  </select><span style="color:#FF0000;">
        <?php if(isset($departmentErr)) echo $departmentErr; ?>
        </span>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Gender</div></th>
      <td>:</td>
      <td><label>
        <input name="gender" type="radio" value="Male" checked/>
        Male
        <input name="gender" type="radio" value="Female" />
        Female</label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Age</div></th>
      <td>:</td>
      <td><input type="text" name="age" value="<?php if(isset($age)) echo $age; ?>" required="required" /><span style="color:#FF0000;">
        <?php if(isset($ageErr)) echo $ageErr; ?>
        </span></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Phone Number </div></th>
      <td>:</td>
      <td><label>
      <input type="text" name="phone" value="<?php if(isset($phone)) echo $phone; ?>" required />
	 	</label>
        <span style="color:#FF0000;">
        <?php if(isset($phoneErr)) echo $phoneErr; ?>
        </span></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Email Id </div></th>
      <td>:</td>
      <td><label>
      <input type="email" name="email" value="<?php if(isset($email)) echo $email; ?>" required />
      <span style="color:#FF0000;">
      <?php if(isset($emailErr)) echo $emailErr; ?>
      </span></label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left">Password</div></th>
      <td>:</td>
      <td><label>
      <input type="password" name="password" required />
      </label></td>
    </tr>
    
    <tr>
      <th scope="row">&nbsp;</th>
      <td colspan="2"><label></label></td>
      </tr>
  </table>
  <p>
    <label>
    <input type="submit" name="Submit" value="Register" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
</center>

</body>
</html>
