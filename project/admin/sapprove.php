<?php

include 'connection.php';
$en=$_GET['enroll'];
$sql="update student set varify='1' where enroll='$en'";
mysqli_query($con,$sql);
$sql="update login set varify='1' where userid='$en'";

mysqli_query($con,$sql);
header('location:sdisplay.php');

?>
