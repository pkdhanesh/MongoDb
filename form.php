<!DOCTYPE html>

<html>

	<head>

	<style>
body{
	background-image: url("parallax.jpg");
font: white  }


	li
	{
	text-align:justify;
	width:700px;
	line-height:2;
	}
	label
	{
	text-align:left;
	width:310px;
	display:inline-block;
	}

</style>
 	
	<script type="text/javascript" src="validate.js"></script>

</head>
<body>
<table align="right">
<tr><td bgcolor="yellow"><a href=login.php>Login</a></tr>
</table>
<font color="white">
<tr>
	<td colspan=2>
	<center><font size=5><b><h2>STUDENT REGISTRATION FORM</h2></b></font></center></td>
	<p><hr size=3 color="white">
           <i><font color=white><marquee>MBA / MCA   Register Here</marquee></font></i>
</tr>
</td>



<form method="post" action="add.php">
  

<table cellpadding="2" width="20%" align="center"
cellspacing="2">

<tr>

  <td>Name</td>

  <td><input type="text" name="name" id="textname" size="30"required></td>

</tr>
<tr>

  <td>Gender</td>

  <td><input type="radio" name="gender" value="male" size="10"required>Male

  <input type="radio" name="gender" value="Female" size="10">Female</td>

</tr>

<tr>

  <td>Age</td>

  <td><input type="text" name="age" id="age" size="20"required></td>

</tr>

<tr>

  <td>DOB</td>

  <td><input type="date" name="DOB" id="dob" size="30"required></td>

  </tr>

<tr>
     <td>Address</td>															
     
    <td><textarea name="Address" rows="4" cols="30"required></textarea></td>

      </tr>

<tr>

 	<td>EmailId</td>

 	 <td><input type="email" name="email" id="email" size="30"required></td>


</tr>

<tr>

  <td>District</td>

  <td><input type="text" name="district" id="place" size="30"required></td>

</tr>

<tr>

  <td>PhoneNo</td>

  <td><input type="tel" name="phoneno" id="phoneno" maxlength="15" size="30"required></td>

</tr>
 <p>
<tr>
 	<td>QUALIFICATION </td>
 
	<td>
<table>
 
<tr>

	<td align="center"><b>Sl.No.</b></td>

	<td align="center"><b>Examination</b></td>
	
	<td align="center"><b>Percentage</b></td>

</tr>
 
<tr>

	<td>1</td>
	
	<td>Class X</td>

	<td><input type="text" name="classX" maxlength="30"required /></td>

</tr>
 
<tr>

	<td>2</td>

	<td>Class XII</td>

	<td><input type="text" name="classXII" maxlength="30"required /></td>
</tr>

 <tr>
	<td>3</td>
	
	<td>Graduation</td>

	<td><input type="text" name="Graduation" maxlength="30"required /></td>
	<p>
	</tr>
</table>
<br>


<tr>

<td>Course</td>

  <td><input type="radio" name="course" value="mca" size="10"required>MCA

  <input type="radio" name="course" value="mba" size="10"required>MBA</td>

</tr>

<br>

<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Submit">
	<input type="Reset" value="Reset"></td>
	

  <form action="form.php">


</form>

  
  
</tr>

</table>
  </form>

  </body>

  </html>


