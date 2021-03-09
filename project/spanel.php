<?php

include 'connection.php';
//include 'sverify.php';

session_start();
$en=$_SESSION['enroll'];
$sql="select sname from student where enroll='$en'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Panel</title>
	<style>
	input
	{
		font-size: 16px;
	
	
		border-radius: 6px;
		border-color:#809fff; 
	}
	h2
	{

		color: red;
	}
	</style>
</head>
<body bgcolor=" #80ffdf">
		<p align="right"><a href="logout.php">LOGOUT</a></p>
<form method="POST" action="sresult.php">
	<center>
		<h2><font color="darkblue">STUDENT PANEL</font></h2>
<table>
<tr><td><input type="text" name="enroll" value="<?php echo $en?>" readonly="readonly" placeholder="Enrollment"></td>
	<td><input type="text" name="sname" value="<?php echo $row['sname'] ?> "readonly="readonly" placeholder="Name" ></td></tr>
</table>
<br><br>
<select name="test">
	<option>UT1</option>
	<option>UT2</option>
	<option>MST1</option>
	<option>MST2</option>
	<option>PUT</option>

</select>
<input type="submit" value="GO">
</center>
</form>
</body>
</html>