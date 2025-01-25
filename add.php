<?php
$connection  = new MongoClient();
//echo "Connection to database successfully";
 // select a database
 $database=$connection->student;
//echo "Database student selected";
$collection = $database->regn;
//echo "Collection created succsessfully";
//retrieve the id

$name=$_POST['name'];
$gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$age=$_POST['age'];
$address=$_POST['Address'];
$email=$_POST['email'];
$district=$_POST['district'];
$phoneno=$_POST['phoneno'];
$classX =(int)$_POST['classX'];
$classXII=(int)$_POST['classXII'];
$Graduation=(int)$_POST['Graduation'];
$course=$_POST['course'];
//insert

$document=array('name'=>$name,'gender'=>$gender,'DOB'=>$DOB,'age'=>$age,'Address'=>$address,'email'=>$email,'district'=>$district,'phoneno'=>$phoneno,'classX'=>$classX,'classXII'=>$classXII,'Graduation'=>$Graduation,'course'=>$course);
$collection->insert($document);

echo" Successfully Registerd";

?>
<!DOCTYPE html> 
<html > 
<head> 
</head> 
<style>
body{
	background-image: url("bg4.jpg");
font: black  }
</style>
<p>
<a href="form.php">Home</a> 
</body> 
</html>


