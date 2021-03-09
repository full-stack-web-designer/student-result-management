<?php

$en=$_POST['enroll'];
$sname=$_POST['sname'];
$b=$_POST['branch'];
$sem=$_POST['sem'];
$g=$_POST['gender'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$addr=$_POST['addr'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];


echo $en;
echo "<br>".$sname;
echo "<br>".$b;
echo "<br>".$sem;
echo "<br>".$g;
echo "<br>".$dob;
echo "<br>".$fname;
echo "<br>".$mob;
echo "<br>".$email;
echo "<br>".$pass;
echo "<br>".$cpass."<br>";

include 'connection.php';

$sql="insert into student(enroll,sname,branch,sem,gender,dob,fnames,addr,mobs,email,pass) VALUES('$en','$sname','$b','$sem','$g','$dob','$fname','$addr','$mob','$email','$pass')";
if(mysqli_query($con,$sql))
	echo "<br> query successfully";
else
	echo "<br> query unsuccessfully";

?>
