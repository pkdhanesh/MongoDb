<?php
$action = (!empty($_POST['submit']) &&
($_POST['submit'] === 'Submit')) ? 'save_article'
: 'show_form';
$id = $_REQUEST['id'];
try {
$mongodb = new Mongo();
$articleCollection = $mongodb->student->regn;
} catch (MongoConnectionException $e) {
die('Failed to connect to MongoDB '.$e->getMessage());
}
switch($action){
case 'save_article':
$article= array();
$article['name']= $_POST['name'];
$article['gender']=$_POST['gender'];
$article['DOB']=$_POST['DOB'];
$article['age']=$_POST['age'];
$article['Address']=$_POST['Address'];
$article['email']=$_POST['email'];
$article['district']=$_POST['district'];
$article['phoneno']=$_POST['phoneno'];
$article['classX']=$_POST['classX'];
$article['classXII']=$_POST['classXII'];
$article['classX']=$_POST['classX'];
$article['Graduation']=$_POST['Graduation'];
$article['course']=$_POST['course'];
$articleCollection->update(array('_id' => new
MongoId($id)),
$article);
break;
case 'show_form':
default:
$article = $articleCollection->findOne(array('_id' =>
new MongoId($id)));
}
?>
<html >
<head>
</head>
<style>
body{
	background-image: url("bg4.jpg");
font: black  }
</style>
<?php if ($action === 'show_form'): ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table cellpadding="2" width="20%" align="center" cellspacing="2">
<tr>
   <td colspan=2>
   <center><font size=4><b><h4>STUDENT REGISTRATION FORM<h4></b></font></center></td>
</tr>

<tr>
   <td>Name</td>
   <td><input type="text" name="name" id="textname" value="<?php echo $article['name']; ?>"required/></td>
</tr>


<tr>
   <td>Gender</td>
  	<td> <input type="radio" name="gender" value="male" <?php echo ($article['gender'] == 'male') ? 'checked' : ''; ?>required /> Male
<input type="radio" name="gender" value="female" <?php echo ($article['gender'] == 'Female') ? 'checked' : ''; ?> required/>Female</td>
  
</tr>
<tr>
  	 <td>Age</td>
  	 <td><input type="text" name="age" id="age" value="<?php echo $article['age']; ?>"required/></td>
</tr>

<tr>

  <td>DOB</td>

  <td><input type="date" name="DOB" id="dob"  value="<?php echo $article['DOB']; ?>"required/></td>

  </tr

<tr>
   <td>Address</td>
    <td><textarea rows="3"  name="Address"> <?php echo $article['Address']; ?>
   </textarea></td>
</tr>

<tr>

 	<td>EmailId</td>

 	<td><input type="email" name="email" value="<?php echo $article['email']; ?>"required/></td>

</tr>



<tr>

  <td>District</td>

  <td><input type="text" name="district" id="place" value="<?php echo $article['district']; ?>"required/></td>

</tr>

<tr>
   <td>Phoneno</td>
   <td><input type="text" name="phoneno" id="phoneno" value="<?php echo $article['phoneno']; ?>"required/></td>
</tr>

<tr>
 	<td>QUALIFICATION </td>
 
		<td>
<table>
 

 
<tr>

	<td align="center"required><b>Sl.No.</b></td>

	<td align="center"required><b>Examination</b></td>
	
	<td align="center"required><b>Percentage</b></td>

</tr>
</tr>

<tr>

	<td>1</td>
	
	<td>Class X</td>

	<td><input type="text" name="classX" value="<?php echo $article['classX']; ?>"required/></td>
</tr>

<tr>

	<td>2</td>

	<td>Class XII</td>

	<td><input type="text" name="classXII" value="<?php echo $article['classXII']; ?>"required/></td>
</tr>

 <tr>
	<td>3</td>
	
	<td>Graduation</td>

	<td><input type="text" name="Graduation" value="<?php echo $article['Graduation']; ?>"required/></td>
	<p>
	</tr>
</table>
<br>



<tr>
   <td>course</td>
   
<td> <input type="radio" name="course" value="mca" <?php echo ($article['course'] == 'mca') ? 'checked' : ''; ?> /> MCA
<input type="radio" name="course" value="mba" <?php echo ($article['course'] == 'mba') ? 'checked' : ''; ?> />MBA</td>
  
</tr>
</td>
<br>

<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Submit">
	<input type="Reset" value="Reset"></td>
	


</tr>
  



<input type="hidden" name="id" value="<?php echo
$article['_id'];?>" />
</table>
</form>
<?php else: ?>
<p>
Details saved. _id: <?php echo $id;?>
<center><b>Updated Sucessfully</b></center>
<a href="form.php">Home</a>

</p>
<?php endif;?>

</html>





















