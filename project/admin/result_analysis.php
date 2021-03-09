<?php

?>
<body bgcolor="#DB8742">
<h2><p align="center"><font color="blue">
FIND RESULT 
</font></p></h2>

<form method="POST" action="find_result.php">

<table align="center" border="1" bgcolor="#BEEF63">


<tr>
	 <td><b>Select Branch
	</b> </td>

	 <td>
	 	<select name="branch">
             <option>CS</option>
             <option>IT</option>
             <option>ME</option>
             <option>CE</option>
             <option>EC</option>
        </select>
	 </td>
</tr>

<tr>
	 <td><b>Select Semester
	 </b></td>

	 <td>
	 	<select name="sem">
             <option>1</option>
             <option>3</option>
             <option>5</option>
             <option>7</option>
        </select>
	 </td>
</tr>

<tr>
	 <td><b>Select Result Type
	</b> </td>

	 <td>
	 	<select name="test">
             <option>UT1</option>
             <option>UT2</option>
             <option>MST1</option>
             <option>MST2</option>
             <option>PUT</option>
        </select>
	 </td>
</tr>

<tr><td colspan="2" align="center">

	<input type ="submit" value="Find Result">

</td>
</tr>


</table>
</form>
</body>