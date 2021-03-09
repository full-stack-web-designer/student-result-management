<?php
include 'connection.php';
$enroll=$_GET['edit'];
 $sql="select * from student where enroll='$enroll'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($res);
 ?>
 <form method="post"action="db_sedit.php">
 <table align="center">
 	<tr><td colspan="2" align="center">student record updation</td>
 	</tr>
 	<tr><td>Enrollment</td>
 	<td><input type="text" name="enroll"value='<?php echo $row['enroll']?>'readonly="readonly"></td>
 	</tr>
 	<tr><td>Name</td>
 	<td><input type="text" name="sname"value='<?php echo $row['sname']?>'readonly="readonly"></td>
 	</tr>
 	<tr><td>Mobile</td>
 	<td><input type="text" name="mob"value='<?php echo $row['mob']?>'></td>
 	</tr>
 	<tr><td>Email</td>
 	<td><input type="text" name="email"value='<?php echo $row['email']?>'></td>
 	</tr>
 	<tr><td colspan="2" align="center"><input type="submit" value="UPDATE"></td></tr>
</table>
 </form>