<?php


$u=$_POST['uname'];
$p=$_POST['pass'];


include 'connection.php';
$sql="select * from login where userid='$u'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	if($p==$row[1])
	{
			session_start();
			
			$_SESSION['id']=$row[0];
		header('location:admin_panel.php');
	}
	else{
		header('location:index.php');
	}
}
else
{
header('location:index.php');
}

?>
