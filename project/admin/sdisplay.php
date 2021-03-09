<?php
include 'connection.php';

$sql="select * from student";
$res=mysqli_query($con,$sql);
echo "<table align='center' border='1'>";
echo "<tr bgcolor=orange><th>S.No.</th><th>Enrollment</th>
<th>Name</th><th>Branch</th><th>Semester</th><th>Gender</th><th>DOB</th><th>Father Name</th><th>Address</th><th>Mobile No.</th><th>Email</th><th colspan='3'><font color = white'>Action</th></tr>";
$sn=1;
while($row=mysqli_fetch_array($res))
{
	if($row[11]=='0')
	{
	echo "<tr bgcolor=yellow><td>$sn</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
		<td width='50px' align='center' colspan='3'><a href='sapprove.php?enroll=$row[0]'>Approve</a></td></tr>";

	}
	else
	{
		if($row[11]=='1')
	
	{
	echo "<tr bgcolor=lightgreen><td>$sn</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td>
		<td width='50px' align='center'><a href='sedit.php?edit=$row[0]'>Edit</a></td>
		<td width='50px' align='center'><a href='sdelete.php?edit=$row[0]'>Delete</a></td>
		<td width='50px' align='center'><a href='sreject.php?enroll=$row[0]'>Reject</a></td>
		</tr>";


	}
}	
	$sn++;
	
}
?>