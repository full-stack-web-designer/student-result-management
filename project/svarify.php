<?php


echo $u=$_POST['uname'];
echo $p=$_POST['pass'];


include 'connection.php';
$sql="select * from login where userid='$u'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	if($p==$row[1])
	{
			session_start();
			
			$_SESSION['enroll']=$row[0];
		header('location:spanel.php');
	}
	else{
		header('location:slogin.php');
	}
}
else
{
header('location:slogin.php');
}

?>
