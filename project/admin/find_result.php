<?php

include 'connection.php';
$branch=$_POST['branch'];

$sem=$_POST['sem'];

$test=$_POST['test'];

$sql="select student.enroll, student.sname, student.branch, student.sem, marks.res_type, marks.s1, marks.s2, marks.s3, marks.s4, marks.s5 from student NATURAL JOIN marks where student.branch='$branch' AND student.sem='$sem' AND marks.res_type='$test'";

$res=mysqli_query($con,$sql);


echo "<table align=center border=1>";
echo "<tr bgcolor='lightgreen'><th>Enrollment</th><th>Student Name</th><th>Branch</th><th>Semester</th><th>Result Type</th><th colspan='5'>Subjects</th></tr>";
while($row=mysqli_fetch_array($res))
{
	 
  echo"<tr>
  <td>$row[0]</td>
  <td>$row[1]</td>
  <td>$row[2]</td>
  <td>$row[3]</td>
  <td>$row[4]</td>
  <td>";

    if($row[5]<7)
    echo "<font color=red>$row[5]</font>";
    else
    echo "<font color=blue>$row[5]</font>";	

  echo "</td>
  <td>$row[6]</td>
  <td>$row[7]</td>
  <td>$row[8]</td>
  <td>$row[9]</td>
  </tr>";
 


}

echo "</table>";

?>