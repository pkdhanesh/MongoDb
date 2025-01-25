<?php
$id = $_GET['id'];
try{
$connection = new Mongo();
$collection = $connection->student->regn;
} catch (MongoConnectionException $e) {
die('Failed to connect to MongoDB '.$e->getMessage());
}
$collection->remove(array('_id' => new MongoId($id)));
echo "Successfully Deleted";
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
<a href="form.php">Home</a>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
<a href=view.php>view</a>
</p>
</body> 
</html>
