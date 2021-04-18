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

	
$sql="select * from student where sid=$id"; //echo $sql;
		$result=mysql_query($sql);
		$r=mysql_fetch_array($result);

	?>
<body>

<center>
  <div class="services-heading">
				<h2> Profile</h2>
  </div>

<div class="well">
<form  name="form1" method="post" >

  <table width="303" height="232">
  
    <tr>
      <th width="137" scope="row"><div align="left"><em>Name</em></div></th>
      <td width="32">:</td>
      <td width="118"><label>
        <?php  echo $r["name"]; ?>
      </label></td>
    </tr>
   
    <tr>
      <th scope="row"><div align="left"><em>Mobile Number </em></div></th>
      <td>:</td>
      <td><label>
      <?php  echo $r["phone"]; ?> 
        </label>      </td>
      </tr>
    <tr>
      <th scope="row"><div align="left"><em>Email Id </em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["email"]; ?> 
      </label></td>
    </tr>
	<tr>
      <th scope="row"><div align="left"><em>Created On</em></div></th>
      <td>:</td>
      <td><label>
       <?php  echo $r["created_at"]; ?> 
      </label></td>
    </tr>
	<?php if(!empty($r["last_log"])) { ?>
    <tr>
      <th scope="row"><div align="left"><em>Last Login </em></div></th>
      <td>:</td>
      <td><label>
         <?php  echo $r["last_log"]; ?>
      </label></td>
    </tr>
	<?php } ?>
  </table>
</form>
</div>
<p>&nbsp;</p>
</center>
	

</body>
</html>
