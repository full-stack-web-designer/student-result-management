<?php
include 'connection.php';
session_start();
 $en=$_SESSION['enroll'];
 $test=$_POST['test'];
$sql="select sname,branch,sem from student where enroll='$en'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
  $d=$_SESSION['enroll'];
$sql1=" select date,res_type,s1,s2,s3,s4,s5 from marks where res_type='$test'";
$res1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($res1);
$total=$row1['s1']+$row1['s2']+$row1['s3']+$row1['s4']+$row1['s5'];

?>
	
	
<html>
<head>

<title>Student Result</title>
</head>

<body bgcolor="#E19545">
  <p align="right"><a href="logout.php">LOGOUT</a></p>
<p align="center"><font color="lightblue" size="+6">SISTec RESULT</font></p>
<br /><br />
<table width="450" height="350" border="1"  align="center" bgcolor="#FFFF99">
  <tr>
    <td colspan="6" align="center"  bgcolor="#996633"><font color="white" size="+3">RESULT</font></td>
  </tr>
  
 
  <tr>
    <td colspan="6" align="center"  bgcolor="green" height="20"><font color="white" size="+2" name="sel"> <p><?php echo $test ?></font></td>
  </tr>
  <tr>
    <td colspan="6" align="center"  bgcolor="red" height="10"><font color="white" size="+1"><p><?php echo $row1['date'] ?> </font></td>
  </tr>
  <tr>
    <td colspan="3"  ><font color="RED" >ENROLLMENT NO.</td>
    <td colspan="3"><b><?php echo $en ?> </td>
  </tr>
  <tr>
    <td colspan="3"><font color="RED">STUDENT NAME</td>
    <td colspan="3"><b><?php echo $row['sname']?></td>
  </tr>
  <tr>
    <td colspan="3" ><font color="RED">BRANCH</td>
    <td colspan="3"><b><?php echo $row['branch']?></td>
  </tr>
  <tr>
    <td colspan="3"><font color="RED">SEMESTER</td>
    <td colspan="3"><b> <?php echo $row['sem']?><label></label>
 
    </td>
  </tr>
  <tr  bgcolor="#996600" align="center">
    <td><font color="white">sub1</font></td>
    <td><font color="white">sub2</font></td>
    <td><font color="white">sub3</font></td>
    <td><font color="white">sub4</font></td>
    <td><font color="white">sub5</font></td>
    <td bgcolor="GREEN"><b><font color="white">TOTAL</font></b></td>
  </tr>
  <tr align="center" height="50" >
    <td bgcolor="blue"><font color="white">
     <?php echo $row1['s1']?>
    
    </td>
    <td bgcolor="blue"><font color="white">
      <?php echo $row1['s2']?>
    </td>
    <td bgcolor="blue"><font color="white">
       <?php echo $row1['s3']?>
    </td>
    <td bgcolor="blue"><font color="white">
       <?php echo $row1['s4']?>
    </td>
    <td bgcolor="blue"><font color="white">
       <?php echo $row1['s5']?>
    </td>
    <td bgcolor="GREEN"><font color="white">
      <?php echo $total; ?>
       <b></b></font></td>
  </tr>
    
     <tr>
	
	<td bgcolor="GREEN" colspan="6"></td>  </tr>
</table>
	
</body>
</html>

	