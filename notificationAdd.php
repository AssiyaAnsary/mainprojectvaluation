<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include("header.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	include 'dbconn.php';
	$name=$_POST['name'];
	$sql="select * from notifications where notification='$name'";
			$result=mysql_query($sql);
			$record=mysql_num_rows($result);
			if($record == 1)
			{
				$err="Notification Name exists, try another.....!";
				$status="true";
			}
	if(!isset($status))
	{	
	$ndate = date('d-m-yy');
	$sql="insert into notifications(notification,ndate,nos) values ('$name','$ndate',10)";
		//echo $sql;
		mysql_query($sql) or die();
	
		echo '<script type="text/javascript"> alert("Successfully Added");</script>';
		// clear
		$name="";

	}
}
	?>
<body>

<center>

<h3 >Add New Notification</h3>

<form  name="form1" method="post" >
  <p>&nbsp;</p>
  <table width="656" height="102">
    <tr>
      <th width="322" scope="row"><em>Notification</em></th>
      <td width="322"><label>
         
        <textarea name="name" cols="" rows="" required></textarea>
      </label></td>
	   <td width="84"> <span style="color:#FF0000;"><?php if(isset($err)) echo $err; ?></span></td>
    </tr>
   
  
  </table>
  <p>
    <label>
    <input type="submit" name="Submit" value="Add " />
    </label>
  </p>
</form>
<p>&nbsp;</p>
</center>

</body>
</html>
