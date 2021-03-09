<?php
include 'connection.php';
$enroll=$_GET['delete'];
$sql="delete from student where enroll='$enroll'";
mysqli_query($con,$sql);
header('location:sdisplay.php');?>