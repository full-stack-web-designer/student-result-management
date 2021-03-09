<?php
include'connection.php';
$enroll=$_POST['enroll'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$sql="update student set mobs='$mob',email='$email', enroll='$enroll'";
if (mysqli_query($con,$sql)) {
	echo "update successfully";
}
else
{
	echo "update unsuccessfully";
}
header('location:sdisplay.php');
?>